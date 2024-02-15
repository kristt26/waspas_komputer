<?php

namespace App\Controllers;

class Home extends BaseController
{
    protected $laptop;
    protected $detail;

    public function __construct() {
        $this->laptop = new \App\Models\LaptopModel();
        $this->detail = new \App\Models\DetailModel();
    }
    public function index()
    {
        $laptop = $this->laptop->findAll();
        $detail = $this->detail->findAll();
        foreach ($laptop as $itemLaptop) {
            $itemLaptop->detail = [];
            foreach ($detail as $itemDetail) {
                if($itemLaptop->id == $itemDetail->laptop_id) $itemLaptop->detail[] = $itemDetail;
            }
        }
        return view("home", ["data"=>$laptop]);
    }
}
