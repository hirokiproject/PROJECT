<?php
	include "../../koneksi.php";

	date_default_timezone_set('Asia/Jakarta');
	$tanggal=date("Y-m-d");

	$judul = $_POST['judul'];
	$keterangan = $_POST['keterangan'];
	$fileName = $_FILES['image']['name'];

	$id=$_POST['id'];
	/*echo"<br>ID : $id <br>";

	echo "
		tanggal = $tanggal<br>
		judul = $judul<br>
		keterangan = $keterangan<br>
		image = $image<br>
		";*/

	$sql="select * from news where id='$_POST[id]'";
	
	/*if($sql){
		echo"baris berhasil diambil2.<br>";
	}else{
		echo"baris gagal diambil2.<br>";
	}*/	

	$hasil=mysqli_query($koneksi, $sql);
	
	/*if($hasil){
		echo"baris berhasil diambil3.<br>";
	}else{
		echo"baris gagal diambil3.<br>";
	}*/
	

	$dat=mysqli_fetch_row($hasil);
	
	/*if($dat){
		echo"baris berhasil diambil4.<br>";
	}else{
		echo"baris gagal diambil4.<br>";
	}*/

	$update="UPDATE news SET tanggal='$tanggal', judul='$judul', keterangan='$keterangan', Paths='$fileName' WHERE id='$id'";
	$ubah = mysqli_query($koneksi, $update);

	/*if($ubah){
		echo"data berhasil diupdate.<br>";
	}else{
		echo"data gagal diupdate.<br>";
	}*/
	
	$pindah = move_uploaded_file($_FILES['image']['tmp_name'], "images/news/".$_FILES['image']['name']);
	if($pindah){
		echo"<script>alert('Data berhasil diganti.');window.location='editNews.php'</script>";
	}else{
		echo"<script>alert('Data gagal diganti.');window.location='editNews.php'</script>;";
	}
	
?>