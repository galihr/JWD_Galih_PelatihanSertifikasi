<?php
	$id_anggota=$_GET['id'];
	$q_tampil_anggota=mysqli_query($db,"SELECT * FROM tbanggota WHERE idanggota='$id_anggota'");
	$r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota);
?>
<div id="label-page"><h3>Edit Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-edit-proses.php" method="POST" onsubmit="return checkform()">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Anggota</td>
			<td class="isian-formulir"><input type="text" name="id_anggota" value="<?php echo $r_tampil_anggota['idanggota']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled" ></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" name="nama" id="nama" value="<?php echo $r_tampil_anggota['nama']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
		<td class="label-formulir">Jenis Kelamin</td>
				<td class="isian-formulir">
					<select name="jenis_kelamin" id="jenis_kelamin" class="isian-formulir isian-formulir-border">
				
						<option value="pria" <?php echo 'pria' ==$r_tampil_anggota['jeniskelamin'] ? 'selected' : '' ?>>pria</option>
						<option value="Wanita" <?php echo 'Wanita' ==$r_tampil_anggota['jeniskelamin'] ? 'selected' : '' ?>>Wanita</option>
					</select>
				</td>
		</tr>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" name="alamat" class="isian-formulir isian-formulir-border"><?php echo $r_tampil_anggota['alamat']; ?></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
	<script>
		function checkform() {
			nama = document.getElementById('nama');

			if (nama.value == '') {
				alert('Nama tidak boleh kosong');
				nama2.focus();
				return false;
			} 


		}
	</script>

</div>