<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/logo/sardana.png" type="image/ico" />

    <title>PT. Sardana Indah Berlian Motor</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="../build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img class="img-responsive" src="images/logo/sardana.png"><span>CMS</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/user/user_icon.png" alt="..." class="imgLogo">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>IT</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>TEMPLATE : NAMA TEMPLATE</h3><? include "adsfasdf." ?>
                <ul class="nav side-menu">
                  <li>
                    <a href="index.php">
                      <i class="fa fa-list"></i> Booking Service
                    </a>
                  </li>
                  <li>
                    <a href="suaraPelanggan.php">
                      <i class="fa fa-commenting"></i> Suara Pelanggan
                    </a>
                  </li>
                  <li><a><i class="fa fa-newspaper-o"></i> News<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="createNews.php">Create</a></li>
                      <li><a href="editNews.php">Edit / Delete</a></li>
                    </ul>
                  </li>
                  <li>
                    <a><i class="fa fa-share-square-o"></i> Newsletter<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="daftarEmailNewsletter.php">Daftar Email</a></li>
                      <li><a href="broadcastNewsletter.php">Broadcast</a></li>
                    </ul>
                  </li>
                  <li>
                    <a href="hubungiSaya.php">
                      <i class="fa fa-clone"></i> Hubungi Saya
                    </a>
                  </li> 
              </div>
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-wrench"></i> User Accounts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="otoritas.php">Otoritas</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="simbol"><a href="login.html"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Log Off</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->  

        
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">  

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create News</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <form method="post" action="" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Masukkan Judul" required>
                      </div>
                      <div class="form-group">
                        <label>Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="form-control" name="keterangan" rows="5" required></textarea>
                      </div>
                      <div class="form-group">
                        <label>Upload Gambar</label>
                        <input type="file" name="image">
                      </div>
                      <input type="submit" class="btn btn-success" name="simpan" value="Simpan">
                    </form>
                    <?php
                      include "../../koneksi.php";
                      if (isset($_POST['simpan'])){
                        $tanggal=$_POST['tanggal'];
                        $judul =  mysql_real_escape_string($_POST['judul']);
                        $keterangan = mysql_real_escape_string($_POST['keterangan']);
                        $fileName = $_FILES['image']['name'];

                        $sql = "insert into news Values (NULL, '$tanggal', '$judul', '$keterangan' ,'$fileName')";
                        mysqli_query($koneksi, $sql);

                        move_uploaded_file($_FILES['image']['tmp_name'], "images/news/".$_FILES['image']['name']);
                        echo"<script>alert('News Berhasil diupload !');window.location = 'createNews.php'</script>";
                      }

                    ?>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            PT. SARDANA INDAH BERLIAN MOTOR
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  
  </body>
</html>
