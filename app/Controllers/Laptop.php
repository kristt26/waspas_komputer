<?php

namespace App\Controllers;

class Laptop extends BaseController
{
    protected $laptop;
    protected $detail;
    protected $kriteria;
    protected $decode;
    public function index()
    {
        return view("admin/laptop");
    }

    function read() : object {
        $this->laptop = new \App\Models\LaptopModel();
        $this->detail = new \App\Models\DetailModel();
        $detail = $this->detail->select("detail.*, kriteria.nama")->join("kriteria", "kriteria.id=detail.kriteria_id")->findAll();
        $kriteria = $this->laptop->findAll();
        foreach ($kriteria as $key => $value1) {
            $value1->detail = [];
            foreach ($detail as $key => $value) {
                if($value1->id == $value->laptop_id) $value1->detail[] = $value;
            }
        }
        return $this->respond($kriteria);
    }

    function post() : object {
        $this->laptop = new \App\Models\LaptopModel();
        $this->detail = new \App\Models\DetailModel();
        $this->kriteria = new \App\Models\KriteriaModel();
        $this->decode = new \App\Libraries\Decode();
        $conn = \Config\Database::connect();
        $data = $this->request->getJSON();
        try {
            $conn->transBegin();
            $data->file = isset($data->gambar) ? $this->decode->decodebase64($data->gambar->base64) : NULL;
            if($this->laptop->insert($data)){
                $data->id = $this->laptop->getInsertID();
                $kriteria = $this->kriteria->findAll();
                foreach ($kriteria as $key => $value) {
                    $item = [
                        "kriteria_id"=>$value->id,
                        "laptop_id"=>$data->id
                    ];
                    if($this->detail->insert($item)){
                        $item['id'] = $this->detail->getInsertID();
                    }
                }
            }
            if($conn->transStatus()){
                $conn->transCommit();
                $data->detail = $this->detail
                ->select("detail.*, kriteria.nama")
                ->join("kriteria", "kriteria.id=detail.kriteria_id")
                ->where('laptop_id',  $data->id)->findAll();
                return $this->respondCreated($data);
            }else{
                $conn->transRollback();
                throw new \Exception("Gagal simpan", 1);
            }
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    function put() : object {
        $this->laptop = new \App\Models\LaptopModel();
        $this->decode = new \App\Libraries\Decode();
        $data = $this->request->getJSON();
        try {
            isset($data->gambar) ? $data->file = $this->decode->decodebase64($data->gambar->base64): false;
            if($this->laptop->update($data->id, $data)){
                return $this->respondUpdated($data);
            }
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
    
    function delete($id = null) : object {
        $this->laptop = new \App\Models\LaptopModel();
        try {
            if($this->laptop->delete($id)) return $this->respondDeleted(true);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
}
