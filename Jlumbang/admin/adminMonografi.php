<?php
include 'config.php';

session_start();
if (!isset($_SESSION['username'])) {
  header('Location: adminLogin.php');
  exit();
}

if (isset($_POST['submit'])) {
  echo $_POST['islam'];
  $hindu = $_POST['hindu'];
  $agama = array($_POST['islam'], $_POST['kristen'], $_POST['katholik'], $_POST['hindu'], $_POST['budha']);
  // update monografi jenis kelamin
  // $query = "UPDATE `monografi` SET `jumlah` = '$agama[0]' WHERE `monografi`.`id` = 'AG001'; UPDATE `monografi` SET `jumlah` = '$agama[1]' WHERE `monografi`.`id` = 'AG002'; UPDATE `monografi` SET `jumlah` = '$agama[2]' WHERE `monografi`.`id` = 'AG003'; UPDATE `monografi` SET `jumlah` = '$agama[3]' WHERE `monografi`.`id` = 'AG004'; UPDATE `monografi` SET `jumlah` = '$agama[4]' WHERE `monografi`.`id` = 'AG005';";
  $query = "UPDATE `monografi` SET `jumlah` = $hindu WHERE `monografi`.`id` = 'AG004'";

  if (mysqli_query($con, $query)) {
    echo "<script> alert('Data Berhasil Diupdate!');</script>";
  } else {
    echo "<script>alert('Data Gagal Diupdate!');</script>";
    echo "Error: " . $sql . ":-" . mysqli_error($con);
  }
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
  <nav class="navbar sticky-top navbar-dark" style="background-color: #379237 ;">
    <div class="container ">
      <div class="container navbar-brand">
        <h2 style="font-size: 20px;">Padukuhan Jlumbang</h2>
      </div>
    </div>
  </nav>

  <div class="sidebar2">
    <div class="list-group" style="margin-top: 60px;">
      <a href="adminHome.php" type="button" class="list-group-item list-group-item-action" style="margin-top: 5px; background-color: #54B435 ;">
        HOME
      </a>
      <button type="button" class="list-group-item list-group-item-action active" style="margin-top: 7px; background-color: #54B435 ;"><b>Monografi</b></button>
      <a href="adminBerita.php" type="button" class="list-group-item list-group-item-action" style="margin-top: 7px; background-color: #54B435 ;">Berita</a>
      <a href="adminLogin.php" type="button" class="list-group-item list-group-item-action" style="margin-top: 7px; background-color: #54B435 ;">Logout</a>
    </div>
  </div>
    
  <div class="container col-md-5 p-5" align="center">
    <h3>Monografi Penduduk</h3>

    <div class="card" style="border: 1px solid" align="center">
      <div class="card-body">
        <form action="updateMonografi.php" method="POST">
          <!-- Jenis Kelamin -->
          <div class="monografi-item">
            <div class="row">
              <h6><b>Menurut Jenis Kelamin</b></h6>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'JK001'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="lakilaki" class="col-sm-2 col-form-label">Laki-laki</label>
              <div class="col-sm-10">
                <input name="jumlahPria" type="number" class="form-control" id="lakilaki" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>

            <div class="mb-2 row" align="center">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'JK002'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="perempuan" class="col-sm-2 col-form-label">Perempuan</label>
              <div class="col-sm-10">
                <input name="jumlahWanita" type="number" class="form-control" id="perempuan" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>

            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'JK003'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="keluarga" class="col-sm-2 col-form-label">Keluarga</label>
              <div class="col-sm-10">
                <input name="jumlahKeluarga" type="number" class="form-control" id="keluarga" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>

            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'JK004'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="penduduk" class="col-sm-2 col-form-label">Penduduk</label>
              <div class="col-sm-10">
                <input name="jumlahPenduduk" type="number" class="form-control" id="penduduk" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
          </div>

          <!-- Agama -->
          <div class="monografi-item">
            <div class="row">
              <h6><b>Menurut Agama</b></h6>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'AG001'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="islam" class="col-sm-2 col-form-label">Islam</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="islam" name="islam" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'AG002'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="kristen" class="col-sm-2 col-form-label">Kristen</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="kristen" name="kristen" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'AG003'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="katholik" class="col-sm-2 col-form-label">Katholik</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="katholik" name="katholik" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'AG004'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="hindu" class="col-sm-2 col-form-label">Hindu</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="hindu" name="hindu" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'AG005'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="budha" class="col-sm-2 col-form-label">Budha</label>
              <div class="col-sm-10">
                <input type="number" class="form-control" id="budha" name="budha" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
          </div>

          <!-- Wajar 9 Tahun -->
          <div class="monografi-item">
            <div class="row">
              <h6><b>Wajar 9 Tahun</b></h6>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'WT001'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="usia1" class="col-sm-2 col-form-label">Usia 0 - 5 Tahun</label>
              <div class="col-sm-10">
                <input name ="wajar1" type="number" class="form-control" id="usia1" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'WT002'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="usia2" class="col-sm-2 col-form-label">Usia 5 - 7 Tahun</label>
              <div class="col-sm-10">
                <input name ="wajar2" type="number" class="form-control" id="usia2" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'WT003'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="usia3" class="col-sm-2 col-form-label">Usia 7 - 12 Tahun</label>
              <div class="col-sm-10">
                <input name ="wajar3" type="number" class="form-control" id="usia3" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'WT004'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="usia4" class="col-sm-2 col-form-label">Usia 12 - 15 Tahun</label>
              <div class="col-sm-10">
                <input name ="wajar4" type="number" class="form-control" id="usia4" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'WT005'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="usia5" class="col-sm-2 col-form-label">Usia 15 - 45 Tahun</label>
              <div class="col-sm-10">
                <input name ="wajar5" type="number" class="form-control" id="usia5" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
          </div>

          <!-- Tingkat Pendidikan -->
          <div class="monografi-item">
            <div class="mb-3 row">
              <h6><b>Tingkat Pendidikan</b></h6>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TP001'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="pendidikan1" class="col-sm-2 col-form-label">TK</label>
              <div class="col-sm-10">
                <input name="tk" type="number" class="form-control" id="pendidikan1" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TP002'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="pendidikan2" class="col-sm-2 col-form-label">SD</label>
              <div class="col-sm-10">
                <input name="sd" type="number" class="form-control" id="pendidikan2" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TP003'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="pendidikan3" class="col-sm-2 col-form-label">Tidak tamat SD</label>
              <div class="col-sm-10">
                <input name="tidakTamatSD" type="number" class="form-control" id="pendidikan3" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TP004'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="pendidikan4" class="col-sm-2 col-form-label">SMP</label>
              <div class="col-sm-10">
                <input name="smp" type="number" class="form-control" id="pendidikan4" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TP005'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="pendidikan5" class="col-sm-2 col-form-label">SLTA / SMA</label>
              <div class="col-sm-10">
                <input name="slta" type="number" class="form-control" id="pendidikan5" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TP006'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="pendidikan6" class="col-sm-2 col-form-label">Perguruan Tinggi</label>
              <div class="col-sm-10">
                <input name="perguruanTinggi" type="number" class="form-control" id="pendidikan6" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TP007'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="pendidikan7" class="col-sm-2 col-form-label">Kejar Paket A</label>
              <div class="col-sm-10">
                <input name="paketA" type="number" class="form-control" id="pendidikan7" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TP008'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="pendidikan8" class="col-sm-2 col-form-label">Kejar Paket B</label>
              <div class="col-sm-10">
                <input name="paketB" type="number" class="form-control" id="pendidikan8" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TP009'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="pendidikan9" class="col-sm-2 col-form-label">Buta Huruf</label>
              <div class="col-sm-10">
                <input name="butaHuruf" type="number" class="form-control" id="pendidikan9" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
          </div>

          <!-- Kelompok Tenaga Kerja -->
          <div class="monografi-item">
            <div class="mb-2 row">
              <h6><b>Kelompok Tenaga Kerja</b></h6>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TK001'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="kerja1" class="col-sm-2 col-form-label">Usia 15 - 58 Tahun (bekerja)</label>
              <div class="col-sm-10">
                <input name="KTK1" type="number" class="form-control" id="kerja" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TK002'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="kerja2" class="col-sm-2 col-form-label">Usia 15 - 58 Tahun (tidak bekerja)</label>
              <div class="col-sm-10">
                <input name="KTK2" type="number" class="form-control" id="kerja2" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TK003'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="kerja3" class="col-sm-2 col-form-label">Wanita Usia 15 - 56 Tahun</label>
              <div class="col-sm-10">
                <input name="KTK3" type="number" class="form-control" id="kerja3" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
            <div class="mb-2 row">
              <?php
              $query = "SELECT * FROM `monografi` WHERE id = 'TK004'";
              $result = mysqli_query($con, $query);
              $row = $result->fetch_assoc();
              ?>
              <label for="kerja4" class="col-sm-2 col-form-label">Cacat Usia 15 Tahun ke atas</label>
              <div class="col-sm-10">
                <input name="KTK4" type="number" class="form-control" id="kerja4" value="<?php echo $row['jumlah'] ?>">
              </div>
            </div>
          </div>

          <div class="col mx-3">
            <button type="submit" class="btn" style="background-color: #DBCE7B; width: 100%; margin-top: 30px; color: #FEFDFC;">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>