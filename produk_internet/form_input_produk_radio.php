<html>
<head>
</head>
<body>
  <!-- preform -->
<?php include "../koneksi.php";
$edit=mysqli_query($konek,"select * from produk_internet_radio ORDER BY productid_radio
DESC LIMIT 1") or die (mysqli_error($konek));
$r = mysqli_fetch_array($edit);
$a = $r['productid_radio'];
$a++;
?>
  <!-- form -->
  <h1>Input Produk</h1>
  <form method="post" action="proses_input_produk.php">
    id jenis radio: <input type="text" name="productid_radio" value="<?php if (empty($r)) echo "R000".$a; else echo $a; ?>"><br>
    Jenis Radio: <input type="text" name="jenis_radio" ><br>
    qty :<input type="text" name="qty" ><br>
    <br><input type="submit" value="submit disini !" name="submit_radio">
  </form>
</body>
</html>
