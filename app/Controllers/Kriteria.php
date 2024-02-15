<?php

namespace App\Controllers;

class Kriteria extends BaseController
{
    protected $kriteria;
    public function index()
    {
        return view("admin/kriteria");
    }

    function read() : object {
        $this->kriteria = new \App\Models\KriteriaModel();
        return $this->respond($this->kriteria->findAll());
    }

    function post() : object {
        $this->kriteria = new \App\Models\KriteriaModel();
        $data = $this->request->getJSON();
        try {
            if($this->kriteria->insert($data)){
                $data->id = $this->kriteria->getInsertID();
                return $this->respondCreated($data);
            }
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }

    function put() : object {
        $this->kriteria = new \App\Models\KriteriaModel();
        $data = $this->request->getJSON();
        try {
            if($this->kriteria->update($data->id, $data)){
                return $this->respondUpdated(true);
            }
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
    
    function delete($id = null) : object {
        $this->kriteria = new \App\Models\KriteriaModel();
        try {
            if($this->kriteria->delete($id)) return $this->respondDeleted(true);
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
}
