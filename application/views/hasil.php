<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
  <title>Sistem Pakar Diagnosa Penyakit Typhoid</title>

  <!-- meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport"
    content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

  <!-- css -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/wizard.css">
  <script src="<?= base_url(); ?>assets/js/jquery-2.1.3.min.js"></script>

  <!-- google font -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>

  <!-- js -->
  <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="120">
  <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header visible-xs">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
          <h2>Sistem Pakar</h2>
        </a>
      </div><!-- navbar-header -->
      <div id="navbar" class="navbar-collapse collapse">
        <div class="hidden-xs" id="logo"><a href="<?= base_url(); ?>index.php/home">
            <img src="<?= base_url(); ?>assets/img/logo.png" alt="">
          </a></div>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?= base_url(); ?>index.php/home/diagnosa/">Konsultasi</a></li>
          <li><a href="#story">Panduan</a></li>

          <li><a href="#chefs">Tentang</a></li>
          <li><a href="<?= base_url(); ?>index.php/login/">Login</a></li>

          <!--fix for scroll spy active menu element-->
          <li style="display:none;"><a href="#header"></a></li>

        </ul>
      </div>
      <!--/.navbar-collapse -->
    </div><!-- container -->
  </div><!-- menu -->

  <div id="header">
    <div class="bg-overlay"></div>
    <div class="center text-center">
      <div class="banner">
        <h1 class="">Sistem Pakar</h1>
      </div>
      <div class="subtitle">
        <h4>Diagnosa Penyakit Typhoid dengan Metode Forward Chaining</h4>
      </div>
    </div>
    <div class="bottom text-center">
      <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
    </div>
  </div>
  <!-- /#header -->

  <div id="story" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h1 class="m-0 font-weight-bold text-primary">
            <center>Hasil diagnosa</center>
          </h1>
        </div>
        <div class="card-body">
          <div class="center">
            <table class="table">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th><?= $identitas['nama']; ?></th>
                </tr>
                <tr>
                  <th>Umur</th>
                  <th><?= $identitas['umur']; ?> tahun</th>
                </tr>
                <tr>
                  <th>Alamat</th>
                  <th><?= $identitas['alamat']; ?></th>
                </tr>
                <tr>
                  <th>Diagnosa</th>
                  <th><?= $hasil; ?></th>
                </tr>
              </thead>
            </table>
            <h4>Gejala</h4>
            <?php foreach($gejala as $key => $value) {?>
              <p><?= $value; ?></p>
            <?php } ?>
            <hr>
            <h2>Informasi diagnosa dan solusi:</h2>
            <h3><?= $hasil; ?></h3>
            <h5>Solusi: <?= $info_penyakit->solusi; ?></h5>
            <h5>Obat: <?= $info_penyakit->obat; ?></h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- /.container -->
  <footer id="footer" class="dark-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
      <div class="row">
        <div class="col-sm-6">
          &copy; Copyright Akbar Wiranata
          <br />Fasilkom Universitas Sriwijaya</a>
        </div>
        <div class="col-sm-6">
          <div class="social-bar">
            <a href="#" class="fa fa-instagram tooltipped" title=""></a>
            <a href="#" class="fa fa-youtube-square tooltipped" title=""></a>
            <a href="#" class="fa fa-facebook-square tooltipped" title=""></a>
            <a href="#" class="fa fa-pinterest-square tooltipped" title=""></a>
            <a href="#" class="fa fa-google-plus-square tooltipped" title=""></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </footer>

  <script src="<?= base_url(); ?>assets/js/jquery.actual.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/main.js"></script>
  <script src="<?= base_url(); ?>assets/js/wizard.js"></script>
</body>

</html>