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
    <h1 class="mt-5">Halaman Tampil Data Mahasiswa</h1>
 
   
   
    <table class="table">
  <thead>
    <tr>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Kelamin</th>
      <th scope="col">No Telp</th>
      <th scope="col">Email</th>
      <th scope="col">Tempat</th>
      <th scope="col">Tanggal</th>
    </tr>
  </thead>
  <tbody>
 
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "akademik_vokasi";
 
$conn = mysqli_connect($servername, $username, $password, $dbname);
 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
 
 
$sql = "SELECT * FROM mahasiswa";
 
 
 
$result = mysqli_query($conn, $sql);
 
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
 
 
    echo " <tr><td>" . $row["nim"]. " </td><td> " . $row["nama"]. "</td><td>" . $row["alamat"]. "</td><td>". $row["jenis_kelamin"]."</td><td>". $row["no_tlp"]."</td><td>". $row["email"]."</td><td>". $row["tanggal"]."</td><td>". $row["tempat"]."</td><td>
    <a href='proses_delete.php?id=". $row["id"]."' <button type='button' class='btn btn-danger'>Delete</button></a>
    </td><td> <a href='form_edit_mahasiswa.php?id=". $row["id"]."' <button type='button' class='btn btn-success'>Edit</button></a> </td></tr>";
  }
} else {
  echo "0 results";
}
 
mysqli_close($conn);
?>
 
 
 
   
     
   
 
  </tbody>
</table>
 
 
 
</div>
</main>
 
<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>
 
 
    <script src="./form1_files/bootstrap.bundle.min.js.download" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 
     
 
 
<div id="torrent-scanner-popup" style="display: none;"></div></body></html>
