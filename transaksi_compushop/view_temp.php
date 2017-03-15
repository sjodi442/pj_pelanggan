<?php
include "koneksi.php";
$ss = "SELECT * from temp order by inv_num desc limit 1";
$aa = mysqli_query($konek, $ss);
$bb = mysqli_fetch_array($aa);
?>
<html>
<head>
</head>
<body>
<h1 align="center">view transaksi_compushop</h1>
inv num : <?php echo $bb['inv_num'] ?><br>
due_date : <?php echo $bb['due_date'] ?><br>
<table border=1 align='center'>
	<center>
		<thead>
			<tr>
				<th>Nama Produk</th><th>Harga satuan</th><th>Jumlah</th><th>harga total</th><th colspan="2">action</th>
			</tr>
		</thead>
	</center>
<?php
$query = "select produk_compushop.nama_produk, temp.harga_satuan, temp.qty, temp.total_bayar from temp inner join produk_compushop on temp.productid=produk_compushop.productid";
$sql = mysqli_query($konek, $query);
$total = 0;
	while($tampil = mysqli_fetch_array ($sql)){
	echo "
		<tr>
			<td>$tampil[nama_produk]</td>
			<td>$tampil[qty]</td>
      <td>$tampil[harga_satuan]</td>
			<td align='center'>$tampil[total_bayar]</td>
			";
      $total = $total + $tampil['total_bayar'];
?>
			<td><a>Edit</a></td>
			<td><a onClick="return confirm('Apakah Anda Yakin Hapus Data?')">Hapus</a></td>
		</tr>
<?php
}
?>
<tr>
  <td colspan="3">total bayar</td>
  <td><?php echo $total ?></td>
</tr>
</table><br>
<a href="nav.php?page=beli_lagi">beli lagi</a>
<a href="transaksi_compushop/proses_input_transaksi_final.php?inv_num=<?php echo $bb['inv_num'] ?>&total=<?php echo $total ?>">cetak</a>
</body>
</html>
