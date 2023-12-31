<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'Amalia Chrissafa Zalzabila';

        return view('landing/index',compact('name'));
    }

    public function profile()
    {
    return view('profile/index');
    }
}