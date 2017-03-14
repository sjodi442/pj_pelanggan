<?php
include "koneksi.php";
$app = "app";
$add = "training";

$sql = "create table `$app $add` (id int(12), chara char(5), primary key(id))";
if(mysqli_query($konek, $sql)){
  echo "berhasil";
}
else{
  echo "gagal";
}
 ?>
