<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainControll extends Controller
{
   public function index(){
        return view('index0082');
    }
    public function dokter(){    
        return view('dokter0082');
    }
    public function kamar(){
        return view('kamar0082');
    }   
    public function pasien(){
        return view('pasien0082');
    }  
    public function user(){
        return view('user0082');
    }  
}