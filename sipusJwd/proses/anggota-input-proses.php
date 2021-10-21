<?php
include'../koneksi.php';
$id_anggota=$_POST['id_anggota'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$status="Tidak Meminjam";

//auto generate id
$prefix = "AG";
$sql_get_last = "SELECT MAX(idanggota)
FROM tbanggota";
$last_id = mysqli_fetch_array(mysqli_query($db, $sql_get_last))[0];
$last_id = (substr($last_id, 2));
$id_anggota =$prefix.str_pad($last_id +1, 3, "0", STR_PAD_LEFT) ;
	
if(isset($_POST['simpan'])){

	$sql = 
	"INSERT INTO tbanggota
		VALUES('$id_anggota','$nama','$jenis_kelamin','$alamat','$status')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=anggota");
}
?>