<?php
include "koneksi.php";
$userid = $_GET['userid'];
?>
<html>
<head>
  <title>
  </title>
</head>
<body>
  <!-- transaction_log_compushop -->
  <h1 align="center">transaction_log_compushop</h1>
  <table align="center" border="1">
    <center>
  		<thead>
  			<tr>
  				<th>Tanggal</th><th>Nama Produk</th><th>Jumlah</th><th>Harga satuan</th><th>total</th><th>NO transaksi</th><th>Payment Date</th><th>Due Date</th><th>outstanding</th>
  			</tr>
  		</thead>
  	</center>
    <?php
    $query = "select transaction_log.tgl_transaksi, produk_compushop.nama_produk, transaction_log_compushop.qty, transaction_log_compushop.harga_satuan, transaction_log.total_bayar, transaction_log.inv_num, transaction_log.due_date, transaction_log.payment_date, transaction_log.outstanding from transaction_log inner join transaction_log_compushop on transaction_log.userid=transaction_log_compushop.userid and transaction_log.inv_num=transaction_log_compushop.inv_num inner join produk_compushop on transaction_log_compushop.productid=produk_compushop.productid where transaction_log.userid='$userid'";
    $sql = mysqli_query($konek, $query);
    while ($k = mysqli_fetch_array($sql)){
      echo "<tr>
      <td>$k[tgl_transaksi]</td>
      <td>$k[nama_produk]</td>
      <td>$k[qty]</td>
      <td>$k[harga_satuan]</td>
      <td>$k[total_bayar]</td>
      <td>$k[inv_num]</td>
      <td>$k[payment_date]</td>
      <td>$k[due_date]</td>
      <td>$k[outstanding]</td>
      </tr>";
    }
    ?>
  </table><br>
  <!-- transaction_log_Training -->
  <h1 align="center">transaction_log_training</h1>
  <table align="center" border="1">
    <center>
  		<thead>
  			<tr>
  				<th>Tanggal</th><th>Nama Training</th><th>total</th><th>NO transaksi</th><th>Payment Date</th><th>Due Date</th><th>outstanding</th>
  			</tr>
  		</thead>
  	</center>
    <?php
    $query1 = "select transaction_log.tgl_transaksi, produk_training.nama_training, transaction_log.total_bayar, transaction_log.inv_num, transaction_log.due_date, transaction_log.payment_date, transaction_log.outstanding from transaction_log inner join transaction_log_training on transaction_log.userid=transaction_log_training.userid and transaction_log.inv_num=transaction_log_training.inv_num inner join produk_training on transaction_log_training.productid_training=produk_training.productid_training where transaction_log.userid='$userid'";
    $sql1 = mysqli_query($konek, $query1);
    while ($k1 = mysqli_fetch_array($sql1)){
      echo "<tr>
      <td>$k1[tgl_transaksi]</td>
      <td>$k1[nama_training]</td>
      <td>$k1[total_bayar]</td>
      <td>$k1[inv_num]</td>
      <td>$k1[payment_date]</td>
      <td>$k1[due_date]</td>
      <td>$k1[outstanding]</td>
      </tr>";
    }
    ?>
  </table><br>
  <!-- transaction_log_internet -->
  <h1 align="center">transaction_log_internet</h1>
  <table align="center" border="1">
    <center>
  		<thead>
  			<tr>
  				<th>Tanggal</th><th>media akses</th><th>bandwith</th><th>total</th><th>NO transaksi</th><th>Payment Date</th><th>Due Date</th><th>outstanding</th>
  			</tr>
  		</thead>
  	</center>
    <?php
    $query3 = "select transaction_log.tgl_transaksi, transaction_log_internet.media_akses, transaction_log_internet.bandwith, transaction_log.total_bayar, transaction_log.inv_num, transaction_log.due_date, transaction_log.payment_date, transaction_log.outstanding from transaction_log inner join transaction_log_internet on transaction_log.userid=transaction_log_internet.userid and transaction_log.inv_num=transaction_log_internet.inv_num where transaction_log.userid='$userid'";
    $sql3 = mysqli_query($konek, $query3);
    while ($k3 = mysqli_fetch_array($sql3)){
      echo "<tr>
      <td>$k3[tgl_transaksi]</td>
      <td>$k3[media_akses]</td>
      <td>$k3[bandwith]</td>
      <td>$k3[total_bayar]</td>
      <td>$k3[inv_num]</td>
      <td>$k3[payment_date]</td>
      <td>$k3[due_date]</td>
      <td>$k3[outstanding]</td>
      </tr>";
    }
    ?>
  </table><br>
</body>
</html>
