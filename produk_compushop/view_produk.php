<?php
include "koneksi.php";
?>
<html>
<head>
</head>
<body>
<h1 align="center">view produk</h1>
<table border=1 align='center'>
	<center>
		<thead>
			<tr>
				<th>ID Produk</th><th>Nama Produk</th><th>Harga</th><th>Jumlah</th><th colspan="2">Action</th>
			</tr>
		</thead>
	</center>
<?php
$query = "select * from produk_compushop";
$sql = mysqli_query($konek, $query);
	while($tampil = mysqli_fetch_array ($sql)){
	echo "
		<tr>
			<td>$tampil[productid]</td>
			<td>$tampil[nama_produk]</td>
      <td>$tampil[harga_satuan]</td>
			<td align='center'>$tampil[qty]</td>
			";
?>
			<td><a href=home.php?page=edit_produk&productid=<?php echo $tampil['productid'] ?>>Edit</a></td>
			<td><a href=home.php?page=del_produk&productid=<?php echo $tampil['productid']?> onClick="return confirm('Apakah Anda Yakin Hapus Data?')">Hapus</a></td>
		</tr>
<?php
}
?>
</table>

</body>
</html>
