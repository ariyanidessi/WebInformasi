<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: adminLogin.php');
  exit();
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Padukuhan Jlumbang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <nav class="navbar navbar-dark" style="background-color: #3C4735;">
    <div class="container ">
      <div class="container navbar-brand">
        <h2 style="font-size: 20px">Padukuhan Jlumbang</h2>
      </div>
    </div>
  </nav>

  <div class="sidebar2">
    <div class="list-group" style="margin-top: 60px;">
      <a href="adminHome.php" type="button" class="list-group-item list-group-item-action" style="margin-top: 5px; background-color: #54B435 ;">
        HOME
      </a>
      <a href="adminMonografi.php" type="button" class="list-group-item list-group-item-action" style="margin-top: 7px; background-color: #54B435 ;">Monografi</a>
      <button type="button" class="list-group-item list-group-item-action active" style="margin-top: 7px; background-color: #54B435 ;"><b>Berita</b></button>
      <a href="adminLogin.php" type="button" class="list-group-item list-group-item-action" style="margin-top: 7px; background-color: #54B435 ;">Logout</a>
    </div>
  </div>

  <div class="container col-md-7 p-5">
    <h3>Berita Dusun Jlumbang</h3>

    <div class="card" style="border: 1px solid">
      <div class="card-body">
        <form action="adminTambahBerita.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3 row">
            <label for="judulBerita" class="col-sm-2 col-form-label">Judul Berita</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="judulBerita" name="judulBerita">
            </div>
          </div>

          <div class="mb-3 row">
            <label for="isiBerita" class="col-sm-2 col-form-label">Isi Berita</label>
            <div class="col-sm-10">
              <textarea class="form-control" id="isiBerita" name="isiBerita" rows="10"></textarea>
            </div>
          </div>

          <div class="mb-3 row">
            <label for="foto" class="col-sm-2 col-form-label">Pilih Foto</label>
            <div class="col-sm-10">
              <input type="file" class="form-control" id="foto" name="myImage" accept="image/*">
            </div>
          </div>

          <div class="col mx-5">
            <input type="submit" class="btn" name = "submit" style="background-color: #DBCE7B; width: 100%; margin-top: 30px; color: #FEFDFC;">
          </div>
        </form>
      </div>
      <a href="adminListBerita.php" class="align-self-end m-3">Lihat selengkapnya</a>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>