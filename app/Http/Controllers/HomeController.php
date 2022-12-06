<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kelompok5\GeneratorJadwalSholat\Core;
use Kelompok5\GeneratorJadwalSholat\JadwalBuilder;

class HomeController extends Controller
{
    public function index() {
        $api = new Core("kota","malang","25-11-2022");
        return response()->json($api->getData());
    }

    public function jadwalSalat() {
        $api = (new JadwalBuilder())
        ->setBy("provinsi") //kota/provinsi
        ->setLokasi("jawa timur")
        ->setTanggal("3-12-2022") //d-m-y
        ->build();
        $data = $api->getData();
        return view("jadwalSalat", ["data"=>$data]);
    }
}
