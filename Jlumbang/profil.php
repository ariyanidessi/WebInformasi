<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profil Padukuhan Jlumbang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 300) {
          $(".navbar").css("background", "#379237 ");
        }

        else {
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ">
            <a class="nav-link" href="index.php">Beranda</a>
            <a class="nav-link active" aria-current="page" href="profil.php">Profil</a>
            <a class="nav-link" href="monografi.php">Monografi</a>
            <a class="nav-link" href="kontak.php">Kontak</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Welcome Page -->
    <div class="welcome container-sm">
      <h1>Profil</h1>
      <h6>Padukuhan Jlumbang</h6>
    </div>
  </div>
  <!-- sekilas dan sejarah -->
  <div class="sekilas">
    <div class="container-md py-5">
      <div class="row align-top mb-5">
        <div class="col text-end mb-3">
           <div class="img" align="center">
          <img src="images/sudutkilassejarah.png"  style="height:200px;">
        </div>
        </div>
        <div class="title" align="center">
        Kilas Sejarah
        </div>
        <p align="center"> Padukuhan Jlumbang, yang terletak di Desa Giripurwo, Kecamatan Purwosari, Kabupaten Gunung Kidul, merupakan suatu sentra kehidupan masyarakat yang kaya akan nilai budaya dan tradisi. Dikelilingi oleh keindahan alam yang subur, padukuhan ini memancarkan suasana yang tenang dan harmonis.  Nama "Jlumbang" berasal dari bentuk wilayahnya yang melengkung seperti kolam, yang dalam bahasa Jawa disebut "blumbang". Sehingga diberikanlah nama "Jlumbang" sesuai dengan asal "kata" tersebut.</p>
     
        </div>
      </div>
    </div>
  </div>
  <!-- visi dan misi -->
  <div class="visi-misi text-center">
    <h5 class="title"><font color="white">Visi dan Misi</font></p>
    <div class="content px-3">
        <h6 align="center"><font color="white">Visi</font></h6>
        <p align="center"><font color="white">Terwujudnya Masyarakat yang Damai,Makmur,dan Menjunjung Tinggi Nilai-nilai Budaya dan agama.</font></p>
        <br>
        <h6 align="center"><font color="white">Misi</font></h6>
      
        <p align="center"><font color="white">Terwujudnya kondisi wilayah yang kondusif.<br/>Meningkatnya kesejahteraan masyarakat.<br/>Meningkatkan nilai SDM dan SDA yg ada.<br/>Meningkatkan nilai-nilai bermasyarakat seperti gotong royong,bermusyawarah,dll.</font></p>

    </div>
  </div>
  <!-- video -->
  <div class="video-profil text-center p-5">
    <p class="title">Video Profil Padukuhan Jlumbang</p>
    <iframe src="https://www.youtube.com/embed/AQCpOQVeDOY" width="100%" height="100%" s style="border:0;"
      allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
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