<?php
  include('connect.php');
  $id = $_GET['id'];
  $query = mysqli_query($con,"SELECT * FROM data_movie WHERE id = $id");
  $result = mysqli_fetch_array($query);    
?>

<html>
<head>
<title><?=$result['name']?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>
<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="
    background-color: cadetblue;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Movie PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./">หน้าแรก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ยอดฮิต</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">หมวดหมู่</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">ติดต่อเรา</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="ค้นหา" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">ค้นหา</button>
      </form>
    </div>
  </div>
</nav>


<div class="album py-5 bg-light" style="background-color: #d8ed7a!important;">
    <div class="container">
        <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">หน้าแรก</a></li>
        <li class="breadcrumb-item active" aria-current="page"><?=$result['name']?></li>
    </ol>
    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="<?=$result['img']?>" while="100%" height="380" class="card-img-top"/>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="380" src="https://www.youtube.com/embed/<?=$result['vdo_ex']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mb-4 shadow-sm text-center" style="background-color: #f30737!important;"><h3>Player</h3></div>
            <div class="card mb-4 shadow-sm">
                <iframe width="100%" height="623" src="https://www.youtube.com/embed/<?=$result['vdo_main']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </div>
  </div>
  </div>
  <footer class="blog-footer text-center">
  <p>ดูหนังออนไลน์ฟรีที่นี้เลย <a href="https://getbootstrap.com/">Movie PHP</a> by <a href="https://twitter.com/mdo">@Bas</a>.</p>
  </footer>
</body>
</html>
