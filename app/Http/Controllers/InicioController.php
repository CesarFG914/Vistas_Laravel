<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view("cesar");
    }

    public function dex(){
        return view("juab");
    }

    public function dex2(){
        return view("padilla");
    }
}
