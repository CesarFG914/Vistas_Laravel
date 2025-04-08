<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        return view("home",["titulo"=>"home"]);
        //return redirect()->route("/home");
    }

    public function in(){
        return view("Mexico",["titulo"=>"Mexico"]);
    }

    public function i(){
        return view("Alemania",["titulo"=>"Alemania"]);
    }

    public function n(){
        return view("Brasil",["titulo"=>"Brasil"]);
    }

    public function d(){
        return view("Argentina",["titulo"=>"Argentina"]);
    }

    public function e(){
        return view("Francia",["titulo"=>"Francia"]);
    }


    public function dex(){
        return view("juab");
    }

    public function dex2(){
        return view("padilla");
    }
}
