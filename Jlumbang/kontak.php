<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kontak Padukuhan Jlumbang</title>
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
          $(".navbar").css("background", "#379237");
        }

        else {
          $(".navbar").css("background", "");
        }
      })
    })
  </script>
  <!-- header -->
  <div class="head-kontak">
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
            <a class="nav-link" href="profil.php">Profil</a>
            <a class="nav-link" href="monografi.php">Monografi</a>
            <a class="nav-link active" aria-current="page" href="kontak.php">Kontak</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Welcome Page -->
    <div class="welcome-kontak container-sm">
      <h1>Hubungi Kami</h1>
      <h6>Padukuhan Jlumbang Kalurahan Giripurwo Kecamatan Purwosari Kabupaten Gunungkidul Provinsi Daerah
        Istimewa
        Yogyakarta</h6>
    </div>
    <!-- maps -->
    <div class="maps text-center p-5">
      <div class="maps-content">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13404.507173946247!2d110.37879728549281!3d-8.019134107603517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7babb6f86dce93%3A0x5b4b1834b9761807!2sJlumbang%2C%20Giripurwo%2C%20Purwosari%2C%20Gunung%20Kidul%20Regency%2C%20Special%20Region%20of%20Yogyakarta!5e0!3m2!1sen!2sid!4v1666931036908!5m2!1sen!2sid"
          width="100%" height="100%" s style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
  <!-- medsos -->
  <div class="contacts container-md mt-3 mb-5 p-2 text-center">
    <p><font size ="5"><strong>Klik Ikon Sosial Media di Bawah untuk Mengikuti Kami</strong></font></p>
    <br><br>
    <div class="row">
      <div class="col">
        <div class="contacts-item text-center justify-content-center">
          <div class="contacts-img">
            <a href="https://youtube.com/channel/UCdo1WzNfqd3Dd5m0GEjKhlg" target="_blank">
              <img class="img-fluid" src="images/yutub.jpg" alt="" style="height:50px;" >
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="contacts-item text-center justify-content-center">
          <div class="contacts-img">
            <a href="https://instagram.com/padukuhan_jlumbang?igshid=YmMyMTA2M2Y=" target="_blank">
              <img class="img-fluid" src="images/ig.jpg" alt="" style="height:50px;">
            </a>
          </div>
        </div>
      </div>
      
      <div class="col">
        <div class="contacts-item text-center justify-content-center">
          <div class="contacts-img">
            <a href="https://www.facebook.com/profile.php?id=100086977700720" target="_blank">
              <img class="img-fluid" src="images/fb.jpg" alt="" style="height:50px;">
            </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="contacts-item text-center justify-content-center">
          <div class="contacts-img">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=padukuhanjlumbang@gmail.com" target="_blank">
              <img class="img-fluid" src="images/gugelplus.jpg" alt="" style="height:50px;">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- footer -->
  <div class="foot pt-3 pb-1">
    <div class="copyright pt-3">
      <p>@ 2022 Pemerintah Padukuhan Jlumbang. All right reserved</p>
    </div>
  </div>
</body>

</html>