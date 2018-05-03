<?php
	include "../../koneksi.php";
	$sql="select * from news where id='$_GET[id]'";
	/*
	if($sql){
		echo"baris berhasil diambil2.<br>";
	}else{
		echo"baris gagal diambil2.<br>";
	}	*/
	

	$id=$_GET['id'];
	//echo"<br>ID : $id <br>";

	$hasil=mysqli_query($koneksi, $sql);
	/*
	if($hasil){
		echo"baris berhasil diambil3.<br>";
	}else{
		echo"baris gagal diambil3.<br>";
	}
	*/

	$dat=mysqli_fetch_row($hasil);
	/*
	if($dat){
		echo"baris berhasil diambil4.<br>";
	}else{
		echo"baris gagal diambil4.<br>";
	}
	*/

	$hapus="delete from news where id='$id'";
	mysqli_query($koneksi, $hapus);

	if($hapus){
		echo"data berhasil dihapus.<br>";
	}else{
		echo"data gagal dihapus.<br>";
	}
	
	header('Location: editNews.php');
?>