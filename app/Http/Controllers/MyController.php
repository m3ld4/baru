<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\keluarga;
use App\anak;

class MyController extends Controller
{
    public function index()
    {
    	$a = "Melda Sofiana";
       	return "Nama Saya Adalah:<b>".$a."</b>";
    }
    public function tampilan()
    {
    	return view('about');
    }
    public function tampilmodel()
    {
    	$keluarga = keluarga::all();
    	return view('about', compact('keluarga'));
    }
    public function tampilmodel1()
    {
        $anak = anak::all();
        return view('aboutt', compact('anak'));
    }
}
