
<html>
<head>
	<link href="style1.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
<div id="header">
	<img src="solonet.jpg" id="i">
	<div id="head">
		<a href="#" class="btn">Home</a>
		<div class="dropdown">
			<button class="dropbtn">Master</button>
			<div class="dropdown-content">
				<a href="nav.php?page=input_pelanggan">pelanggan</a>
  		</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">Transaksi</button>
			<div class="dropdown-content">
				<a href="nav.php?page=transaksi_compushop">Compushop</a>
				<a href="nav.php?page=transaksi_internet">Internet</a>
				<a href="nav.php?page=transaksi_training">training</a>
  		</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">View</button>
			<div class="dropdown-content">
				<a href="nav.php?page=view_pelanggan">pelanggan</a>
				<a href="nav.php?page=view_produk_compushop">produk compushop</a>
  		</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">ADD</button>
			<div class="dropdown-content">
				<a href="nav.php?page=dt_internet">data internet</a>
  		</div>
		</div>
	</div>
</div>

<div id="isi">
	<?php
						$page=(isset($_GET['page']))?$_GET['page']:"main";
						switch($page){
						//input pelanggan
						case 'input_pelanggan'						: include"pelanggan/form_input_pelanggan.php";break;
						//view pelanggan
						case 'view_pelanggan'							: include"pelanggan/view_pelanggan.php";break;
						//view detail transaction_log pelanggan
						case 'view_transaction_pelanggan'	: include"pelanggan/view_transaction_pelanggan.php";break;
						//view detail tl compushop
						case 'view_detail_tl_cs'					: include"pelanggan/view_detail_tl_cs.php";break;
						//view detail teknis pelanggan
						case 'view_teknis_pelanggan'			: include"pelanggan/view_teknis_pelanggan.php";break;
						//view produk compushop
						case 'view_produk_compushop'			: include"produk_compushop/view_produk.php";break;
						//input transaksi compushop
						case 'transaksi_compushop'				: include"transaksi_compushop/form_transaksi_compushop.php";break;
						//input transaksi training
						case 'transaksi_training'					: include"transaksi_training/form_transaksi_training.php";break;
						//input transaksi internet
						case 'transaksi_internet'					: include"transaksi_internet/form_transaksi_internet.php";break;
						//input dt internet
						case 'dt_internet'								: include"dt_internet/form_dt_internet.php";break;
						//view transaksi_compushop lagi
						case 'view_temp'									: include"transaksi_compushop/view_temp.php";break;
						//input beli lagi
						case 'beli_lagi'									: include"transaksi_compushop/form_beli_lagi.php";break;
						}
					?>
</div>
</center>
</body>
</html>
