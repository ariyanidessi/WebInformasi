<?php
include 'config.php';

if (isset($_POST['submit'])) {
  $judul = $_POST['judulBerita'];
  $isiBerita = $_POST['isiBerita'];

  $tgl = date('Y-m-d');
  $file = $_FILES['myImage']['tmp_name'];

    
  if ($judul == null || $isiBerita == null) {
    echo "<script> 
        alert('Berita Tidak Boleh Kosong!!!');
        document.location.href = 'adminBerita.php';
      </script>";
  }
  else if ($file == null) {
    echo "<script> 
        alert('Gambar Tidak Boleh Kosong!!!');
        document.location.href = 'adminBerita.php';
      </script>";
  }

  $image = addslashes(file_get_contents($file));
  $sql = "INSERT INTO berita (judul, gambar, konten, tanggal)
  VALUES ('$judul', '$image', '$isiBerita', '$tgl')";



  if (mysqli_query($con, $sql)) {
    echo "<script> 
        alert('Berita Berhasil Diunggah!');
        document.location.href = 'adminBerita.php';
      </script>";
  } else {
    echo "<script> 
        alert('Berita Gagal Diunggah!');
        document.location.href = 'adminBerita.php';
      </script>";
    echo "Error: " . $sql . ":-" . mysqli_error($con);
  }
}
