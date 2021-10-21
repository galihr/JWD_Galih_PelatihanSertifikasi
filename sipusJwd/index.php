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
<nav class="navbar navbar-light" style="background-color: #808080;">
    <div class="container">
      <div>
      <header class="d-flex justify-content-center py-3">
					<div class="row">
					<div>
							<h3 class="text-center text-light"> PERPUSTAKAAN UMUM </h1>
						</div>
						<div>
							<h3 class="text-center text-light">Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
						</div>
						
					</div>
				</header>
    </div>
  </nav>
<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-secondary sidebar collapse">
				<div>
					<div class="h5 p-1 mb-1 text-dark" style="background-color:green;">Hai Admin !</div>
				</div>
				<div class="position-sticky">
					<a class="nav-link active text-light" aria-current="page" href="index.php?p=beranda">
						Beranda
					</a>
					<p class=" p-1 mb-1 text-white" style="background-color:orange;">Entry Data Dan Transaksi</p>
					<ul style="list-style-type:none; class="list-group>
						<li class="nav-item">
							<a class="nav-link active text-light" aria-current="page" href="index.php?p=anggota">
								Data Anggota
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active text-light" aria-current="page" href="index.php?p=buku">
								Data Buku
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active text-light" aria-current="page" href="index.php?p=transaksi-peminjaman">
								Transaksi Peminjaman
							</a>
						</li>
					</ul>
				</div>
			</nav>

			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<div class="row"><br /><br /><br />
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
				$pages_dir = 'pages';
				if (!empty($_GET['p'])) {
					$pages = scandir($pages_dir, 0);
					unset($pages[0], $pages[1]);
					$p = $_GET['p'];
					if (in_array($p . '.php', $pages)) {
						include($pages_dir . '/' . $p . '.php');
					} else {
						echo 'Halaman Tidak Ditemukan';
					}
				} else {
					include($pages_dir . '/beranda.php');
				}
				?>
			</main>
  <footer class="fixed-bottom" style="background-color: #808080; color: #fff;">
    <div class="container-fluid">
      <h6 class="mt-2" style="text-align: center;">Sistem Informasi Perpustakaan (sipus) | Praktikum </h6>
    </div>
  </footer>

	 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>


</html>