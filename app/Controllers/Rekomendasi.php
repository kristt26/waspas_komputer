<?php

namespace App\Controllers;

use ocs\spklib\Waspas;

class Rekomendasi extends BaseController
{
    protected $laptop;
    protected $detail;
    protected $kriteria;

    public function __construct()
    {
        $this->laptop = new \App\Models\LaptopModel();
        $this->detail = new \App\Models\DetailModel();
        $this->kriteria = new \App\Models\KriteriaModel();
    }

    public function index()
    {
        return view("rekomendasi");
    }

    function read(): object
    {
        return $this->respond($this->kriteria->findAll());
    }

    function hitung(): object
    {
        $conn = \Config\Database::connect();
        $param = $this->request->getJSON();
        $laptop = $this->laptop->findAll();
        $dataDetail = $this->detail->select("detail.*, kriteria.kode")->join("kriteria", "kriteria.id=detail.kriteria_id")->findAll();

        $dataKriteria = [];

        foreach ($laptop as $key => $value) {
            $value->nilai = [];
            foreach ($dataDetail as $key => $value1) {
                if ($value->id == $value1->laptop_id) {
                    $value->nilai[] = $value1;
                }
            }
        }

        $dataLaptop = $laptop;
        foreach ($laptop as $key => $value) {
            foreach ($param as $key => $value2) {
                foreach ($value->nilai as $key => $value1) {
                    if ($value1->kriteria_id == $value2->id) {
                        if ($value1->nilai > $value2->nilai) {
                            $dataLaptop = $this->unsetValue($dataLaptop, $value, true);
                        }
                    }
                }
                break;
            }
        }

        foreach ($param as $key => $value) {
            $dataKriteria[] = (array) $value;
        }
        $dataItemLaptop = [];
        foreach ($dataLaptop as $key => $value) {
            $dataItemLaptop[] = (array)$value;
        }
        $dataLaptop = [];
        foreach ($dataItemLaptop as $key1 => $value) {
            $item = [];
            foreach ($value['nilai'] as $key2 => $value1) {
                $value1->bobot = $value1->nilai;
                $item[] = (array) $value1;
            }
            $value['nilai'] = $item;
            $dataLaptop[] = $value;
        }

        try {
            $dataHitung = new Waspas((array)$dataKriteria, (array) $dataLaptop, 7);
            return $this->respond($dataHitung);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    function unsetValue(array $array, $value, $strict = TRUE)
    {
        if (($key = array_search($value, $array, $strict)) !== FALSE) {
            unset($array[$key]);
        }
        return $array;
    }
}
