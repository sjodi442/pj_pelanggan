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
  <h1>Input Transaksi compushop</h1>
  <form name="form1" method="post" action="transaksi_training/proses_input_transaksi.php">
    No Transaksi: <input type="text" name="inv_num" value="<?php if (empty($r)) echo "T00000".$a; else echo $a; ?>"><br>
    Nama User:  <select name="userid">
                <?php
                 $namu = "select pelanggan_training.userid, pelanggan.nama_user from pelanggan_training inner join pelanggan on pelanggan_training.userid = pelanggan.userid";
                 $sqlm = mysqli_query($konek, $namu);
                 while ($f = mysqli_fetch_array($sqlm)){
                   echo "<option value='$f[userid]'>$f[nama_user]</option>";
                 }
                ?>
              </select><br>
    Nama Produk :
                <?php
                 $namp = "select * from produk_training";
                 $result = mysqli_query($konek, $namp);
                                $jsArray = "var prdName = new Array();\n";
                              echo"
                                    <select name='productid' onchange='changeValue(this.value)'>
                                      <option>-------</option>";
                                      while ($row = mysqli_fetch_array($result)) {
                                        echo '<option name="product_id"  value="' . $row['productid_training'] . '">' . $row['nama_training'] . '</option>';
                                        $jsArray .= "prdName['" . $row['productid_training'] . "'] = {miez:'" . addslashes($row['harga'])."'};\n";
                                      }
                              ?>
                                    </select><br>
    harga: <input id="harga" type="text" name="harga"><br>
    due date: <input type="date" name="due_date"><br>
    <br><input type="submit" value="submit disini !" name="submit">
  </form>
  <script type="text/javascript">
  <?php echo $jsArray; ?>
  function changeValue(id){
  document.getElementById('harga').value = prdName[id].miez;
  };
  </script>
</body>
</html>
