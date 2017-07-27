<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Welcome to KUA</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

   <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dist/navbar-fixed-top.css" rel="stylesheet">
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand"><img src="img/kua.PNG" class="img-responsive"  alt="Cinque Terre" width="40">
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
          	<li class="active"><a href="index.php">HOME</a></li>
          	<li><a href="#">ABOUT</a></li>
            <li><a href="#">CONTACT</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-list"></i> Formulir <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="form1.php">Surat Keterangan Menikah</a></li>
                <li><a href="form2.php">Surat Keterangan Asal Usul</a></li>
                <li><a href="form3.php">Surat Persetujuan Mempelai</a></li>
                <li><a href="form4.php">Surat Keterangan Orang Tua</a></li>
                <li><a href="form5.php">Surat Izin Orang Tua</a></li>
                <li><a href="form6.php">Surat Keterangan Kematian Suami/Istri</a></li>
              </ul>
            </li>
            <li><a href="form7.php"><i class="glyphicon glyphicon-th"></i> Dokumen Persyaratan</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- HEADER -->
    <div id="headerwrap" style="background: white">
	    <div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<img src="img/nikah.JPG" class="img-responsive" width="200"> 
			        <h2>Kantor Urusan Agama</h2>
			        <h2>Kabupaten Gresik</h2>
			        <p>Jl. KH Zubair 79 Pulopancikan Gresik <br> Kecamatan : Gresik <br> Kota : Gresik</p>
			        <a href="form1.php"><button type="button" id="submit" name="submit" class="btn btn-primary btn-lg" >Klik untuk mendaftar</button></a>
				</div>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /headerwrap -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/vendor/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
