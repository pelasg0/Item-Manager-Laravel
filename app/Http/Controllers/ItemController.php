<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(){
        $kek = "dadasdasd";
        
        return view("insert", compact("kek"));
    }
}
