<?php
include "koneksi.php";
$inv_num = $_GET['inv_num'];
$sql = "select transaction_log_compushop.harga_satuan, transaction_log_compushop.qty, transaction_log_compushop.total_bayar, produk_compushop.nama_produk from transaction_log_compushop inner join produk_compushop on transaction_log_compushop.productid=produk_compushop.productid where transaction_log_compushop.inv_num='$inv_num'";
$query = mysqli_query($konek, $sql);
?>
<html>
<head>
</head>
<body>
  <h3 align="center">Detail Transaksi compushop <?php echo $inv_num ?></h3>
  <table align="center">
    <center>
  		<thead>
  			<tr>
  				<th>nama_produk</th><th>harga_satuan</th><th>QTY</th><th>Harga total</th>
  			</tr>
  		</thead>
  	</center>
    <?php
    while ($k = mysqli_fetch_array($query)){
      echo "<tr>
      <td>$k[nama_produk]</td>
      <td>$k[harga_satuan]</td>
      <td>$k[qty]</td>
      <td>$k[total_bayar]</td>
      </tr>";
    }
    ?>
  </table>
</body>
</html>
