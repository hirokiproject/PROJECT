<?php
$host = "localhost";
$user = "root";
$pass = "";
$koneksi = mysqli_connect($host,$user,$pass);
/*if($koneksi){
	echo "koneksi berhasil<br>";
}else{
	echo "koneksi gagal<br>";
}*/

$database = mysqli_select_db($koneksi, "hpsardana");
/*if($database){
	echo "berhasil masuk database<br>";
}else{
	echo "gagal masuk database<br>";
}*/
?>