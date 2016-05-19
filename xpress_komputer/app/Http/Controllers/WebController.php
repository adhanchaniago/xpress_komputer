<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WebController extends Controller
{
//index
    public function index(){
    	return view('index');
    }
    //keranjang
    public function keranjang(){
    	return view('keranjang');
    }
    //konfirmasi
    public function konfirmasi(){
    	return view('konfirmasi');
    }
    //search
    public function search(){
    	return view('search');
    }
}
