<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
<head>
	 <!-- Required meta tags -->
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<div class="container">
		<div class="header">
			<div class="logo-perpustakaan-container">
				<image class="logo-perpustakaan" src="images/logo-perpustakaan3.png" border=0 style="border:0; text-decoration:none; outline:none"> 
			</div>
			<div class="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan">
					<h1> PERPUSTAKAAN UMUM </h1>
				</div>
				<div class="nama-alamat-perpustakaan">
					<h4>Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
				</div>
			</div>
		</div>
		<div class="header2">
			<div class="nama-user">Hai Admin !</div>
		</div>
		<div class="sidebar">
			<a href="index.php?p=beranda">Beranda</a>
			<p class="label-navigasi">Entry Data Dan Transaksi</p>
			<ul>
				<li><a href="index.php?p=anggota">Data Anggota</a></li>
				<li><a href="index.php?p=buku">Data Buku</a></li>
				<li><a href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
			</ul>
		</div>
		<div class="content-container">
			    <div class="container">
		<div class="row"><br/><br/><br/>
			<div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-warning login-panel" style="background-color:rgba(255, 255, 255, 0.6);position:relative;">
						
						<div class="panel-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
		<?php
			$pages_dir='pages';
			if(!empty($_GET['p'])){
				$pages=scandir($pages_dir,0);
				unset($pages[0],$pages[1]);
				$p=$_GET['p'];
				if(in_array($p.'.php',$pages)){
					include($pages_dir.'/'.$p.'.php');
				}else{
					echo'Halaman Tidak Ditemukan';
				}
			}else{
				include($pages_dir.'/beranda.php');
			}
		?>
		</div>
		<div class="footer"><h3>Sistem Informasi Perpustakaan (sipus) | Praktikum </h3></div>
	</div>

	 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>


</html>