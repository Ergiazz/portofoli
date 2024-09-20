<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutcon extends Controller
{
    public function index(){
        return view("about");
    }
}
