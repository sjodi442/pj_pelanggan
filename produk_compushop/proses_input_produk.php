<?php error_reporting(0);
include "../koneksi.php";
if(isset($_POST['submit'])){
//get data
  $productid = $_POST['productid'];
  $qty = $_POST['qty'];
  $nama = $_POST['nama'];
  $harga = $_POST['harga'];
//input ke table pelanggan
  $query = "INSERT into produk_compushop values ('$productid','$nama','$qty','$harga')";
  if(mysqli_query($konek, $query)){
    echo "berhasil";
  }
  else{
    echo "gagal";
  }

}
else{
  header("Location: form_input_pelanggan.php");
}
?>
