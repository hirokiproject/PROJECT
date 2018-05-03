<?php
	include '../koneksi.php';
	date_default_timezone_set('Asia/Jakarta');
	$tanggal=date("Y-m-d");
	$bengkelResmi = $_POST['bengkelResmi'];
	$modelKendaraan = $_POST['modelKendaraan'];
	$nama = $_POST['nama'];
	$nomorHp = $_POST['nomorHp'];
	$email = $_POST['email'];
	$nomorPolisi = $_POST['nomorPolisi'];
	$divisi = $_POST['divisi'];
	$keluhan = $_POST['keluhan']; 
	$status = "Unapprove";

	echo "
		tanggal = $tanggal<br>
		bengkelResmi = $bengkelResmi<br>
		modelKendaraan = $modelKendaraan<br>
		nama = $nama<br>
		nomorHp = $nomorHp<br>
		email = $email<br>
		nomorPolisi = $nomorPolisi<br>
		divisi = $divisi<br>
		keluhan = $keluhan<br>
		status = $status<br>
	";

	if(is_numeric($nomorHp)){
		$masuk = "INSERT INTO suarapelanggan (tanggal, bengkelResmi, modelKendaraan, nama, nomorHp, email, nomorPolisi, divisi, keluhan, status) VALUES('$tanggal', '$bengkelResmi', '$modelKendaraan', '$nama', '$nomorHp', '$email', '$nomorPolisi', '$divisi', '$keluhan', '$status')";
		$query=mysqli_query($koneksi, $masuk);

		if($query){
			echo "<script>alert('Terima Kasih telah mengisi Suara Pelanggan yang akan bengpengaruh terhadap kualitas pelayanan kami.');window.location='index.php'</script>";
		}else{
			echo "<script>alert('Silakan cek data Anda Kembali.');window.location='index.php'</script>";
		}	
	}else{
		echo "<script>alert('Silakan cek data Anda Kembali.');window.location='index.php'</script>";
	}
?>