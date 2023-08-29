<?php
include 'config.php';
$id = $_GET['id'];
$query = "SELECT * FROM berita WHERE id_berita = $id";
$result = mysqli_query($con, $query);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
}
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

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $namaKomen = $_POST["name"];
        $isiKomen = $_POST["comment"];
        if ($namaKomen != "" || $isiKomen != "") {
            $query = "INSERT INTO `komentar` (`id`, `nama`, `isi`, `id_berita`) VALUES (NULL, '$namaKomen', '$isiKomen', '$id')";
            $result = mysqli_query($con, $query);
        }
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- Navbar -->
    <div class="container-md">
        <nav class="artikel-nav navbar navbar-default fixed-top navbar-expand-sm navbar-dark">
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
    </div>
    <div class="container-md">
        <!-- berita -->
        <div class="detail-artikel">
            <!-- back button -->
            <div class="back-btn row align-items-start" onclick="history.back()">
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    <span class="align-middle mx-2">Kembali</span>
                </div>
            </div>
            <!-- bread crumb -->
            <div class="container mt-3 mx-0">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.php">Beranda</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="berita.php">Berita</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <?php echo $row['judul'] ?>
                        </li>
                    </ol>
                </nav>
            </div>
            <!-- title -->
            <div class="title">
                <span class="date"><?php echo $row['tanggal'] ?>, oleh Admin Padukuhan</span>
                <h1><?php echo $row['judul'] ?></h1>
            </div>
            <!-- picture -->
            <?php
            $img = base64_encode($row['gambar']);
            echo '<img src="data:image/*;base64,' . $img . '" class = "border"/>';
            ?>
            <!-- article content -->
            <div class="content my-5">
                <p>
                    <?php echo $row['konten'] ?><br>
                </p>
            </div>
        </div>
        <!-- comment section -->
        <div class="comment-section container my-5">
            <div class="row">
                <div class="col border p-3">
                    <h5>Tambahkan Komentar</h5>
                    <hr>
                    <form action="detailBerita.php?id=<?php echo $row['id_berita'] ?>" method="post">
                        <label class="form-label">Nama:</label><br>
                        <input type="text" class="form-control" name="name" maxlength="40" />
                        <br>
                        <label for="comment" class="form-label">Komentar:</label><br>
                        <textarea name="comment" id="comment" class="form-control" rows="8" maxlength="1000"></textarea>
                        <br><br>
                        <button type="submit" data-rel="back">Submit</button>
                    </form>
                </div>
                <div class="col border p-3">
                    <h5>Komentar Terbaru</h5>
                    <hr>
                    <div class="comment-list">
                        <?php
                        $query = "SELECT * FROM komentar where id_berita = $id";
                        $result = mysqli_query($con, $query);
                        if ($result->num_rows > 0) {
                            while ($row_komen = $result->fetch_assoc()) {
                        ?>
                                <div class="comment-item m-3 border-bottom">
                                    <h6 class="comment-name"><?php echo $row_komen['nama'] ?></h6>
                                    <p><?php echo $row_komen['isi'] ?></p>
                                </div>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="foot pt-3 pb-1">
        <div class="medsos d-flex justify-content-center p-2">
            <a href="https://youtube.com/channel/UCdo1WzNfqd3Dd5m0GEjKhlg" target="_blank">
                <div class="medsos-item mx-3 w-40 h-40">
                    <img src="images/icons/youtube-fill.svg" alt="Youtube" onclick="youtube.com">
                </div>
            </a>
            <a href="https://instagram.com/padukuhan_jlumbang?igshid=YmMyMTA2M2Y=" target="_blank">
                <div class="medsos-item mx-3">
                    <img src="images/icons/instagram-fill.svg" alt="Instagram">
                </div>
            </a>
            <a href="https://www.facebook.com/profile.php?id=100086977700720" target="_blank">
                <div class="medsos-item mx-3" id="fb">
                    <img src="images/icons/facebook-rect.svg" alt=" Facebook">
                </div>
            </a>
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=padukuhanjlumbang@gmail.com" target="_blank">
                <div class=" medsos-item mx-3">
                    <img src="images/icons/mail.svg" alt="Email">
                </div>
            </a>
        </div>
        <div class="copyright pt-3">
            <p>@ 2023 Pemerintah Padukuhan Jlumbang. All right reserved</p>
        </div>
    </div>
</body>

</html>