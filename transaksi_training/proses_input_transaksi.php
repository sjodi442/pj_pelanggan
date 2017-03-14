<?php error_reporting(0);
include "../koneksi.php";
if(isset($_POST['submit'])){
//get data
  $inv_num = $_POST['inv_num'];
  $productid = $_POST['productid'];
  $userid = $_POST['userid'];
  $due_date = $_POST['due_date'];
  $harga = $_POST['harga'];
  echo $due_date;echo "<br >";
  echo $harga;echo "<br >";
  echo $userid;echo "<br >";
  echo $productid;echo "<br >";
  echo $inv_num;
//input ke table transaction_log & transaction_log_compushop
$query = "INSERT into transaction_log values ('$inv_num','$userid','training','$harga',now(),'$due_date','','$harga','hutang')";
$query1 = "INSERT into transaction_log_training values (DEFAULT, '$inv_num','$userid','$productid','$harga',NOW())";
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
