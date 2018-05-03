<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="author" content="Distributor resmi kendaraan Mitsubishi Medan - Deli Serdang - Banda Aceh - Rantau Prapat - Banjarbaru - Batulicin">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="keywords" content="Diler Mitsubishi Medan, Dealer Mitsubishi Medan, Mitsubishi Medan, Dealer Medan, Dealer Mitsubishi, Mitsubishi Pajero Sport, Mitsubishi Outlander Sport, Mitsubishi Delica, Mitsubishi Mirage, Mitsubishi L300, Mitsubishi T120, Mitsubishi Colt Diesel, Mitsubishi Fuso, Mitsubishi Tractor Head, Mitsubishi Triton, Mitsubishi, Mitsubishi Motors, Mitsubishi Fuso, Mitsubishi Indonesia">
<meta name="description" content="Distributor resmi kendaraan Mitsubishi Medan - Deli Serdang - Banda Aceh - Rantau Prapat - Banjarbaru - Batulicin">

<title>Dealer Mitsubishi Medan | Sardana Group | Mitsubishi Motors and Mitsubishi Fuso Authorized Dealer</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/animate.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/owl.theme.css">
<link rel="stylesheet" href="../css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="../css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

<!-- =========================
     PRE LOADER       
============================== -->
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>

<!-- =========================
     NAVIGATION LINKS     
============================== -->
<div class="containerNamaPT01">
	<div class="navbar navbar-fixed" role="navigation">

		<!-- navbar header -->
		<div class="col-xs-6">
			<div class="logoSardana">
				<a href="http://www.sardanagroup.co.id">
					<img src="../images/logo/SardanaGroup.png" class="img-responsive">
				</a>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="logoMit">
				<img src="../images/logo/logoMMw.png" class="img-responsive" width="50px">
				<img src="../images/logo/logoMFw.png" class="img-responsive" width="50px">
			</div>
		</div>
	</div>
</div>
<div class="containerNamaPT">
	<div class="navbar navbar-fixed-top custom-navbar" role="navigation">	
		<div class="row">
			<div class="col-sm-12">
				<!-- navbar header -->
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="kelang"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<div class="namaPT">
						PT. SARDANA INDAH BERLIAN MOTOR
					</div>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="menuColor"><a href="../" class="page-scroll">Beranda</a></li>
						<li class="menuColor"><a href="../#produk" class="page-scroll">Produk</a></li>
						<li class="menuColor"><a href="../#purnaJual" class="page-scroll">Purna Jual</a></li>
						<li class="menuColor"><a href="../#berita" class="page-scroll">Berita</a></li>
						<li class="menuColor"><a href="../#tentangKami" class="page-scroll">Tentang Kami</a></li>
						<li class="menuColor"><a href="../#hubungiKami" class="page-scroll">Lokasi Dealer</a></li>
						<li class="menuColor1"><a href="../testimoni/" class="page-scroll">Testimoni</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="gambarHeaderServis">
	<img src="../images/suaraPelanggan/01.jpg" class="img-responsive" alt="Suara Pelanggan" align="right">
</div>

<!-- =========================
    Booking Service
