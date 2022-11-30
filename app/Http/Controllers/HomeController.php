<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kelompok5\GeneratorJadwalSholat\Core;

class HomeController extends Controller
{
    public function index() {
        $api = new Core("kota","Surabaya","25-11-2022");
        return response()->json($api->getData());
    }

    public function jadwalSalat() {
        $api = new Core("kota","Surabaya","25-11-2022");
        $data = $api->getData();
        return view("jadwalSalat", ["data"=>$data]);
    }

    
}
