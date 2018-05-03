<?php
	include "../../koneksi.php";
	$sql="select * from hubungisaya where id='$_GET[id]'";
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

	$status="Selesai";
	//echo"<br>STATUS : $status <br>";
	$ubah="update hubungisaya set status='$status' where id='$id'";
	mysqli_query($koneksi, $ubah);

	if($ubah){
		echo"data berhasil diubah.<br>";
	}else{
		echo"data gagal diubah.<br>";
	}
	
	header('Location: hubungisaya.php');
?>