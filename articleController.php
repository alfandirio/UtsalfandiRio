<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    public function article ($page){
  
   return view('article', ['page'=>$page]);

    }
}
