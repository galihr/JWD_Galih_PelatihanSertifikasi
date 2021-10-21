<?php
	$id_buku=$_GET['id'];
	$q_tampil_buku=mysqli_query($db,"SELECT * FROM tbbuku WHERE idbuku='$id_buku'");
	$r_tampil_buku=mysqli_fetch_array($q_tampil_buku);

?>
<div id="label-page"><h3>Edit Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-edit-proses.php" method="post" onsubmit="return checkform()">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir">ID Buku</td>
			<td class="isian-formulir"><input type="text" name="id_buku" id="id_buku" value="<?php echo $r_tampil_buku['idbuku']; ?>" readonly="readonly" class="isian-formulir isian-formulir-border warna-formulir-disabled"></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" name="judul_buku" id="judul_buku"  value="<?php echo $r_tampil_buku['judulbuku']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir">
				<select name="kategori" id="kategori" class="isian-formulir isian-formulir-border">
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="Ilmu Komputer"  <?php echo ($r_tampil_buku['kategori'] == 'Ilmu Komputer') ? 'selected' : ''; ?>>Ilmu Komputer</option>
					<option value="Ilmu Agama" <?php echo ($r_tampil_buku['kategori'] == 'Ilmu Agama') ? 'selected' : ''; ?>>Ilmu Agama</option>
					<option value="Karya Sastra" <?php echo ($r_tampil_buku['kategori'] == 'Karya Sastra') ? 'selected' : ''; ?>>Karya Sastra</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><input type="text" name="pengarang" id="pengarang" value="<?php echo $r_tampil_buku['pengarang']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><input type="text" name="penerbit" id="penerbit" value="<?php echo $r_tampil_buku['penerbit']; ?>" class="isian-formulir isian-formulir-border"></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" name="simpan" value="Simpan" id="tombol-simpan"></td>
		</tr>
	</table>
	</form>
	<script>
	function checkform() {
    judul = document.getElementById('judul');
    kategori = document.getElementById('kategori');
    pengarang = document.getElementById('pengarang');
    penerbit = document.getElementById('penerbit');

    if (judul.value == '') {
      alert('Judul tidak boleh kosong');
	  judul.focus();
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
  </script>
</div>