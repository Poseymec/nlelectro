<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //

    public function home(){
        return view('client.home');
    }

    public function store(){
        return view('client.store');
    }
    
    public function productdetail(){
        return view('client.productdetail');
    }
    public function checkout(){
        return view('client.checkout');
    }
}
