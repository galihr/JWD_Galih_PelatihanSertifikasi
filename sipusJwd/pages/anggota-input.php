<?php
include'koneksi.php';
$sql = "SELECT COUNT(*) FROM tbanggota";
$result = mysqli_query($db, $sql);
$count = mysqli_fetch_assoc($result)['COUNT(*)'];
$count +=1;
?>

<div id="label-page"><h3>Input Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-input-proses.php" method="post" onsubmit="return checkform()">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" id="id_anggota" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" id="nama" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir">
			<select name="jenis_kelamin" id="jenis_kelamin" class="isian-formulir isian-formulir-border">

						<option value="pria" >pria</option>
						<option value="Wanita">Wanita</option>
					</select>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" id="alamat" class="isian-formulir isian-formulir-border"></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
	<script>
		function checkform() {
			id_anggota = document.getElementById('id_anggota');
			nama = document.getElementById('nama');
			jenis_kelamin = document.getElementById('jenis_kelamin');
			alamat = document.getElementById('alamat');

			if (id_anggota.value == '') {
				alert(' ID Tidak boleh kosong');
				id_anggota.focus();
				return false;

			} else if (nama.value == '') {
				alert('Nama Tidak boleh kosong');
				nama.focus();
				return false;

			} else if (jenis_kelamin.value == '') {
				alert('Jenis Kelamin Tidak boleh kosong');
				jenis_kelamin.focus();
				return false;

			} else if (alamat.value == '') {
				alert('Alamat Tidak boleh kosong');
				alamat.focus();
				return false;
			}
		}
	</script>
</div>