<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tentang  Saya</title>
</head>
<body>
    <header>
    <h1>Halaman about</h1>
    </header>
    <hr>
	<h3> Hello, {{$tentang}}</h3>
    <hr>
	<p> Perkenalan: {{$detail}}</p>
    <hr>
</body>
</html>
 <!-- Menghubungkan dengan view tempalte master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman','halaman About')


<!-- isi bagian konten -->
<!-- Cara penulisan isi section yang panjang -->
@section('konten')
<h1> Halo Selamat datang di Halaman About </h1>
<h3> Perkenalkan Saya<h3>
<table border = "2" cellpadding = "20">
    <tr>
    <td>
        <p> Data Pribadi: </p>
        <p> Nama Saya ALFANDI RIO ADITYA</p>
        <P> Saya Sedang Menempuh Kuliah DI Politeknik Negeri Malang </p>
        </tr>
        </td>
        </table>
@endsection
