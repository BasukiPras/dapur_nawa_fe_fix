<?php 
include('../koneksi/koneksi.php');
// $id_user = $_SESSION['id_user'];
// // kurang user
if(isset($_SESSION['id_info'])){
$id_info = $_SESSION['id_info'];
$id_tag_info = $_POST['tag_info'];
$judul_info = $_POST['judul_info'];
$konten_info = $_POST['konten_info'];
$lokasi_file = $_FILES['cover']['tmp_name'];
$nama_file = $_FILES['cover']['name'];
$direktori = 'cover/'.$nama_file;

$sql_f = "SELECT `cover` FROM `info` WHERE `id_info`='$id_info'";
$query_f = mysqli_query($koneksi,$sql_f);
while($data_f = mysqli_fetch_row($query_f)){
	$cover = $data_f[0];}
if(empty($id_tag_info)){
header("Location:index.php?include=edit-info&notif=tambahtagkosong");
}else if(empty($judul_info)){
header("Location:index.php?include=edit-info&notif=tambahjudulkosong");
}else if(empty($konten_info)){
header("Location:index.php?include=edit-info&notif=tambahisikosong");
}else{
$lokasi_file = $_FILES['cover']['tmp_name'];
	$nama_file = $_FILES['cover']['name'];
	$direktori = 'cover/'.$nama_file;

	if(move_uploaded_file($lokasi_file,$direktori)){
		if(!empty($cover)){
			unlink("cover/$cover");
		}
		$sql = "UPDATE `info` set 
		`id_tag_info`='$id_tag_info',`judul_info`='$judul_info',
		`cover`='$nama_file'
		WHERE `id_info`='$id_info'";
		echo "<br>$sql";
		mysqli_query($koneksi,$sql);
	}

	else{
		$sql = "UPDATE `info` set 
		`id_tag_info`='$id_tag_info',`judul_info`='$judul_info'
		WHERE `id_info`='$id_info'";
		echo "$sql";
		mysqli_query($koneksi,$sql);

		die("Error: The file does not exist.");
	}
header("Location:index.php?include=info&notif=editinfoberhasil");	
}}
?>