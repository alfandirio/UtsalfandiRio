<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class homeController extends Controller
{
       public function home(){
       Cache::remember('articlesall',15,function(){
              return Article::all();
       });
       $articlesAll = Cahce::get('articlesAll');
       $articlesAll = jsone_decode(jsone_encode($articlesAll));
       article:all();
       return view('home',['ucapan'=>'Selamat Datang Pada Halaman Home'],['perkenalan'=>'Halo Nama Saya Alfandi rio aditya, Saya kuliah DI Politeknik Negeri Malang, Saya Sedang Mencoba Web ']);
        


       
}
}
