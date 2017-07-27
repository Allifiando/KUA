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
          <a href="index.php" class="navbar-brand"><img src="img/kua.PNG" class="img-responsive" class="img img-rounded" alt="Cinque Terre" width="40">
        </div>
        <div id="navbar" class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="index.php">HOME</a></li>
            <li><a href="#">ABOUT</a></li>
            <li><a href="#">CONTACT</a></li>
            <li class=" dropdown">
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
            <li class="active"><a href="form7.php"><i class="glyphicon glyphicon-th"></i> Dokumen Persyaratan</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <h2 class="text-center" style="text-decoration: underline;">DOKUMEN PERSYARATAN</h2>
      <br>

        <form class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Nama lengkap dan alias</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" Placeholder="nama calon suami" id="email">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Nama lengkap dan alias</label>
          <div class="col-sm-7">
            <input type="text" class="form-control" Placeholder="nama calon istri" id="email">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Hari</label>
          <div class="col-sm-2"> 
            <select class="form-control" id="sel1">
              <option>Senin</option>
              <option>Selasa</option>
              <option>Rabu</option>
              <option>Kamis</option>
              <option>Jumat</option>
              <option>Sabtu</option>
              <option>Minggu</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Tanggal</label>
          <div class="col-sm-1"> 
            <select class="form-control" id="sel1">
              <?php for($i=1; $i<32; $i++): ?>
              <option><?php echo $i;?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="col-sm-2"> 
            <select class="form-control" id="sel1">
              <option>Januari</option>
              <option>Februari</option>
              <option>Maret</option>
              <option>April</option>
              <option>Mei</option>
              <option>Juni</option>
              <option>Juli</option>
              <option>Agustus</option>
              <option>September</option>
              <option>Oktober</option>
              <option>November</option>
              <option>Desember</option>
            </select>
          </div>
          <div class="col-sm-2"> 
            <select class="form-control" id="sel1">
              <?php for($i=2000; $i<=date('Y')+3; $i++): ?>
              <option><?php echo $i;?></option>
              <?php endfor; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Jam</label>
          <div class="col-sm-6"> 
            <input type="text" class="form-control" Placeholder="jam pernikahan" id="pwd">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Maskawin</label>
          <div class="col-sm-6"> 
            <input type="text" class="form-control" Placeholder="maskawin dibayar tunai/hutang" id="pwd">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Tempat</label>
          <div class="col-sm-6"> 
            <input type="text" class="form-control" Placeholder="tempat pernikahan" id="pwd">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">SK Nikah</label>
          <div class="col-sm-7">
            <input type="file" class="form-control" id="email">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">SK Asal Usul</label>
          <div class="col-sm-7">
            <input type="file" class="form-control" id="email">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">SP Mempelai</label>
          <div class="col-sm-7">
            <input type="file" class="form-control" id="email">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">SK Orang Tua</label>
          <div class="col-sm-7">
            <input type="file" class="form-control" id="email">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Surat Izin Orang Tua</label>
          <div class="col-sm-7">
            <input type="file" class="form-control" id="email">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">SK Kematian Suami/Istri</label>
          <div class="col-sm-7">
            <input type="file" class="form-control" id="email">
          </div>
        </div>
        
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <button name="btnsubmit" type="submit" class="btn btn-success">Submit</button>
            <button name="btnreset" type="reset" id="cmd" class="btn btn-danger">Reset</button>
            <button name="btnprint" type="button" id="cmd" class="btn btn-primary">Print</button>
          </div>
        </div>
      </form>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
