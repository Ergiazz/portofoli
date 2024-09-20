<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactcon extends Controller
{
    public function index(){
        return view("contact");
    }
}
