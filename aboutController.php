<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about(){
        return view('about', ['tentang'=>'hallo kembali lagi dengan Saya, Pada Halaman About Saya disini Mau Memperkenalkan diri'],
        ['detail'=>'Halo Saya disini akan memperkenalkan diri saya, 
        Halo nama Alfandi rio aditya, Saya Sedang menempuh Pendidikan DI kota Dingin yaitu Malang, Saya bercita cita ingin membangun resto dan sebagai chef yang handal']);
}
}
   