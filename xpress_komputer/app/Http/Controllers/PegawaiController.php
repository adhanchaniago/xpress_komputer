<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PegawaiController extends Controller
{
    //index
    public function index(){
    	return view('pegawai/index');
    }
    //create
    public function create(){
    	return view('pegawai/create');
    }
    //update
    public function update(){
    	return view('pegawai/update');
    }
    //delete
    public function delete(){
    	return view('pegawai/delete');
    }
}
