<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productcontroller extends Controller
{
    public function index(){
        return view('products.index');
    }
    public function create(){
        return view('products.create');
    }
}
