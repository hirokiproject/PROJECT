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



<!-- =========================
    Kumpulan Berita
============================== -->
<section id="kumpulan" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12 wow bounceIn">
				<div class="judulHalaman">
					<h2>Berita</h2>
				</div>
			</div>

			<!-- Testimonial Owl Carousel section
			================================================== -->
			<div class="wow fadeInUp col-md-12 col-sm-12" data-wow-delay="0.3s">
				<div class="row">
					<div class="kumpulanBerita">
						<?php
                          include '../koneksi.php';
                          $tampil = "select * from news order by tanggal DESC";
                          $hasil = mysqli_query($koneksi,$tampil);
                          while($data = mysqli_fetch_array($hasil)){
						  $kalimat = $data[3];
						  $sub_kalimat = substr($kalimat,0,200);
                            echo "
                            <div class='col-sm-4 col-md-4'>
								<div class='thumbnail'>
									<img src='../HP/production/images/news/$data[4]' alt='news01'>
									<div class='caption'>
										<div class='tanggalNews'>
											<span class='glyphicon glyphicon-calendar' aria-hidden='true'>&nbsp;$data[1]</span>
										</div><br>
										<h4>$data[2]</h4>
										<p>
											$sub_kalimat...
										</p>
										<p>
											<form action='rincianBerita.php' method='get'>
												<input type='hidden' class='form-control' name='id' value='$data[0]'>
												<button type='submit' class='btn btn-success'>Read More</button>
											</form>
										</p>
									</div>
								</div>
							</div>
                          ";}
                        ?>
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