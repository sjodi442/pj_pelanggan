<?php
include "koneksi.php";
$userid = $_GET['userid'];
$sql2 = mysqli_query($konek, "SELECT * from pelanggan where userid='$userid'");
$dd = mysqli_fetch_array($sql2);
// compushop
$query = "SELECT transaction_log_compushop.productid, transaction_log_compushop.garansi_akhir, transaction_log_compushop.garansi_mulai, produk_compushop.nama_produk from transaction_log_compushop inner join produk_compushop on transaction_log_compushop.productid=produk_compushop.productid where transaction_log_compushop.userid='$userid'";
$sql = mysqli_query($konek, $query);
//training
$query1 = "SELECT transaction_log_training.productid_training, produk_training.nama_training from transaction_log_training inner join produk_training on transaction_log_training.productid_training=produk_training.productid_training where transaction_log_training.userid='$userid'";
$sql1 = mysqli_query($konek, $query1);
//internet wireless
$query2 = "SELECT dt_internet_wireless.media_akses, dt_internet_wireless.bandwith, dt_internet_wireless.bandwith, dt_internet_wireless.frequensi, produk_internet_antena.nama_antena, produk_internet_radio.nama_radio, produk_internet_bts.nama_bts from dt_internet_wireless INNER JOIN produk_internet_antena on dt_internet_wireless.productid_antena=produk_internet_antena.productid_antena INNER JOIN produk_internet_radio on dt_internet_wireless.productid_radio=produk_internet_radio.productid_radio INNER JOIN produk_internet_bts on dt_internet_wireless.productid_bts=produk_internet_bts.productid_bts where dt_internet_wireless.userid = '$userid'";
$sql2 = mysqli_query($konek, $query2);
//internet fo
$query3 = "select * from transaction_log_internet where userid='$userid' and media_akses='FO'";
$sql3 = mysqli_query($konek, $query3);
?>
<html>
<head>
  <title>
  </title>
</head>
<body>
  <h1 align="center">data teknis <?php echo $dd['nama_user'] ?></h1><br>
  <!-- data teknis compushop -->
  <div id="compushop">
  <h3>data teknis compushop</h3>
  <ol>
    <?php
    while ($k = mysqli_fetch_array($sql)){
      echo "<li>
      nama_produk: $k[nama_produk]<br>
      merk: <br>
      SN: <br>
      garansi_mulai: $k[garansi_mulai]<br>
      garansi_akhir: $k[garansi_akhir]</li><br>";
      echo "<br>";
    }
    ?>
  </ol>
</div>
  <div id='training'>
  <!-- data teknis training -->
  <h3>data teknis training</h3>
  <ol>
    <?php
    while ($k1 = mysqli_fetch_array($sql1)){
      echo "<li>
      id training: $k1[productid_training]<br>
      nama_training: $k1[nama_training]<br>";
      echo "<br>";
    }
    ?>
  </ol>
</div>
  <div id='inet_wireless'>
  <!-- data teknis internet wireless -->
  <h3>data teknis internet wireless</h3>
  <ol>
    <?php
    while ($k2 = mysqli_fetch_array($sql2)){
      echo "<li>
      media akses: $k2[media_akses]<br>
      antena: $k2[nama_antena]<br>
      radio: $k2[nama_radio]<br>
      bts: $k2[nama_bts]<br>
      frequensi: $k2[frequensi]<br>
      bandwith: $k2[bandwith]<br>";
      echo "<br>";
    }
    ?>
  </ol>
</div>
<div id="inet_fo">
  <!-- data teknis internet FO -->
  <h3>data teknis internet FO</h3>
  <ol>
    <?php
    while ($k3 = mysqli_fetch_array($sql3)){
      echo "<li>
      media akses: $k3[media_akses]<br>
      bandwith: $k3[bandwith] MB";
      echo "<br>";
    }
    ?>
  </ol>
</div>
</body>
</html>
