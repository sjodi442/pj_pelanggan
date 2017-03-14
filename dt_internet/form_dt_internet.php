<?php include "koneksi.php"; ?>
<html>
<head>
</head>
<body>
  <!-- form -->
  <h1>Input Data internet</h1>
  <form name="form1" method="post" action="dt_internet/proses_dt_internet.php">
    Nama User:  <select name="userid">
                <?php
                 $namu = "select distinct transaction_log_internet.userid, pelanggan.nama_user from transaction_log_internet inner join pelanggan on transaction_log_internet.userid = pelanggan.userid";
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
    <!-- script -->
<script>
function showDiv(xxx){
 		if(xxx.value == "FO"){
			document.getElementById('wireless').style.display = "none";
      document.getElementById('subm').name = "submit_fo";
		}
		else if(xxx.value == "Wireless"){
			document.getElementById('wireless').style.display = "block";
      document.getElementById('subm').name = "submit_wireless";
		}
	}
</script>
<!-- form search -->
    <div id="wireless" style="display: none">
      Antena : <select name="antena">
        <?php
        $ant = "select * from produk_internet_antena";
        $tna = mysqli_query($konek, $ant);
        while ($fetch0 = mysqli_fetch_array($tna)){
          echo "<option value='$fetch0[productid_antena]'>$fetch0[nama_antena]</option>";
        }
         ?>
      </select><br>
      Radio : <select name="radio">
        <?php
        $rad = "select * from produk_internet_radio";
        $dar = mysqli_query($konek, $rad);
        while ($fetch1 = mysqli_fetch_array($dar)){
          echo "<option value='$fetch1[productid_radio]'>$fetch1[nama_radio]</option>";
        }
         ?>
      </select><br>
      bts : <select name="bts">
        <?php
        $tsb = "select * from produk_internet_bts";
        $bts = mysqli_query($konek, $tsb);
        while ($fetch2 = mysqli_fetch_array($bts)){
          echo "<option value='$fetch2[productid_bts]'>$fetch2[nama_bts]</option>";
        }
         ?>
      </select><br>
      frequensi : <select name="frequensi">
        <option>2,4 GHZ</option>
        <option>5,8 GHZ</option>
      </select><br>
    </div>
    bandwith: <input type="text" name="bandwith">MB <br>
    <br><input id="subm" type="submit" value="submit disini !" name="submit">
  </form>
</body>
</html>
