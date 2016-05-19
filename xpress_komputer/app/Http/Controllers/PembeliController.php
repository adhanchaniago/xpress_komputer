<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PembeliController extends Controller
{
    //index
    public function index(){
    	return view('pembeli/index');
    }
    // //create
    // public function create(){
    // 	return view('pembeli/create');
    // }
    //update
    public function update(){
    	return view('pembeli/update');
    }
    //delete
    public function delete(){
    	return view('pembeli/delete');
    }
    //register
    public function register(){
        return view('register');
    }
    //setting
    public function setting(){
        return view('setting');
    }
}
