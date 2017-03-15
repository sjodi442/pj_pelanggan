<?php error_reporting(0);
include "../koneksi.php";
if(isset($_POST['submit'])){
//get data
  $inv_num = $_POST['inv_num'];
  $productid = $_POST['productid'];
  $qty = $_POST['qty'];
  $userid = $_POST['userid'];
  $total_harga = $_POST['total_harga'];
  $due_date = $_POST['due_date'];
  $g_akhir = $_POST['garansi_akhir'];
  $harga_satuan = $_POST['harga_satuan'];
  echo $productid;echo "<br >";
  echo $inv_num;echo "<br >";
  echo $qty;echo "<br >";
  echo $userid;echo "<br >";
  echo $total_harga;echo "<br >";
  echo $due_date;echo "<br >";
  echo $harga_satuan;echo "<br >";
  echo $g_akhir;echo "<br >";
//input ke table transaction_log & transaction_log_compushop
//$query = "INSERT into transaction_log values ('$inv_num','$userid','compushop','$total_harga',now(),'$due_date','','$total_harga','hutang')";
$query1 = "INSERT into temp values (DEFAULT, '$inv_num','$userid','$productid','$harga_satuan','$qty','$total_harga',NOW(),NOW(),'$g_akhir','$due_date')";
//jalankan perintah insert transaction_log
  //if(mysqli_query($konek, $query)){
  //  echo "berhasil";
  //}
  if(mysqli_query($konek, $query1)){
    echo "behasil";
    header("Location: ../nav.php?page=view_temp");
  }
  else{
    echo "error";
  }
}
else{

}
?>
