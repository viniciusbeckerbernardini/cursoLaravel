<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function products(){
        return "<h1>Hello products</h1>";
    }

    public function multiplicar($n1,$n2){
        return $n1 * $n2;
    }
}
