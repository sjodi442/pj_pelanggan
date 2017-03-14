<html>
<head>
</head>
<body>
  <!-- preform -->
<?php include "../koneksi.php";
$edit=mysqli_query($konek,"select * from produk_compushop ORDER BY productid
DESC LIMIT 1") or die (mysqli_error($konek));
$r = mysqli_fetch_array($edit);
$a = $r['productid'];
$a++;
?>
  <!-- form -->
  <h1>Input Produk</h1>
  <form method="post" action="proses_input_produk.php">
    Productid: <input type="text" name="productid" value="<?php if (empty($r)) echo "P000".$a; else echo $a; ?>"><br>
    Nama Product: <input type="text" name="nama" ><br>
    qty :<input type="text" name="qty" ><br>
    harga_satuan: <input type="text" name="harga" ><br>
    <br><input type="submit" value="submit disini !" name="submit">
  </form>
</body>
</html>
