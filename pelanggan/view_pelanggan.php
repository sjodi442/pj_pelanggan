<?php
include "koneksi.php";
?>
<html>
<head>
</head>
<body>
<h1 align="center">view Pelanggan</h1>
<table border=1 align='center'>
	<center>
		<thead>
			<tr>
				<th>ID Pelanggan</th><th>Nama pelanggan</th><th>alamat</th><th>telp</th><th>email</th><th>Web</th><th>WA</th><th>User Since</th><th>transaction_log</th><th>Data Teknis</th><th colspan="2">Action</th>
			</tr>
		</thead>
	</center>
<?php
$query = "select * from pelanggan";
$sql = mysqli_query($konek, $query);
	while($tampil = mysqli_fetch_array ($sql)){
	echo "
		<tr>
			<td>$tampil[userid]</td>
			<td>$tampil[nama_user]</td>
      <td>$tampil[alamat]</td>
			<td>$tampil[telp]</td>
      <td>$tampil[email]</td>
      <td>$tampil[web]</td>
      <td>$tampil[WA]</td>
      <td>$tampil[user_since]</td>
			";
?>
      <td><a href=nav.php?page=view_transaction_pelanggan&userid=<?php echo $tampil['userid'] ?>>Detail</a></td>
      <td><a href=nav.php?page=view_teknis_pelanggan&userid=<?php echo $tampil['userid'] ?>>Detail</a></td>
			<td><a href=home.php?page=edit_produk&userid=<?php echo $tampil['userid'] ?>>Edit</a></td>
			<td><a href=home.php?page=del_produk&userid=<?php echo $tampil['userid']?> onClick="return confirm('Apakah Anda Yakin Hapus Data?')">Hapus</a></td>
		</tr>
<?php
}
?>
</table>

</body>
</html>
