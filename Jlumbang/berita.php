<?php
include 'config.php';

$query = "SELECT * FROM berita";
$result = mysqli_query($con, $query);
$number_of_result = mysqli_num_rows($result);
$results_per_page = 6;

//determine the total number of pages available  
$number_of_page = ceil($number_of_result / $results_per_page);

//determine which page number visitor is currently on  
if (!isset($_GET['page'])) {
    $currentPage = 1;
} else {
    $currentPage = $_GET['page'];
}

//determine the sql LIMIT starting number for the results on the displaying page  
$page_first_result = ($currentPage - 1) * $results_per_page;

//retrieve the selected results from database   
$query = "SELECT * FROM `berita` ORDER BY `id_berita` DESC LIMIT " . $page_first_result . ',' . $results_per_page;
$result = mysqli_query($con, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Padukuhan Jlumbang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
    <div class="head-berita">
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
                        <a class="nav-link" href="monografi.php">Monografi</a>
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Welcome Page -->
        <h1 class="title-berita">Berita</h1>
        <h6>Padukuhan Jlumbang</h1>
    </div>
    <!-- berita -->
    <div class="container-md my-5 list-berita">
        <div class="grid-container">
            <?php
            if ($result->num_rows > 0) {
                //display the retrieved result on the webpage  
                while ($row = $result->fetch_assoc()) {
            ?>
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
                }
            }
            ?>
        </div>
        <!-- page indicator -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <?php
                if ($currentPage == 1) {
                    echo '<li class="page-item disabled">';
                } else {
                    echo '<li class="page-item">';
                }
                echo '<a class="page-link" href="berita.php?page=' . ($currentPage - 1) . '" tabindex="-1" aria-disabled="true">Sebelumnya</a></li>';

                for ($page = 1; $page <= $number_of_page; $page++) {
                    echo '<li class="page-item"><a class="page-link" href="berita.php?page=' . $page . '">' . $page . '</a></li>';
                }

                // next page button
                if ($currentPage == $number_of_page) {
                    echo '<li class="page-item disabled">';
                } else {
                    echo '<li class="page-item">';
                }
                echo '<a class="page-link" href="berita.php?page=' . ($currentPage + 1) . '" tabindex="-1" aria-disabled="true">Berikutnya</a></li>';
                ?>
            </ul>
        </nav>
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