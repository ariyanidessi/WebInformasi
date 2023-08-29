<?php
include 'config.php';

$query_monog = "SELECT * FROM `monografi` WHERE id LIKE 'JK%'";
$result_monog = mysqli_query($con, $query_monog);

$query_berita = "SELECT * FROM `berita` ORDER BY `id_berita` DESC";
$result_berita = mysqli_query($con, $query_berita);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="mpgyB21Mc6C9Rv3aRUpJBfyJ0bYGnYT02JXAMT-sgBQ" />
  <title>Padukuhan Jlumbang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Arizonia&display=swap');
  </style>
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous">
  </script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
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
  <div class="head">
    <!-- Navbar -->
    <nav class="navbar navbar-default fixed-top navbar-expand-sm navbar-dark">
      <div class="container-md">
        <a class="navbar-brand" href="index.php">Padukuhan Jlumbang</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            <a class="nav-link" href="profil.php">Profil</a>
            <a class="nav-link" href="monografi.php">Monografi</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Welcome Page -->
    <div class="welcome container-md">
      <h6>Selamat Datang Di</h6>
      <h1>Padukuhan Jlumbang</h1>
    </div>
  </div>
  <!-- pak dukuh -->
  <div class="pak-dukuh p-5 pb-0 d-flex flex-wrap">
    <div class="image text-center p-2 pt-5 mt-2 mb-3">
      <img src="images/dukuhbaru.jpg" class="bg img-fluid" alt="">
     
    </div>
    <div class="container d-flex-column text-center mt-2">
      <div class="container align-content-center">
        <div class="sambutan mb-3">
          <span>"Website Padukuhan Jlumbang ditujukan sebagai bentuk layanan informasi digital bagi masyarakat luas terkait Padukuhan Jlumbang. Terutama sebagai dokumentasi kegiatan-kegiatan menarik dan khas Padukuhan Jlumbang, sehingga dapat dilihat oleh masyarakat Padukuhan Jlumbang sendiri maupun masyarakat luar Padukuhan Jlumbang."</span>
        </div>
        <div class="p-2">
          <span class="nama">~ Nova Harya Saputro ~</span><br>
          <span class="jabatan text-uppercase">Dukuh Jlumbang</span>
        </div>
      </div>
    </div>
  </div>
  <div class="rt-rw text-center mt-4 mb-4">
    <div class="content">
        <div class="container pt-2 pb-5">
            <div class="item mt-3 mb-2">
              <div class="img-rt-rw pt-5 mb-2">
                <img src="images/rt10baru.jpg" class="bg img-fluid" alt="">
              
            </div>
            <br>
            <span class="nama">~ Subardi ~</span><br>
            <span class="jabatan text-uppercase">Ketua RW 10</span>
        </div>
        </div>
      <div class="d-flex justify-content-center flex-wrap pb-2"><div class="item m-2 p-2">
          <div class="img-rt-rw mb-2">
              <img src="images/rt01baru.jpg" class="bg img-fluid" alt="">
            
          </div>
          <br>
          <span class="nama">~ Timbul ~</span><br>
          <span class="jabatan text-uppercase">Ketua RT 01</span>
        </div>
        <div class="item m-2 p-2">
          <div class="img-rt-rw mb-2">
              <img src="images/rt02baru.jpg" class="bg img-fluid" alt="">
          
          </div>
          <br>
          <span class="nama">~ Sugiyat ~</span><br>
          <span class="jabatan text-uppercase">Ketua RT 02</span>
        </div>
        <div class="item m-2 p-2">
          <div class="img-rt-rw mb-2">
              <img src="images/rt03baru.jpg" class="bg img-fluid" alt="">
            
          </div>
          <br>
          <span class="nama">~ Tumiyo ~</span><br>
          <span class="jabatan text-uppercase">Ketua RT 03</span>
        </div>
        <div class="item m-2 p-2">
          <div class="img-rt-rw mb-2">
              <img src="images/rt04baru.jpg" class="bg img-fluid" alt="">
          
          </div>
          <br>
          <span class="nama">~ Punidi ~</span><br>
          <span class="jabatan text-uppercase">Ketua RT 04</span>
        </div>
        <div class="item m-2 p-2">
          <div class="img-rt-rw mb-2">
              <img src="images/rt05baru.jpg" class="bg img-fluid" alt="">
           
          </div>
          <br>
          <span class="nama">~ Sujiyo ~</span><br>
          <span class="jabatan text-uppercase">Ketua RT 05</span>
        </div>
        <div class="item m-2 p-2">
          <div class="img-rt-rw mb-2">
              <img src="images/rt06baru.jpg" class="bg img-fluid" alt="">
           
          </div>
          <br>
          <span class="nama">~ Bejo ~</span><br>
          <span class="jabatan text-uppercase">Ketua RT 06</span>
        </div>
      </div>
    </div>
  </div>
  <!-- demografi -->
  <?php
  $monografi = [];
  $i = 0;
  if ($result_monog->num_rows > 0) {
    while ($row = $result_monog->fetch_assoc()) {
      $monografi[$i] = $row['jumlah'];
      $i++;
    }
  }
  ?>
  <div class="demografi container-fluid p-5 text-center">
    <div class="title mt-1 mb-5">Demografi</div>
    <br><br>
    <div class="demografi-content">
      <div class="row align-items-top">
        <div class="col mb-5">
          <div class="text-center justify-content-center">
            <div class="demog-img">
              <img class="img-fluid filter-white" src="images/icons/group-outline.svg" alt="">
            </div>
            <span class="subdesc"><?php echo $monografi[3] ?></span>
            <br>
            <span class="desc">Penduduk</span>
          </div>
        </div>
        <div class="col mb-5">
          <div class="text-center justify-content-center">
            <div class="demog-img">
              <img class="img-fluid filter-white" src="images/icons/family-outline.svg" alt="">
            </div>
            <span class="subdesc"><?php echo $monografi[2] ?></span>
            <br>
            <span class="desc">Kartu Keluarga</span>
          </div>
        </div>
        <div class="col mb-5">
          <div class="text-center justify-content-center">
            <div class="demog-img">
              <img class="img-fluid filter-white" src="images/icons/male-outline.svg" alt="">
            </div>
            <span class="subdesc"><?php echo $monografi[0] ?></span>
            <br>
            <span class="desc">Laki-laki</span>
          </div>
        </div>
        <div class="col mb-5">
          <div class="text-center justify-content-center">
            <div class="demog-img">
              <img class="img-fluid filter-white" src="images/icons/female-outline.svg" alt="">
            </div>
            <span class="subdesc"><?php echo $monografi[1] ?></span>
            <br>
            <span class="desc">Perempuan</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- berita section-->
  <div class="berita container-fluid">
    <h5 id="title">Berita Jlumbang</h5>
    <?php
    if ($result_berita->num_rows > 0) {
    ?>
      <div class="grid-container">
        <?php
        $i = 0;
        while ($row = $result_berita->fetch_assoc()) {
          if ($i < 6) {
        ?>
            <!-- berita card -->
            <div class="grid-item">
              <div class="news-card pb-1">
                <?php
                $img = base64_encode($row['gambar']);
                echo '<img  src="data:image/*;base64,' . $img . '" class="card-img-top" alt="..." />';
                ?>
                <div class="card-body d-flex flex-column justify-content-between">
                  <span class="card-title">
                    <?php echo $row['judul'] ?>
                  </span>
                  <div class="card-text text-turncate">
                    <?php echo $row['konten'] ?>
                  </div>
                  <a href="detailBerita.php?id=<?php echo $row['id_berita'] ?>">
                    <button type="button">Selengkapnya</button>
                  </a>
                </div>
              </div>
            </div>
        <?php
            $i++;
          }
        }
        ?>
      </div>
      <!-- button selengkapnya -->
      <div class="button-container container-fluid">
        <a href="berita.php">
          <button type="button">Berita Lainnya</button>
        </a>
      </div>
    <?php
    } else {

    ?>
      <div class="no-berita container-md p-5">
        <h2 class="text-center">Tidak Ada Berita</h2>
      </div>
    <?php
    }
    ?>
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
      <p>@ 2023 Pemerintah Padukuhan Jlumbang. All right reserved</p>
    </div>
  </div>
</body>

</html>