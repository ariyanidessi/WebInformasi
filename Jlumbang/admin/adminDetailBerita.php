<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: adminLogin.php');
    exit();
}

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- Navbar -->
    <div class="container-md">
        <nav class="artikel-nav navbar navbar-default fixed-top navbar-expand-sm navbar-dark ">
            <div class="container-md">
                <a class="navbar-brand" href="adminHome.php">Padukuhan Jlumbang</a>
            </div>
        </nav>
    </div>
    <!-- berita -->
    <div class="container-md">
        <div class="detail-artikel">
            <!-- back button -->
            <a href="adminListBerita.php" class="back-btn row align-items-start my-2" style="text-decoration: none;">
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                    </svg>
                    <span class="align-middle mx-2">Kembali</span>
                </div>
            </a>
            <!-- title -->
            <div class="title">
                <span class="date">
                    <?php echo $row['tanggal'] ?>, oleh Admin Padukuhan Jlumbang
                </span>
                <h1>
                    <?php echo $row['judul'] ?>
                </h1>
            </div>
            <!-- picture -->
            <?php
            $img = base64_encode($row['gambar']);
            echo '<img src="data:image/*;base64,' . $img . '" alt="..." />';
            ?>
            <!-- article content -->
            <div class="content my-5 ">
                <p>
                    <?php echo $row['konten'] ?><br>
                </p>
            </div>
        </div>
        <!-- comment section -->
        <div class="comment-section container my-5">
            <div class="border p-3">
                <h5>Komentar Terbaru</h5>
                <br>
                <div class="comment-list">
                    <?php
                    $query = "SELECT * FROM komentar where id_berita = $id";
                    $result = mysqli_query($con, $query);
                    if ($result->num_rows > 0) {
                        while ($row_komen = $result->fetch_assoc()) {
                    ?>
                            <div class="comment-item d-flex justify-content-between m-3 border-bottom">
                                <div class="content ">
                                    <h6 class="comment-name">
                                        <?php echo $row_komen['nama']; ?>
                                    </h6>
                                    <p>
                                        <?php echo $row_komen['isi']; ?>
                                    </p>
                                </div>
                                <div class="navigation">
                                    <a href="hapusKomen.php?id=<?php echo $row_komen['id'] ?>" class="nav-btn d-flex align-items-center px-3" style="text-decoration: none;">
                                        <img src="../images/icons/delete.svg" alt="">
                                        <span class="px-2 algin-middle" style="color: red;">Hapus</span>
                                    </a>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>