<?php error_reporting(0);
include "../koneksi.php";
if(isset($_POST['submit'])){
//get data
  $userid = $_POST['userid'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telp = $_POST['telp'];
  $wa = $_POST['wa'];
  $email = $_POST['email'];
  $web = $_POST['web'];
  $user_since = $_POST['user_since'];
  $cat_comp = $_POST['cat_comp'];
  $cat_inet = $_POST['cat_inet'];
  $cat_soft = $_POST['cat_soft'];
  $cat_training = $_POST['cat_training'];

//input ke table pelanggan
  $query = "INSERT into pelanggan values ('$userid','$nama','$alamat','$telp','$email','$web','$wa','$user_since')";
//buat table transaction_log
  if(mysqli_query($konek, $query)){
    echo "berhasil";
  }
  else{
    echo "gagal";
  }

//chechked category
   if($cat_comp == true){
    $sqlcomp = "insert into pelanggan_compushop values (DEFAULT, '$userid')";
    if (mysqli_query($konek, $sqlcomp)){
      echo "berhasil";
    }
    else{
      echo "gagal";
    }
  }
  if($cat_inet == true){
    $sqlinet = "insert into pelanggan_internet values (DEFAULT, '$userid')";
    if (mysqli_query($konek, $sqlinet)){
      echo "berhasil";
    }
    else{
      echo "gagal";
    }
  }
  if($cat_soft == true){
    $sqlebsoft = "insert into pelanggan_websoft values (DEFAULT, '$userid')";
    if (mysqli_query($konek, $sqlebsoft)){
      echo "berhasil";
    }
    else{
      echo "gagal";
    };
  }
  if($cat_training == true){
    $sqltraining = "insert into pelanggan_training values (DEFAULT, '$userid')";
    if (mysqli_query($konek, $sqltraining)){
      echo "berhasil";
    }
    else{
      echo "gagal";
    }
  }
  else{
    echo "not";
  }
}
else{
  header("Location: form_input_pelanggan.php");
}
?>
