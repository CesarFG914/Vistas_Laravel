<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view("home");
    }

    public function in(){
        return view("Mexico");
    }

    public function i(){
        return view("Alemania");
    }

    public function n(){
        return view("Brasil");
    }

    public function d(){
        return view("Argentina");
    }

    public function e(){
        return view("Francia");
    }


    public function dex(){
        return view("juab");
    }

    public function dex2(){
        return view("padilla");
    }
}
