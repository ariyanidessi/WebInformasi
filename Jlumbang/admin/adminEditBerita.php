<?php
include 'config.php';

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: adminLogin.php');
    exit();
}

if ($_GET['id'] < 0) {
    header('Location: adminListBerita.php');
}

$id_berita = $_GET['id'];
$query = "SELECT * FROM berita WHERE id_berita = $id_berita";
$result = mysqli_query($con, $query);

$row = $result->fetch_assoc();

$judul_berita = $row['judul'];
$konten_berita = $row['konten'];

if (isset($_POST['edit'])) {
    $judul = $_POST['judulBerita'];
    $isiBerita = $_POST['isiBerita'];

    $tgl = date('Y-m-d');
    $file = $_FILES['myImage']['tmp_name'];
    
    if ($file == null) {
        $sql = "UPDATE `berita` SET `judul` = '$judul', `konten` = '$isiBerita' WHERE `berita`.`id_berita` = $id_berita";
    } else {
        $image = addslashes(file_get_contents($file));
        $sql = "UPDATE `berita` SET `judul` = '$judul', `gambar` = '$image', `konten` = '$isiBerita' WHERE `berita`.`id_berita` = $id_berita";
    }

    if (mysqli_query($con, $sql)) {
        echo "<script> 
            alert('Berita Berhasil Diupdate!');
            document.location.href = 'adminListBerita.php';
          </script>";
    } else {
        echo "<script> 
            alert('Berita Gagal Diupdate!');
            document.location.href = 'adminListBerita.php';
          </script>";
        echo "Error: " . $sql . ":-" . mysqli_error($con);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Padukuhan Jlumbang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
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
    <div class="container mt-5 p-2 pb-0">
        <!-- back button -->
        <a href="adminListBerita.php" class="back-btn row align-items-start my-2" style="text-decoration: none;">
            <div class="col">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
                <span class="align-middle mx-2">Kembali</span>
            </div>
        </a>
        <div class="container col-md-7 p-2">
            <h3>Edit Berita Dusun Jlumbang</h3>

            <div class="card" style="border: 1px solid">
                <div class="card-body">
                    <form action="adminEditBerita.php?id=<?php echo $id_berita ?>" method="POST" enctype="multipart/form-data">
                        <div class="mb-3 row">
                            <label for="judulBerita" class="col-sm-2 col-form-label">Judul Berita</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judulBerita" name="judulBerita" value="<?php echo $judul_berita ?>">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="isiBerita" class="col-sm-2 col-form-label">Isi Berita</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="isiBerita" name="isiBerita" rows="10"><?php echo $konten_berita ?></textarea>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="foto" class="col-sm-2 col-form-label">Pilih Foto</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" id="foto" name="myImage" value="" accept="image/*">
                            </div>
                        </div>
                        <div class="col">
                            <button type="submit" name="edit" class="btn mx-2" style="background-color: #DBCE7B; width: 100%; margin-top: 30px; color: #FEFDFC;">Unggah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>