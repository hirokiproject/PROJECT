<?php
	$url = 'https://www.google.com/recaptcha/api/siteverify';
	$data = array(
		'secret' => "6LeMjiETAAAAAIgMp9PW6aplyxQ3RZs2rD9ZlX39",
		'response' => $_POST['g-recaptcha-response'],
		'remoteip' => $_SERVER['REMOTE_ADDR']
	);
	$options = array(
		'http' => array (
			'method' => 'POST',
			'header' => 'Context-type: application/x-www-form-urlencoded',
			'content' => http_build_query($data)
		)
	);
	$context = stream_context_create($options);
	$verify = @file_get_contents($url, false, $context);
	$captcha_success = json_decode($verify);

	if($captcha_success->success == true){	
		if (isset($_POST['kirim'])){
  			include '../koneksi.php';
  			$namaLengkap = $_POST['namaLengkap'];
			$noTelp = $_POST['noTelp'];
			$email = $_POST['email'];
			$alamatLengkap = $_POST['alamatLengkap'];
			$modelKendaraan = $_POST['modelKendaraan'];
			$namaBengkel = $_POST['bengkelResmi'];
			$strNoPart = $_POST['nomorPart'];
			//echo "$namaLengkap, $noTelp, $email, $alamatLengkap, $modelKendaraan, $strNoPart";

			$masuk = "insert into pesansparepart (namaLengkap, notelp, email, alamatLengkap, modelKendaraan, bengkelResmi, barangPesanan) values ('$namaLengkap', '$noTelp', '$email', '$alamatLengkap', '$modelKendaraan','$namaBengkel', '$strNoPart')";

			$query=mysqli_query($koneksi, $masuk);
			if($query){
				echo "<script>alert('Terima Kasih telah memesan sparepart kami. Anda akan segera dihubungi oleh sales kami.');window.location='index.php'</script>";
			}else{
				echo "<script>alert('Silakan cek data Anda Kembali.');window.location='index.php'</script>";
			}
  		}
	}else{
		echo "<script>alert('Pastikan CAPTCHA telah terconteng.');window.location='pesanSparePart.php'</script>";
	}
?>