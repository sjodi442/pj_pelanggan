<?php error_reporting(0);
include "../koneksi.php";
if(isset($_POST['submit_radio'])){
//get data
  $id_radio = $_POST['productid_radio'];
  $qty = $_POST['qty'];
  $jenis_radio = $_POST['jenis_radio'];
//input ke table pelanggan
  $query = "INSERT into produk_internet_radio values ('$id_radio','$jenis_radio','$qty')";
  if(mysqli_query($konek, $query)){
    echo "berhasil";
  }
  else{
    echo "gagal";
  }
}
if(isset($_POST['submit_antena'])){
//get data
  $id_antena = $_POST['productid_antena'];
  $qty1 = $_POST['qty'];
  $jenis_antena = $_POST['jenis_antena'];
//input ke table pelanggan
  $query1 = "INSERT into produk_internet_antena values ('$id_antena','$jenis_antena','$qty1')";
  if(mysqli_query($konek, $query1)){
    echo "berhasil";
  }
  else{
    echo "gagal";
  }
}
if(isset($_POST['submit_bts'])){
//get data
  $id_bts = $_POST['productid_bts'];
  $nama_bts = $_POST['nama_bts'];
//input ke table pelanggan
  $query2 = "INSERT into produk_internet_bts values ('$id_bts','$nama_bts')";
  if(mysqli_query($konek, $query2)){
    echo "berhasil";
  }
  else{
    echo "gagal";
  }
}
else{
  header("Location: form_input_produk_radio.php");
}
?>
