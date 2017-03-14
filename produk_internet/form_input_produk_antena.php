<html>
<head>
</head>
<body>
  <!-- preform -->
<?php include "../koneksi.php";
$edit=mysqli_query($konek,"select * from produk_internet_antena ORDER BY productid_antena
DESC LIMIT 1") or die (mysqli_error($konek));
$r = mysqli_fetch_array($edit);
$a = $r['productid_antena'];
$a++;
?>
  <!-- form -->
  <h1>Input Produk</h1>
  <form method="post" action="proses_input_produk.php">
    id jenis antena: <input type="text" name="productid_antena" value="<?php if (empty($r)) echo "A000".$a; else echo $a; ?>"><br>
    Jenis antena: <input type="text" name="jenis_antena" ><br>
    qty :<input type="text" name="qty" ><br>
    <br><input type="submit" value="submit disini !" name="submit_antena">
  </form>
</body>
</html>
