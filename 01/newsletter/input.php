<?php
	include '../koneksi.php';

	$email = $_POST['email'];

	if (isset($_POST["email"]) && !empty($_POST["email"])) {
	    $masuk = "INSERT INTO newsletter (email) VALUES('$email')";  
	    $query=mysqli_query($koneksi, $masuk);
	    if($query){
			echo "<script>alert('Terima Kasih telah mengisi data Anda. Anda akan mendapat update terbaru mengenai informasi produk dan promosi langsung di email Anda.');window.location='../index.php'</script>";
		}else{
			echo "<script>alert('Pastikan data yang Anda masukkan benar.');window.location='../index.php'</script>";
		}
	}else{  
	    echo "<script>alert('Pastikan data yang Anda masukkan benar.');window.location='../index.php'</script>";
	}
?>