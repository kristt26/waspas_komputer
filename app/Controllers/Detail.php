<?php

namespace App\Controllers;

class Detail extends BaseController
{
    protected $detail;

    function put() : object {
        $this->detail = new \App\Models\DetailModel();
        $data = $this->request->getJSON();
        try {
            if($this->detail->update($data->id, $data)){
                return $this->respondUpdated(true);
            }
        } catch (\Throwable $th) {
            return $this->fail($th->getMessage());
        }
    }
}
