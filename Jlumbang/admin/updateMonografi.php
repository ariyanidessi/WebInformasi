<?php
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
  header('Location: adminLogin.php');
  exit();
}


$agama = array($_POST['islam'], $_POST['kristen'], $_POST['katholik'], $_POST['hindu'], $_POST['budha']);
$penduduk = array($_POST['jumlahPria'], $_POST['jumlahWanita'], $_POST['jumlahKeluarga'], $_POST['jumlahPenduduk']);
$wajar = array($_POST['wajar1'], $_POST['wajar2'], $_POST['wajar3'], $_POST['wajar4'], $_POST['wajar5']);
$pendidikan = array($_POST['tk'], $_POST['sd'], $_POST['tidakTamatSD'], $_POST['smp'], $_POST['slta'], $_POST['perguruanTinggi'], $_POST['paketA'], $_POST['paketB'], $_POST['butaHuruf']);
$KTK = array($_POST['KTK1'], $_POST['KTK2'], $_POST['KTK3'], $_POST['KTK4'],);
$query = array();
// update monografi jenis kelamin
$query[] = "UPDATE `monografi` SET `jumlah` = '$agama[0]' WHERE `monografi`.`id` = 'AG001'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$agama[1]' WHERE `monografi`.`id` = 'AG002'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$agama[2]' WHERE `monografi`.`id` = 'AG003'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$agama[3]' WHERE `monografi`.`id` = 'AG004'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$agama[4]' WHERE `monografi`.`id` = 'AG005'";

$query[] = "UPDATE `monografi` SET `jumlah` = '$penduduk[0]' WHERE `monografi`.`id` = 'JK001'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$penduduk[1]' WHERE `monografi`.`id` = 'JK002'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$penduduk[2]' WHERE `monografi`.`id` = 'JK003'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$penduduk[3]' WHERE `monografi`.`id` = 'JK004'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$KTK[0]' WHERE `monografi`.`id` = 'TK001'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$KTK[1]' WHERE `monografi`.`id` = 'TK002'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$KTK[2]' WHERE `monografi`.`id` = 'TK003'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$KTK[3]' WHERE `monografi`.`id` = 'TK004'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$pendidikan[0]' WHERE `monografi`.`id` = 'TP001'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$pendidikan[1]' WHERE `monografi`.`id` = 'TP002'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$pendidikan[2]' WHERE `monografi`.`id` = 'TP003'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$pendidikan[3]' WHERE `monografi`.`id` = 'TP004'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$pendidikan[4]' WHERE `monografi`.`id` = 'TP005'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$pendidikan[5]' WHERE `monografi`.`id` = 'TP006'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$pendidikan[6]' WHERE `monografi`.`id` = 'TP007'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$pendidikan[7]' WHERE `monografi`.`id` = 'TP008'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$pendidikan[8]' WHERE `monografi`.`id` = 'TP009'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$wajar[0]' WHERE `monografi`.`id` = 'WT001'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$wajar[1]' WHERE `monografi`.`id` = 'WT002'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$wajar[2]' WHERE `monografi`.`id` = 'WT003'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$wajar[3]' WHERE `monografi`.`id` = 'WT004'";
$query[] = "UPDATE `monografi` SET `jumlah` = '$wajar[4]' WHERE `monografi`.`id` = 'WT005'";

for ($i = 0; $i < 27; $i++) {
  $result = mysqli_query($con, $query[$i]);
}




//$result = mysqli_query($con, $query1);
//$result = mysqli_query($con, $query2);
//$result = mysqli_query($con, $query2);
if ($result) {
  echo "<script> 
        alert('Data Berhasil Diupdate!');
        document.location.href = 'adminMonografi.php';
      </script>";
} else {
  echo "<script> 
        alert('Data Gagal Diupdate!');
        document.location.href = 'adminMonografi.php';
      </script>";
}
