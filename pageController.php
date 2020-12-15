<?php

namespace App\Http\controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
	public function welcome(){
return ("SELAMAT DATANG");
  }
  public function about(){
return "NAMA: ALFANDI RIO ADITYA <br> NIM: 1931710059";
  }
  public function articles($page){
return 'Halaman Artikel Ini dengan Id'.$page;
  }
}
