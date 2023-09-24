<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $name = 'Amalia Chrissafa Zalzabila';
        $panggilan = 'Safa';
        $prodi = 'S-1 Teknik Informatika';
        $universitas = 'Universitas PGRI Madiun';


        $data['name'] = $name;
        $data['panggilan'] = $panggilan;
        $data['prodi'] = $prodi;
        $data['universitas'] = $universitas;

    return view('profile/index', $data);

    }
}