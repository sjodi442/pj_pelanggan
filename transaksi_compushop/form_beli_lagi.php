<html>
<head>
</head>
<script language="JavaScript" type="text/javascript">
    function hitung(){

    var myForm = document.form1;
    var x=eval(myForm.harga_satuan.value);
    var y=eval(myForm.qty.value);
    var z = x * y;
     myForm.total_harga.value = z;
    }
  </script>
<body>
  <!-- preform -->
<?php include "../koneksi.php";
$edit=mysqli_query($konek,"select * from transaction_log ORDER BY inv_num
DESC LIMIT 1") or die (mysqli_error($konek));
$r = mysqli_fetch_array($edit);
$a = $r['inv_num'];
$a++;
?>
  <!-- form -->
  <h1>Input Transaksi compushop</h1>
  <form name="form1" method="post" action="proses_input_transaksi.php">
  <input type="text" name="inv_num" hidden="true" value="<?php if (empty($r)) echo "T00000".$a; else echo $a; ?>"><br>
    Nama User:  <select name="userid">
                <?php
                 $namu = "select temp.userid, pelanggan.nama_user from temp inner join pelanggan on temp.userid = pelanggan.userid order by temp.userid DESC LIMIT 1";
                 $sqlm = mysqli_query($konek, $namu);
                 while ($f = mysqli_fetch_array($sqlm)){
                   echo "<option value='$f[userid]'>$f[nama_user]</option>";
                 }
                ?>
              </select><br>
    Nama Produk :
                <?php
                 $namp = "select * from produk_compushop";
                 $result = mysqli_query($konek, $namp);
                                $jsArray = "var prdName = new Array();\n";
                              echo"
                                    <select name='productid' onchange='changeValue(this.value)'>
                                      <option>-------</option>";
                                      while ($row = mysqli_fetch_array($result)) {
                                        echo '<option name="product_id"  value="' . $row['productid'] . '">' . $row['nama_produk'] . '</option>';
                                        $jsArray .= "prdName['" . $row['productid'] . "'] = {miez:'" . addslashes($row['harga_satuan'])."'};\n";
                                      }
                              ?>
                                    </select><br>
    harga_satuan: <input id="harga_satuan" type="text" name="harga_satuan"><br>
    qty: <input type="text" name="qty" id="qty" ><input type='button' onClick="hitung()" value="tambah" name="total"><br>
    total harga: <input type="text" name="total_harga" id="total_harga"><br>
    garansi_akhir: <input type="date" name="garansi_akhir"><br>
    <br><input type="submit" value="submit disini !" name="submit">
  </form>
  <script type="text/javascript">
  <?php echo $jsArray; ?>
  function changeValue(id){
  document.getElementById('harga_satuan').value = prdName[id].miez;
  };
  </script>
</body>
</html>
