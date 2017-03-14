<?php
include "../koneksi.php";
if (isset($_POST['submit_fo'])){
  $userid = $_POST['userid'];
  $media_akses = $_POST['media_akses'];
  $bandwith = $_POST['bandwith'];
  $sql = "INSERT into dt_internet_fo values (DEFAULT, '$userid', '$media_akses', '$bandwith')";
  if (mysqli_query($konek, $sql)){
    echo "berhasil";
  }
  else{
    echo "gagal";
  }
}
if (isset($_POST['submit_wireless'])){
  $userid = $_POST['userid'];
  $media_akses = $_POST['media_akses'];
  $bandwith = $_POST['bandwith'];
  $bts = $_POST['bts'];
  $antena = $_POST['antena'];
  $radio = $_POST['radio'];
  $frequensi = $_POST['frequensi'];
  $sql = "INSERT into dt_internet_wireless values (DEFAULT, '$userid', '$media_akses', '$antena', '$radio','$bts','$bandwith','$frequensi')";
  if (mysqli_query($konek, $sql)){
    echo "berhasil";
  }
  else{
    echo "gagal";
  }
}
?>
