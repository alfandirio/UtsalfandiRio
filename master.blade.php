<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Blade </title>
</head>
<body>
<header>
        <h2> Selamat Datang Di WEBNYA RIO <h2>
    </header>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        </div>
        <div class="pull-left info">
        </i> Selamat Datang</a>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">WEBSITE RIO</li>
        <li class="active treeview">
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/home"></i> HOME</a></li>
            <li><a href="/about"><i class="fa fa-circle-o"></i> ABOUT</a></li>
            <li><a href="/article/1"><i class="fa fa-circle-o"></i> ARTICLE</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
    <hr/>
    <br/>
    <br/>
    <!--bagian judul halaman blog -->
    <h3> @yield('judul_halaman')</h3>
    <!-- bagian konten blog -->
    @yield('konten')
    <br/>
    <br/>
    <hr/>
        <footer>
        <p> SAMPAI JUMPA DAN SUKSES TERUS</p>
        <li class="nav-item {{ Route::is('manage') ? 'active' : '' }}"> 
   @can('manage-articles') 
   <a class="nav-link" href="{{ route('manage') }}">Kelola</a> 
   @endcan 
</li> 
li class="nav-item {{ Route::is('home') ? 'active' : '' }}"> 
    @can('user-display') 
    <a class="nav-link" href="{{ route('home') }}">Home</a> 
    @endcan 
</li> 
<li class="nav-item {{ Route::is('about') ? 'active' : '' }}"> 
    @can('user-display') 
    <a class="nav-link" href="{{ route('about') }}">About</a> 
    @endcan 
</li> 
li class="nav-item {{ Route::is('MAHASISWA') ? 'active' : '' }}"> 
    @can('user-display') 
    <a class="nav-link" href="{{ route('MAHASISWA') }}">MAHASISWA</a> 
    @endcan 
public function redirectTo() 
{ 
    $for = [ 
       'Administrator' => 'manage',    'User'  => 'home', 
    ]; 
    return $this->redirectTo = route($for[auth()->user()->roles]); } 

</body>
</html>

