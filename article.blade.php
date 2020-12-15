<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Page</title>
</head>
<body>
    <header>
    <h1> Halo Selamat datang Di Halaman Masakan Rio</h1>
    </header>
    <hr>
    <br>
    <h3> Masakan Pertama  - {{$page}}</h2>
    <br>
    <hr>
    <h3> Halo saya menyajikan informasi tentang masakan khas bandung<h3>
    <hr>
    <h3> Berita Hari ini<h3>
    <table border = "2" cellpadding = "20">
    <tr>
    <td>
    <h3> seblak</p>
    <h3>Belum ke Bandung jika kamu belum mencoba makan seblak. Makanan khas Bandung yang terbuat dari kerupuk basah ini memiliki rasa yang khas karena dibuat dari bumbu rempah dan memiliki isian yang mengenyangkan seperti sayur, daging dan telur. Ada beberapa tempat asyik untuk merasakan seblak, namun salah satu yang layak direkomendasikan adalah Seblak Jebred yang memiliki tambahan ceker di isiannya, plus tahu krispi, sosis dan kikil. Supaya semakin nyam-nyam, naikkan versi pedasnya, ya! Harganya juga cukup ramah di kantong, lho!</p>
        </tr>
        </td>
    
</body>
</html>
@extends('master')
@section('judul_halaman','halaman Article')
@section('konten')
<h1> Halo Selamat datang di Masakan khas bandung</h1>
<h3> Berita Yang sedang hangat Hari ini <h3>
<table border = "2" cellpadding = "20">
    <tr>
    <td>
        <p> Nasi Tutug Oncom </p>
        <ul class="treeview-menu">
            <p> Dari namanya, kamu sudah bisa menebak seperti apa komposisi kuliner ini. Nasi yang ditumbuk dan dicampur oncom, ditambah dengan lauk pauk yang sesuai dengan selera, kamu bisa mendapatkan sensasi rasa yang aduhai.

            Namun, pertanyaan besarnya, di mana tempat yang menyajikan nasi tutug oncom paling mantab? Ada banyak pendapat, dan semuanya memiliki cita rasanya sendiri. Kami merekomendasikan Nasi Tutug Oncom Bi Kokom di daerah Lengkong, yang tidak hanya memiliki menawarkan rasa yang pas, tapi juga fasilitas yang memadai. </p>
            <li class="active"><a href="https://www.tripzilla.id/makanan-khas-bandung/6944"></i>Masakan Bandung</a></li>
            <br>
            
            
          <br>
          </ul>
        </tr>
        </td>
        </table>
            @csrf 
           