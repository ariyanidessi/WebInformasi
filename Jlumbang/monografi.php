<?php
include 'config.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Monografi Padukuhan Jlumbang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script>
    $(document).ready(function() {
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
          $(".navbar").css("background", "#379237");
        } else {
          $(".navbar").css("background", "");
        }
      })
    })
  </script>
  <!-- header -->
  <div class="head" id="monografi-bg">
    <!-- Navbar -->
    <nav class="navbar navbar-default fixed-top navbar-expand-sm navbar-dark">
      <div class="container-md">
        <a class="navbar-brand" href="index.php">Padukuhan Jlumbang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-link" href="index.php">Beranda</a>
            <a class="nav-link" href="profil.php">Profil</a>
            <a class="nav-link active" aria-current="page" href="monografi.php">Monografi</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Welcome Page -->
    <div class="welcome">
      <h1>Monografi</h1>
      <h6>Padukuhan Jlumbang</h6>
    </div>
  </div>
  <!-- tabel -->
  <div class="monog-content container-md p-5 pt-0 align-items-center">
    <!-- tabel jenis Kelamin -->
    <table class="table table-striped table-bordered mt-5">
      <thead>
        <tr class="text-start">
          <th scope="col" colspan="3">Menurut Jenis Kelamin</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 1;
        $query = "SELECT * FROM `monografi` WHERE id LIKE 'JK%'";
        $result = mysqli_query($con, $query);

        while ($row = $result->fetch_assoc()) {
        ?>
          <tr>
            <td class="text-center col-1"><?php echo $count ?></td>
            <td><?php echo $row['kependudukan'] ?></td>
            <td class="text-center col-2"><?php echo $row['jumlah'] ?></td>
          </tr>
        <?php
          $count++;
        }
        ?>
      </tbody>
    </table>
    <!-- tabel agama -->
    <table class="table table-striped table-bordered mt-5">
      <thead>
        <tr class="text-start">
          <th scope="col" colspan="3">Menurut Agama</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 1;
        $query = "SELECT * FROM `monografi` WHERE id LIKE 'AG%'";
        $result = mysqli_query($con, $query);

        while ($row = $result->fetch_assoc()) {
        ?>
          <tr>
            <td class="text-center col-1"><?php echo $count ?></td>
            <td><?php echo $row['kependudukan'] ?></td>
            <td class="text-center col-2"><?php echo $row['jumlah'] ?></td>
          </tr>
        <?php
          $count++;
        }
        ?>
      </tbody>
    </table>
    <!-- tabel wajar 9 tahun -->
    <table class="table table-striped table-bordered mt-5">
      <thead>
        <tr class="text-start">
          <th scope="col" colspan="3">Wajar 9 Tahun</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 1;
        $query = "SELECT * FROM `monografi` WHERE id LIKE 'W%'";
        $result = mysqli_query($con, $query);

        while ($row = $result->fetch_assoc()) {
        ?>
          <tr>
            <td class="text-center col-1"><?php echo $count ?></td>
            <td><?php echo $row['kependudukan'] ?></td>
            <td class="text-center col-2"><?php echo $row['jumlah'] ?></td>
          </tr>
        <?php
          $count++;
        }
        ?>
      </tbody>
    </table>
    <!-- tabel tingkat pendidikan -->
    <table class="table table-striped table-bordered mt-5">
      <thead>
        <tr class="text-start">
          <th scope="col" colspan="3">Tingkat Pendidikan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 1;
        $query = "SELECT * FROM `monografi` WHERE id LIKE 'TP%'";
        $result = mysqli_query($con, $query);

        while ($row = $result->fetch_assoc()) {
        ?>
          <tr>
            <td class="text-center col-1"><?php echo $count ?></td>
            <td><?php echo $row['kependudukan'] ?></td>
            <td class="text-center col-2"><?php echo $row['jumlah'] ?></td>
          </tr>
        <?php
          $count++;
        }
        ?>
      </tbody>
    </table>
    <!-- tabel tenaga kerja -->
    <table class="table table-striped table-bordered mt-5">
      <thead>
        <tr class="text-start">
          <th scope="col" colspan="3">Kelompok Tenaga Kerja</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $count = 1;
        $query = "SELECT * FROM `monografi` WHERE id LIKE 'TK%'";
        $result = mysqli_query($con, $query);

        while ($row = $result->fetch_assoc()) {
        ?>
          <tr>
            <td class="text-center col-1"><?php echo $count ?></td>
            <td><?php echo $row['kependudukan'] ?></td>
            <td class="text-center col-2"><?php echo $row['jumlah'] ?></td>
          </tr>
        <?php
          $count++;
        }
        ?>
      </tbody>
    </table>
  </div>
  <!-- footer -->
 <div class="foot pt-3 pb-1">
    <div class="medsos d-flex justify-content-center p-2">
      <a href="https://youtube.com/channel/UCdo1WzNfqd3Dd5m0GEjKhlg" target="_blank">
        <div class="medsos-item mx-3 w-40 h-40">
          <img src="images/ytbhijau.jpg" alt="Youtube" onclick="youtube.com">
        </div>
      </a>
      <a href="https://instagram.com/padukuhan_jlumbang?igshid=YmMyMTA2M2Y=" target="_blank">
        <div class="medsos-item mx-3">
          <img src="images/ighijau.jpg" alt="Instagram">
        </div>
      </a>
      <a href="https://www.facebook.com/profile.php?id=100086977700720" target="_blank">
        <div class="medsos-item mx-3" id="fb">
          <img src="images/fbhijau.jpg" alt=" Facebook">
        </div>
      </a>
      <a href="https://mail.google.com/mail/?view=cm&fs=1&to=padukuhanjlumbang@gmail.com" target="_blank">
        <div class=" medsos-item mx-3">
          <img src="images/emailhijau.jpg" alt="Email">
        </div>
      </a>
    </div>
    <div class="copyright pt-3">
      <p>@ 2022 Pemerintah Padukuhan Jlumbang. All right reserved</p>
    </div>
  </div>
</body>

</html>