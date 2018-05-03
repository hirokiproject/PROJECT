<?php
	include '../koneksi.php';

	date_default_timezone_set('Asia/Jakarta');
	$tanggal=date("Y-m-d");

	$jam = date("h:i:s A");
	$namaLengkap = $_POST['namaLengkap'];
	$email = $_POST['email'];
	$jenisKelamin = $_POST['jenisKelamin'];
	$pekerjaan = $_POST['pekerjaan'];
	$jenisMobil = $_POST['jenisMobil'];
	$pertanyaan = $_POST['pertanyaan'];
	$status = "Belum Dikerjakan";

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
		$hp = $_POST['hp'];
		if(is_numeric($hp)){
			$masuk = "INSERT INTO hubungisaya (tanggal, jam, nama, hp, email, jenisKelamin, pekerjaan, jenismobil, pertanyaan, status) VALUES('$tanggal', '$jam', '$namaLengkap', '$hp', '$email', '$jenisKelamin', '$pekerjaan', '$jenisMobil', '$pertanyaan', '$status')";
			$query=mysqli_query($koneksi, $masuk);

			if($query){
				echo "<script>alert('Terima Kasih telah mengisi data Anda. Sales kami akan menghubungi Anda segera.');window.location='../index.php'</script>";
			}else{
				echo "<script>alert('Silakan cek data Anda.');window.location='../index.php'</script>";
			}	
		}else{
			echo "<script>alert('Pastikan data yang Anda masukkan benar.');window.location='../index.php'</script>";
		}
	}else{
		echo "<script>alert('Pastikan CAPTCHA telah terconteng.');window.location='../index.php'</script>";
	}

	/*echo "
	Tanggal = $tanggal<br>
	Jam = $jam<br>
	Nama Lengkap = $namaLengkap<br>
	HP = $hp<br>
	Email = $email<br>
	Jenis Mobil = $jenisMobil<br>
	Pertanyaan = $pertanyaan<br>
	";*/

	
?>