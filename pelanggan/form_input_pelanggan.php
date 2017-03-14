<html>
<head>
</head>
<body>
  <!-- preform -->
<?php include "koneksi.php";
$edit=mysqli_query($konek,"select * from pelanggan ORDER BY userid
DESC LIMIT 1") or die (mysqli_error($konek));
$r = mysqli_fetch_array($edit);
$a = $r['userid'];
$a++;
?>
  <!-- form -->
  <h1>Input Pelanggan</h1>
  <form method="post" action="pelanggan/proses_input_pelanggan.php">
    Userid: <input type="text" name="userid" value="<?php if (empty($r)) echo "U000".$a; else echo $a; ?>"><br>
    Nama: <input type="text" name="nama" ><br>
    Alamat: <input type="text" name="alamat" ><br>
    telp: <input type="text" name="telp"><br>
    email: <input type="email" name="email"><br>
    WEB: <input type="text" name="web"><br>
    WA number: <input type="text" name="wa"><br>
    User Since: <input type="date" name="user_since"><br>
    Category: Compushop<input type="checkbox" name="cat_comp"> internet <input type="checkbox" name="cat_inet"> web/soft <input type="checkbox" name="cat_soft"> Training <input type="checkbox" name="cat_training">
    <br><input type="submit" value="submit disini !" name="submit">
  </form>
</body>
</html>
