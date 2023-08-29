<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: adminLogin.php');
  exit();
}

if (isset($_GET['id_berita'])) {
    $selectedId = $_GET['id_berita'];

    // delete komentar
    $query_komen = "DELETE FROM `komentar` WHERE `komentar`.`id_berita` = $selectedId";
    $result_komen = mysqli_query($con, $query_komen);
    // delete berita
    $query = "DELETE FROM `berita` WHERE `berita`.`id_berita` = $selectedId";
    $result = mysqli_query($con, $query);
    if ($result) {
        echo "<script> 
            alert('Berita Berhasil Dihapus!');
            document.location.href = 'adminListBerita.php';
          </script>";
    }else{
        echo "<script> 
            alert('Berita Gagal Dihapus!');
            document.location.href = 'adminListBerita.php';
          </script>";
    }
}
