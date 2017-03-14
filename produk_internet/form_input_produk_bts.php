<html>
<head>
</head>
<body>
  <!-- preform -->
<?php include "../koneksi.php";
$edit=mysqli_query($konek,"select * from produk_internet_bts ORDER BY productid_bts
DESC LIMIT 1") or die (mysqli_error($konek));
$r = mysqli_fetch_array($edit);
$a = $r['productid_bts'];
$a++;
?>
  <!-- form -->
  <h1>Input Produk</h1>
  <form method="post" action="proses_input_produk.php">
    id jenis bts: <input type="text" name="productid_bts" value="<?php if (empty($r)) echo "B000".$a; else echo $a; ?>"><br>
    nama bts: <input type="text" name="nama_bts" ><br>
    <br><input type="submit" value="submit disini !" name="submit_bts">
  </form>
</body>
</html>
