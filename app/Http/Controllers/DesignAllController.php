<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesignAllController extends Controller
{
    public function design_all(){
        return view('design.all');
    }

    public function photo_site1(){

        return view('design.photo_site1');
    }

    public function photo_site2(){

        return view('design.photo_site2');
    }
    public function photo_site3(){

        return view('design.photo_site3');
    }
}
