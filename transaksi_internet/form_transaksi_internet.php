<html>
<head>
</head>
<body>
  <!-- preform -->
<?php include "koneksi.php";
$edit=mysqli_query($konek,"select * from transaction_log ORDER BY inv_num
DESC LIMIT 1") or die (mysqli_error($konek));
$r = mysqli_fetch_array($edit);
$a = $r['inv_num'];
$a++;
?>
  <!-- form -->
  <h1>Input Transaksi internet</h1>
  <form name="form1" method="post" action="transaksi_internet/proses_input_transaksi.php">
    No Transaksi: <input type="text" name="inv_num" value="<?php if (empty($r)) echo "T00000".$a; else echo $a; ?>"><br>
    Nama User:  <select name="userid">
                <?php
                 $namu = "select pelanggan_internet.userid, pelanggan.nama_user from pelanggan_internet inner join pelanggan on pelanggan_internet.userid = pelanggan.userid";
                 $sqlm = mysqli_query($konek, $namu);
                 while ($f = mysqli_fetch_array($sqlm)){
                   echo "<option value='$f[userid]'>$f[nama_user]</option>";
                 }
                ?>
              </select><br>
    Media Akses : <select name="media_akses" onchange="showDiv(this)">
      <option disabled selected> ----- </option>
      <option value="FO">FO</option>
      <option value="Wireless">Wireless</option>
    </select><br>
    bandwith: <input type="text" name="bandwith">MB <br>
    total harga: <input type="text" name="total_harga" id="total_harga"><br>
    due date: <input type="date" name="due_date"><br>
    <br><input id="subm" type="submit" value="submit disini !" name="submit">
  </form>
</body>
</html>
