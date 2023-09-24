<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{

    public function index()
    {
        $name = 'Universitas PGRI Madiun';
        $singkat = 'Unipma';
        $lokasi = 'Jalan Setiabudi, Kartoharjo, Madiun';
        $tahun = '17 Mei 1976';

        $data['name'] = $name;
        $data['singkat'] = $singkat;
        $data['lokasi'] = $lokasi;
        $data['tahun'] = $tahun;

        return view('informasi/index', $data);

    }

}