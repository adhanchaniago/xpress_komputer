<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TransaksiController extends Controller
{
    //index
    public function index(){
    	return view('transaksi/index');
    }
    //create
    public function create(){
    	return view('transaksi/create');
    }
    //update
    public function update(){
    	return view('transaksi/update');
    }
    //delete
    public function delete(){
    	return view('transaksi/delete');
    }
}
