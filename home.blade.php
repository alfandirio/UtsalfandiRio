<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Selamat Datang Praktikum Web Lanjut</title>
</head>
<body>
	<header>
    <h1>Halaman Home</h1>
    </header>
	<hr>
	<h3> Hello, {{$ucapan}}</h3>
	<hr>
	<p> Perkenalan Sedikit : {{$perkenalan}}</p>
	<hr>
</body>
 <!-- Menghubungkan dengan view tempalte master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman','halaman Utama')


<!-- isi bagian konten -->
<!-- Cara penulisan isi section yang panjang -->
@section('konten')
<h1> Welcome To Website</h1>
<h3> Kami akan Memberikan Berita yang Viral hari ini <h3>
<table border = "2" cellpadding = "20">
    <tr>
    <td>
        <p> Senang Bisa bertemu dengan anda </p>
        </tr>
        </td>
        </table>
		
@endsection

