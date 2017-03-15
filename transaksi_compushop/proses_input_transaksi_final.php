<?php
$inv_num = $_GET['inv_num'];
$total = $_GET['total'];
include "../koneksi.php";
$a="select * from temp";
$b=mysqli_query($konek,$a);
while($c=mysqli_fetch_array($b)) {
  echo $c['userid'];echo $inv_num;echo $total;
  $qq = "INSERT into transaction_log_compushop values (DEFAULT, '$inv_num', '$c[userid]', '$c[productid]','$c[harga_satuan]','$c[qty]','$c[total_bayar]','$c[tgl_transaksi]','$c[garansi_mulai]','$c[garansi_akhir]')";
  mysqli_query($konek,$qq) or die(mysqli_error($konek));
}
$aa = "select * from temp order by inv_num DESC LIMIT 1";
$dd = mysqli_query($konek, $aa);
$x = mysqli_fetch_array($dd);
$query = "INSERT into transaction_log values ('$inv_num','$x[userid]','compushop','$total',now(),'$x[due_date]','','$total','hutang')";
mysqli_query($konek, $query) or die(mysqli_error($konek));
mysqli_query($konek,"DELETE FROM temp");

?>
