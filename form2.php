<!DOCTYPE html>
<!-- saved from url=(0064)https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/ -->
<html lang="en" class="h-100"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Sticky Footer Navbar Template · Bootstrap v5.2</title>
 
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/">
 
   
 
   
 
<link href="./form1_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
 
    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="https://getbootstrap.com/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">
 
 
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }
 
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
 
      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }
 
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
 
      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
 
      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }
 
      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>
 
   
    <!-- Custom styles for this template -->
    <link href="./form1_files/sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
   
<header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/#">Fixed navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://getbootstrap.com/docs/5.2/examples/sticky-footer-navbar/#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>
 
<!-- Begin page content -->
<main class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Halaman Input Data Tabel Mahasiswa</h1>
 
   
    <form action="proses_mahasiswa.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nim  Mahasiswa </label>
    <input name="nim" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Mahasiswa</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input name="alamat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis Kelamin</label>
    <input name="jenis_kelamin" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Nomor Telepon</label>
    <input name="no_tlp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email Mahasiswa</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Tempat Lahir</label>
    <input name="tempat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
 
  <div class="form-group">
    <label for="exampleInputEmail1">Link </label>
    <input name="link" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">id_jurusan</label>
    <input name="id_jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir</label>
    <input name="tanggal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
  </div>
 <br>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
 
 
 
</div>
</main>
 
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>
 
 
    <script src="./form1_files/bootstrap.bundle.min.js.download" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
     
 
 
<div id="torrent-scanner-popup" style="display: none;"></div></body></html>