<?php
	include '../koneksi.php';
	$bengkelResmi = $_POST['bengkelResmi'];
	$tanggal = $_POST['tanggal'];
	$jam = $_POST['jam'];
	$modelKendaraan = $_POST['modelKendaraan'];
	$nama = $_POST['nama'];
	$nomorPolisi = $_POST['nomorPolisi'];
	$kerusakan = $_POST['kerusakan'];
	$status = "Belum Dikerjakan";

	/*echo "
		bengkelResmi = $bengkelResmi<br>
		tanggal = $tanggal<br>
		jam = $jam<br>
		modelKendaraan = $modelKendaraan<br>
		nama = $nama<br>
		nomorHp = $nomorHp<br>
		nomorPolisi = $nomorPolisi<br>
		kerusakan = $kerusakan<br>
	";*/

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
		$nomorHp = $_POST['nomorHp'];
		if(is_numeric($nomorHp)){
			$masuk = "INSERT INTO bookingservice (bengkelResmi, tanggal, jam, modelKendaraan, nama, nomorHp, nomorPolisi, kerusakan, status) VALUES('$bengkelResmi', '$tanggal','$jam', '$modelKendaraan', '$nama', '$nomorHp', '$nomorPolisi', '$kerusakan', '$status')";
			$query=mysqli_query($koneksi, $masuk);

			if($query){
				echo "<script>alert('Terima Kasih telah mengisi Booking Service Online.');window.location='index.php'</script>";
			}else{
				echo "<script>alert('Silakan cek data Anda Kembali.');window.location='index.php'</script>";
			}	
		}else{
			echo "<script>alert('Silakan cek data Anda Kembali.');window.location='index.php'</script>";
		}
	}else{
		echo "<script>alert('Pastikan CAPTCHA telah terconteng.');window.location='index.php'</script>";
	}

	
?>