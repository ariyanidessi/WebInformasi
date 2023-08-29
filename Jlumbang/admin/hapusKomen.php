<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: adminLogin.php');
  exit();
}


if (isset($_GET['id'])) {
    $selectedId = $_GET['id'];
    // get id berita
    $query = "SELECT * FROM komentar WHERE id = $selectedId";
    $result = mysqli_query($con, $query);
    $row = $result->fetch_assoc();
    $id_berita = $row['id_berita'];
    echo $id_berita;

    // delete komentar
    $query_komen = "DELETE FROM komentar WHERE `komentar`.`id` = $selectedId";
    $result_komen = mysqli_query($con, $query_komen);
    
    if ($result_komen) {
        echo "<script> 
            alert('Komentar Berhasil Dihapus!');
            document.location.href = 'adminDetailBerita.php?id=$id_berita';
          </script>";
    }else{
        echo "<script> 
            alert('Komentar Gagal Dihapus!');
            document.location.href = 'adminDetailBerita.php?id=$id_berita';
          </script>";
    }
}
