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
            <li class=" dropdown active">
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

    <div id="bodyku" class="container">

     <h2 class="text-center" style="text-decoration: underline;">SURAT PERSETUJUAN MEMPELAI</h2>
      <br>

      <form class="form-horizontal" method="post" action="form3.print.php">

        <h3>Data Suami</h3>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Nama lengkap dan alias</label>
          <div class="col-sm-7">
            <input name="namalengkapsuami" type="text" class="form-control" Placeholder="nama calon suami" id="email">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Bin/Binti</label>
          <div class="col-sm-6"> 
            <input name="namalengkapbin" type="text" class="form-control" Placeholder="nama orang tua calon suami" id="pwd">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Tempat tanggal lahir</label>
          <div class="col-sm-2"> 
            <input name="tempat lahir calon suami" placeholder="tempat lahir calon suami" type="text" class="form-control" id="pwd">
          </div>
          <div class="col-sm-1"> 
            <select name="tglayah" class="form-control" id="sel1">
              <?php for($i=1; $i<32; $i++): ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="col-sm-2"> 
            <select name="blnayah" class="form-control" id="sel1">
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
          </div>
          <div class="col-sm-2"> 
            <select name="thnayah" class="form-control" id="sel1">
              <?php for($i=1980; $i<=date('Y'); $i++): ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php endfor; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Warganegara</label>
          <div class="col-sm-6"> 
            <input name="negarasuami" type="text" class="form-control" Placeholder="negara calon suami" id="pwd">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Agama</label>
          <div class="col-sm-2"> 
            <select name="agamaayah" class="form-control" id="sel1">
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katholik">Katholik</option>
              <option value="Budha">Budha</option>
              <option value="Hindu">Hindu</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Pekerjaan</label>
          <div class="col-sm-6"> 
            <input value="<?php echo $qqsuami['pekerjaan'];?>" name="pekerjaansuami" type="text" class="form-control" Placeholder="pekerjaan calon suami" id="pwd">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Tempat tinggal</label>
          <div class="col-sm-5"> 
            <textarea name="alamatsuami" class="form-control" cols="" Placeholder="alamat calon suami" rows="5"><?php echo $qqsuami['alamat'];?></textarea>
          </div>
        </div>

        <hr>
        <h3>Data Istri</h3>

        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Nama lengkap dan alias</label>
          <div class="col-sm-7">
            <input name="namalengkapistri" type="text" class="form-control" Placeholder="nama calon istri" id="email">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Bin/Binti</label>
          <div class="col-sm-6"> 
            <input name="namalengkapbinti" type="text" class="form-control" Placeholder="nama orang tua calon istri" id="pwd">
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Tempat tanggal lahir</label>
          <div class="col-sm-2"> 
            <input name="tempat lahir calon istri" placeholder="tempat lahir calon istri" type="text" class="form-control" id="pwd">
          </div>
          <div class="col-sm-1"> 
            <select name="tglayah" class="form-control" id="sel1">
              <?php for($i=1; $i<32; $i++): ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php endfor; ?>
            </select>
          </div>
          <div class="col-sm-2"> 
            <select name="blnayah" class="form-control" id="sel1">
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
          </div>
          <div class="col-sm-2"> 
            <select name="thnayah" class="form-control" id="sel1">
              <?php for($i=1980; $i<=date('Y'); $i++): ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
              <?php endfor; ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Warganegara</label>
          <div class="col-sm-6"> 
            <input name="negaraistri" type="text" class="form-control" Placeholder="negara calon istri" id="pwd">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Agama</label>
          <div class="col-sm-2"> 
            <select name="agamaistri" class="form-control" id="sel1">
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katholik">Katholik</option>
              <option value="Budha">Budha</option>
              <option value="Hindu">Hindu</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Pekerjaan</label>
          <div class="col-sm-6"> 
            <input name="pekerjaanistri" type="text" class="form-control" Placeholder="pekerjaan calon istri" id="pwd">
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Tempat tinggal</label>
          <div class="col-sm-5"> 
            <textarea name="alamatistri" class="form-control" cols="" Placeholder="alamat calon istri" rows="5"></textarea>
          </div>
        </div>

        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <button name="btnsubmit" type="submit" class="btn btn-success">Submit</button>
            <button name="btnreset" type="reset" id="cmd" class="btn btn-danger">Reset</button>
            <a href="form4.php"><button name="btnprint" type="button" id="cmd" class="btn btn-primary">Next</button></a>
          </div>
        </div>
      </form>
        

    </div> <!-- /container -->


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
