<?php
  include '../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/animate.css">
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/owl.theme.css">
  <link rel="stylesheet" href="../css/owl.carousel.css">

  <!-- Main css -->
  <link rel="stylesheet" href="../css/style.css">

<script>
  function tampilkan(){
    var nama_kota=document.getElementById("form1").kategori.value;
    if (nama_kota=="OUTLANDER SPORT")
    {

      document.getElementById('tampil').disabled=false;
      <?php
        $tampil = "select * from hargamobil where merek = 'OUTLANDER SPORT'";
        $hasil = mysqli_query($koneksi,$tampil);
        $option = "";
        while($data = mysqli_fetch_row($hasil)){
          $option.="<option value=\"$data[2]\">$data[3]</option>";
        }
        echo"document.getElementById('tampil').innerHTML='$option'";
      ?>
        
    }
    else if (nama_kota=="minuman")
    {
      document.getElementById("tampil").innerHTML="<option value='Teh'>Teh</option><option value='Copy'>Copy</option>";
    }
    else if(nama_kota=="modelKendaraan")
    {
      document.getElementById('tampil').disabled=true;
    }
  }
</script>
</head>
<body>

<h2>Suckittrees.com</h2>
<form id="form1" name="form1" onsubmit="return false">
  <label>Pilih Kategori: </label>
  <select id="kategori" name="kategori" onchange="tampilkan()">
    <option value="modelKendaraan">Model Kendaraan</option>
    <option value="OUTLANDER SPORT">OUTLANDER SPORT</option>
    <option value="minuman">minuman</option>
  </select>
  <br/><br/>
   <label>Pilih Sub Kategori: </label> <select id="tampil" name="tampil" disabled="">
  </select>
</form>


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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
</body>
</html>