============================== -->
<section id="bookingService" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 wow bounceIn">
				<div class="section-title">
					<h2>Suara Pelanggan</h2>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12 col-sm-12 wow bounceIn">
				<div class="section-titleSukuCadang">
					<div>
						<?php
							$bengkelResmi = "";
							$modelKendaraan = "";
							$nama = "";
							$nomorHp = "";
							$email = "";
							$nomorPolisi = "";
							$divisi = array();
							$strDivisi = "";
							$keluhan = "";

							if(isset($_POST['kirim'])){
								$bengkelResmi = $_POST['bengkelResmi'];
								$modelKendaraan = $_POST['modelKendaraan'];
								$nama = $_POST['nama'];
								$nomorHp = $_POST['nomorHp'];
								$email = $_POST['email'];
								$nomorPolisi = $_POST['nomorPolisi'];
								if(isset($_POST['divisi'])){
									$divisi = $_POST['divisi'];
								}
								$keluhan = $_POST['keluhan'];

								if($bengkelResmi==""){
									echo "
										<div class='alert alert-danger'>
										  <strong>Bengkel Resmi Mitsubishi</strong> belum diisi.
										</div>";
								}

								if($modelKendaraan==""){
									echo "
										<div class='alert alert-danger'>
										  <strong>Model Kendaraan</strong> belum diisi.
										</div>";
								}

								if($nama==""){
									echo "
										<div class='alert alert-danger'>
										  <strong>Nama</strong> belum diisi.
										</div>";
								}

								if($nomorHp==""){
									echo "
										<div class='alert alert-danger'>
										  <strong>Nomor HP</strong> belum diisi.
										</div>";
								}

								if($email==""){
									echo "
										<div class='alert alert-danger'>
										  <strong>Email</strong> belum diisi.
										</div>
									";
								}

								if($nomorPolisi==""){
									echo "
										<div class='alert alert-danger'>
										  <strong>Nomor Polisi</strong> belum diisi.
										</div>";
								}

								if(empty($divisi)){
									echo "
										<div class='alert alert-danger'>
										  <strong>Divisi</strong> belum diisi.
										</div>";
								}

								if($keluhan==""){
									echo "
										<div class='alert alert-danger'>
										  <strong>Keluhan</strong> belum diisi.
										</div>";
								}else{
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
									$strDivisi = join("|",$divisi);
									$keluhan = $_POST['keluhan']; 
									$status = "Unapprove";

									/*echo "
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
										if(is_numeric($nomorHp)){
											$masuk = "INSERT INTO suarapelanggan (tanggal, bengkelResmi, modelKendaraan, nama, nomorHp, email, nomorPolisi, divisi, keluhan, status) VALUES('$tanggal', '$bengkelResmi', '$modelKendaraan', '$nama', '$nomorHp', '$email', '$nomorPolisi', '$strDivisi', '$keluhan', '$status')";
											$query=mysqli_query($koneksi, $masuk);

											if($query){
												echo "<div class='alert alert-success'>
												<span class='glyphicon glyphicon-ok' aria-hidden='true'></span>
											  	Data Berhasil Disimpan.
											</div>";
											}else{
												echo "<script>alert('Silakan cek data Anda Kembali.');window.location='index.php'</script>";
											}	
										}else{
											echo "<script>alert('Silakan cek data Anda Kembali.');window.location='index.php'</script>";
										}
									}else{
										echo "<script>alert('Pastikan CAPTCHA telah terconteng.');window.location='index.php'</script>";
									}

									
								}
							}
						?>
						<form class="form-horizontal" action="" method="post">
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Bengkel Resmi Mitsubishi</label>
						    <div class="col-sm-9">
						    	<select class="form-control" name="bengkelResmi" value="<?php echo($bengkelResmi); ?>" required>
								  <option value="Medan, Sumut - PT. SARDANA INDAHBERLIAN MOTOR">Medan, Sumut - PT. SARDANA INDAHBERLIAN MOTOR</option>
								  <option value="Tg. Morawa, Sumut - PT. SARDANA INDAHBERLIAN MOTOR">Tg. Morawa, Sumut - PT. SARDANA INDAHBERLIAN MOTOR</option>
								  <option value="RantauPrapat, Sumut - PT. SARDANA INDAHBERLIAN MOTOR">RantauPrapat, Sumut - PT. SARDANA INDAHBERLIAN MOTOR</option>
								  <option value="Banda Aceh, NAD - PT. DARUSSALAM BERLIAN MOTOR">Banda Aceh, NAD - PT. DARUSSALAM BERLIAN MOTOR</option>
								  <option value="Banjar Baru, Kalsel - PT. BARITO BERLIAN MOTOR">Banjar Baru, Kalsel - PT. BARITO BERLIAN MOTOR</option>
								  <option value="Batulicin, Kalsel - PT. BARITO BERLIAN MOTOR">Batulicin, Kalsel - PT. BARITO BERLIAN MOTOR</option>
								</select>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Model kendaraan</label>
						    <div class="col-sm-9">
						    	<select class="form-control" name="modelKendaraan" value="<?php echo($modelKendaraan); ?>" required>
								  <option value="DELICA">DELICA</option>
								  <option value="MIRAGE">MIRAGE</option>
								  <option value="OUTLANDER SPORT">OUTLANDER SPORT</option>
								  <option value="PAJERO SPORT">PAJERO SPORT</option>
								  <option value="PAJERO SPORT RF">PAJERO SPORT ROCKFORD</option>
								  <option value="XPANDER">XPANDER</option>
								  <option value="T120SS">T120SS</option>
								  <option value="L300">L300</option>
								  <option value="TRITON">TRITON</option>
								</select>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Nama</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" name="nama" value="<?php echo($nama); ?>" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Nomor Hp</label>
						    <div class="col-sm-9">
						    	<input type="number" class="form-control" name="nomorHp" value="<?php echo($nomorHp); ?>" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Email</label>
						    <div class="col-sm-9">
						    	<input type="email" class="form-control" name="email" value="<?php echo($email); ?>" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Nomor Polisi</label>
						    <div class="col-sm-9">
						    	<input type="text" class="form-control" name="nomorPolisi" value="<?php echo($nomorPolisi); ?>" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Divisi</label>
						    <div class="col-sm-9">
						    	<label class="checkbox-inline">
								  <input type="checkbox" name="divisi[]" value="Sales" <?=(in_array("Sales", $divisi))?'checked':""; ?>> Sales
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" name="divisi[]" value="Service" <?=(in_array("Service", $divisi))?'checked':""; ?>> Service
								</label>
								<label class="checkbox-inline">
								  <input type="checkbox" name="divisi[]" value="Sparepart" <?=(in_array("Sparepart", $divisi))?'checked':""; ?>> Sparepart
								</label>
						    </div>
						  </div>
						  <div class="form-group">
						    <label class="col-sm-3 control-label">Keluhan / Saran</label>
						    <div class="col-sm-9">
						    	<textarea rows="5" class="form-control" name="keluhan" required><?php echo($keluhan); ?></textarea>
						    </div>
						  </div>
						  <div class="form-group">
						  	<div class="col-sm-3"></div>
						  	<div class="col-sm-9">
								<div class="g-recaptcha" data-sitekey="6LeMjiETAAAAAIttDjDycVZLiShz2S27KdjuBLL9"></div>
							</div>
						  </div>
						  <div class="form-group">
						    <div class="col-sm-offset-3 col-sm-9">
						      <input class="btn btn-success" type="submit" name="kirim" value="Kirim">
						    </div>
						  </div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- =========================
   REGISTER SECTION   
============================== -->
<section id="register" class="parallax-section">
	<div class="container">
		<div class="row">
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.2s">
				<h2>Newsletter</h2>
				<p>Dapatkan update terbaru mengenai informasi produk dan promosi langsung di email anda. </p>
				<form class="form-inline" method="post" action="../newsletter/input.php">
				  <div class="form-group">
				    <input type="email" class="form-control" name="email" id="exampleInputEmail2" placeholder="Email Address" required>
				  </div>
				  <button type="submit" class="btn btn-success">Kirim</button>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- =========================
    FOOTER SECTION   
============================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp" data-wow-delay="0.6s">Copyright &copy; 2018 <a href="www.sardanagriup.co.id">www.sardanagroup.co.id</a>. All rights reserved. 
                    
				<ul class="social-icon">
					<li><a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a></li>
					<li><a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a></li>
					<li><a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a></li>
					<li><a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a></li>
					<li><a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a></li>
				</ul>

			</div>
			
		</div>
	</div>
</footer>


<!-- Back top -->
<a data-toggle="modal" data-target="#myModal" class="go-top">Konsultasi Pembelian</a>


<!-- =========================
    MODAL
============================== -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Konsultasi Pembelian</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="hubungiSaya/input.php">
		  <div class="form-group">
		    <label>Nama Lengkap</label>
		    <input type="text" class="form-control" name="namaLengkap" placeholder="Nama Lengkap" required>
		  </div>
		  <div class="form-group">
		    <label>Nomor Handphone</label>
		    <input type="number" class="form-control" name="hp" placeholder="Nomor Handphone" required>
		  </div>
		  <div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control" name="email" placeholder="Email" required>
		  </div>
		  <div class="form-group">
		    <label>Jenis Kelamin</label>
		    <select class="form-control" name="jenisKelamin" required>
			  <option value="Laki-laki">Laki-laki</option>
			  <option value="Perempuan">Perempuan</option>
			</select>
		  </div>
		  <div class="form-group">
		    <label>Pekerjaan</label>
		    <select class="form-control" name="pekerjaan" required>
			  <option value="Karyawan">Karyawan</option>
			  <option value="Pegawai Negeri">Pegawai Negeri</option>
			  <option value="TNI atau POLISI">TNI atau Polisi</option>
			  <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
			  <option value="Wiraswasta">Wiraswasta</option>
			  <option value="Profesional">Profesional</option>
			  <option value="Pelajar atau mahasiswa">Pelajar / mahasiswa</option>
			  <option value="lainnya">Lainnya</option>
			</select>
		  </div>
		  <div class="form-group">
		    <label>Pilih Mobil</label>
		    <select class="form-control" name="jenisMobil" required>
			  <option value="DELICA">DELICA</option>
			  <option value="MIRAGE">MIRAGE</option>
			  <option value="OUTLANDER SPORT">OUTLANDER SPORT</option>
			  <option value="PAJERO SPORT">PAJERO SPORT</option>
			  <option value="PAJERO SPORT RF">PAJERO SPORT ROCKFORD</option>
			  <option value="XPANDER">XPANDER</option>
			  <option value="T120SS">T120SS</option>
			  <option value="L300">L300</option>
			  <option value="TRITON">TRITON</option>
			</select>
		  </div>
		  <div class="form-group">
		    <label>Pertanyaan</label>
		    <textarea class="form-control" rows="3" name="pertanyaan"></textarea>
		  </div>
		  <div class="form-group">
			<div class="g-recaptcha" data-sitekey="6LeMjiETAAAAAIttDjDycVZLiShz2S27KdjuBLL9"></div>
		  </div>
		  <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
	        <button type="submit" class="btn btn-primary">Kirim</button>
	      </div>
		</form>
      </div>
    </div>
  </div>
</div>


<!-- =========================
     SCRIPTS   
============================== -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.parallax.js"></script>
<script src="../js/owl.carousel.min.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/wow.min.js"></script>
<script src="../js/custom.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

</body>
</html>