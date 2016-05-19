<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BarangController extends Controller
{
    //index
    public function index(){
    	return view('barang/index');
    }
    //create
    public function create(){
    	return view('barang/create');
    }
    //update
    public function update(){
    	return view('barang/update');
    }
    //delete
    public function delete(){
    	return view('barang/delete');
    }
}
