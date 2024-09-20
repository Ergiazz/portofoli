<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectcon extends Controller
{
    public function index(){
        return view("project");
    }
}
