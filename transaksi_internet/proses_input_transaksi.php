<?php error_reporting(0);
include "../koneksi.php";
if(isset($_POST['submit'])){
//get data
  $inv_num = $_POST['inv_num'];
  $userid = $_POST['userid'];
  $total_harga = $_POST['total_harga'];
  $due_date = $_POST['due_date'];
  $bandwith = $_POST['bandwith'];
  $freq = $_POST['frequensi'];
  $media_akses = $_POST['media_akses'];
  $jenis_radio = $_POST['jenis_radio'];
  $polarisasi = $_POST['polarisasi'];
  $jenis_antena  = $_POST['jenis_antena'];
  $bts = $_POST['bts'];
  echo $inv_num;echo "<br >";
  echo $userid;echo "<br >";
  echo $total_harga;echo "<br >";
  echo $due_date;echo "<br >";
  echo $bandwith;echo "<br >";
  echo $media_akses;echo "<br >";
//input ke table transaction_log
$query = "INSERT into transaction_log values ('$inv_num','$userid','internet','$total_harga',now(),'$due_date','','$total_harga','hutang')";
$query1 = "INSERT into transaction_log_internet values (DEFAULT, '$inv_num','$userid','$media_akses','$bandwith','$total_harga',NOW())";
//jalankan perintah insert transaction_log
  if(mysqli_query($konek, $query)){
    echo "berhasil";
  }
  if(mysqli_query($konek, $query1)){
    echo "behasil";
  }
  else{
    echo "gagal";
  }
}
else{

}
?>
