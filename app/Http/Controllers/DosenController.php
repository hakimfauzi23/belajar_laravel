<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Diki Alfarabi Hadi";
    	$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
 
    	return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);
    }

    // #6 MAINTENANCE MODE IS DONE
    // #7 ENV CONFIGURATION IS DONE
    // #13 CRUD : SOURCE CODE IS DONE 
}
