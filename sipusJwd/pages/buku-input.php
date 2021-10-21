<?php
include'koneksi.php';
$sql = "SELECT COUNT(*) FROM tbbuku";
$result = mysqli_query($db, $sql);
$count = mysqli_fetch_assoc($result)['COUNT(*)'];
$count +=1;
?>


<div id="label-page"><h3>Input Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-input-proses.php" method="post" onsubmit="return checkform()">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="id_buku" id="id_buku" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" name="judul" id="judul" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir">
				<select name="kategori" id="kategori" class="isian-formulir isian-formulir-border">
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><input type="text" name="pengarang" id="pengarang" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><input type="text" name="penerbit" id="penerbit" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
	<script>
		function checkform() {
			judul_buku = document.getElementById('judul');
			kategori = document.getElementById('kategori');
			pengarang = document.getElementById('pengarang');
			penerbit = document.getElementById('penerbit');

			if (judul_buku.value == '') {
				alert('Judul buku tidak boleh kosong');
				judul_buku.focus();
				return false;

			} else if (kategori.value == '') {
				alert('Kategori tidak boleh kosong');
				kategori.focus();
				return false;

			} else if (pengarang.value == '') {
				alert('Pengarang tidak boleh kosong');
				pengarang.focus();
				return false;

			} else if (penerbit.value == '') {
				alert('Penerbit tidak boleh kosong');
				penerbit.focus();
				return false;
			}
    }
		}
	</script>
</div>