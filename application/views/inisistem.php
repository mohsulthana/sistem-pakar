<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
    <title>Sistem Pakar Diagnosa Penyakit Typhoid</title>

    <!-- meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

    <!-- css -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/main.css">

    <!-- google font -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Kreon:300,400,700'>
    
    <!-- js -->
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="120" >
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
                <a class="navbar-brand" href="#"><h2>Sistem Pakar</h2></a>
            </div><!-- navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
            <div class="hidden-xs" id="logo"><a href="<?= base_url(); ?>index.php/home">
                <img src="<?= base_url(); ?>assets/img/logo.png" alt="">
            </a></div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= base_url(); ?>index.php/home/diagnosa/">Konsultasi</a></li>
                <li><a href="#story">Panduan</a></li>
                
                <li><a href="#chefs">Informasi</a></li>
                <li><a href="<?= base_url(); ?>index.php/login/">Login</a></li>
                
                <!--fix for scroll spy active menu element-->
                <li style="display:none;"><a href="#header"></a></li>

            </ul>
        </div><!--/.navbar-collapse -->
        </div><!-- container -->
    </div><!-- menu -->

    <div id="header">
        <div class="bg-overlay"></div>
        <div class="center text-center">
            <div class="banner">
                <h1 class="">Sistem Pakar</h1>
            </div>
            <div class="subtitle"><h4>Diagnosa Penyakit Typhoid dengan Metode Forward Chaining</h4></div>
        </div>
        <div class="bottom text-center">
            <a id="scrollDownArrow" href="#"><i class="fa fa-chevron-down"></i></a>
        </div>
    </div>
    <!-- /#header -->

    <div id="story" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Cara Penggunaan Sistem</h2>
            <p class="lead main text-center">Hanya Terdapat 3 tahapan untuk untuk user mendiagnosa</p>
            <div class="row text-center story">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-file"></i> </div>
                        <h3>Input Data</h3>
                        <p>Pertama, input Data Diri yang berada di featured Diagnosa, dan isikan data diri sesuai dan jawab pertanyaan yang sistem tampilkan.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa  fa-medkit"></i> </div>
                        <h3>Diagnosa</h3>
                        <p>Kedua, dilakukan pelacakan oleh sistem dari data yang sudah dimasukkan.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-stethoscope"></i> </div>
                        <h3>Hasil Diagnosa</h3>
                        <p> Ketiga, menampilkan hasil diagnosa penyakit dan solusi.</p>
                    </div>
                </div>
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #story -->


    <div id="facts" class="parallax parallax2 facts">
        <div class="container inner">
            <div class="row text-center services-3">
                <div class="col-sm-3">
                    <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-stethoscope"></i> </div>
                    <h4>Typhoid</h4>
                    <p><h5>Tipes alias demam tifoid adalah penyakit akut yang disebabkan oleh bakteri Salmonella thyphi atau Salmonella paratyphi. Bakteri ini biasanya ditemukan di air atau makanan yang terkontaminasi. Selain itu, bakteri ini juga bisa ditularkan dari orang yang terinfeksi.</h5></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-heartbeat"></i> </div>
                    <h4>DBD</h4>
                    <p><h5>Demam berdarah dengue atau biasa disingkat DBD adalah penyakit menular akibat virus yang dibawa oleh nyamuk Aedes aegypti. Penyakit ini disebabkan oleh salah satu dari empat virus dengue.</h5></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-stethoscope"></i> </div>
                    <h4>Gastroentritis</h4>
                    <p><h5>Gastroenteritis adalah peradangan pada lapisan usus yang biasanya disebabkan infeksi. Beberapa orang juga sering menyebut gastroenteritis sebagai flu perut. Sebagian besar infeksi disebabkan oleh virus, tapi bisa juga disebabkan oleh bakteri atau parasit.</h5></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-heartbeat"></i> </div>
                    <h4>Dipsepsi</h4>
                    <p><h5>Maag (Dipsepsi) adalah kondisi yang biasanya digunakan untuk menggambarkan berbagai keluhan karena gangguan pencernaan. Dengan kata lain, istilah maag sebenarnya tidak ada dalam kamus medis, alias bukanlah suatu penyakit khusus.</h5></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container --> 
    </div><!-- #facts -->


    <div id="chefs" class="light-wrapper">
        <section class="ss-style-top"></section>
            <div class="container inner">
                <div class="row">
                    <h2 class="section-title text-center">Dokter  Kita</h2>
                    <p class="lead main text-center">Rumah Sakit Umum Daerah Abdul Moeloek Bandar Lampung</p>
                    
                    <div class="row text-center chefs">
                        <div class="col-sm-4">
                            <div class="col-wrapper">
                                <div class="icon-wrapper">
                                    <img src="<?= base_url(); ?>assets/img/chefs/1.jpg">
                                </div>
                                <h3>Dr. Ricky Sp.Pd</h3>
                                <p>Sebagai Expert atau dokter spesialis penyakit dalam di Rumah Sakit Abdul Moeloek Bandar Lampung</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-wrapper">
                                <div class="icon-wrapper">
                                    <img src="<?= base_url(); ?>assets/img/chefs/5.jpg">
                                </div>
                                <h3>Akbar Wiranata</h3>
                                <p>Mahasiswa Fakultas Ilmu Komputer Universitas Sriwijaya yang mencoba mengembangkan Sistem Pakar sebagai Tugas Akhir untuk Strata-S1 </p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-wrapper">
                                <div class="icon-wrapper">
                                    <img src="<?= base_url(); ?>assets/img/chefs/2.jpg">
                                </div>
                                <h3>Dr. Ahmad Yusran Sp.Pd</h3>
                                <p>Dokter spesialis penyakit dalam yang memiliki pemahaman lebih terhadap penyakit typhoid di Rumah Sakit Abdul Moeloek Bandar Lampung</p>
                            </div>
                        </div>
                    </div>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        


    <footer id="footer" class="dark-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <div class="row">
                <div class="col-sm-6">
                    &copy; Copyright Akbar Wiranata
                    <br/>Fasilkom Universitas Sriwijaya</a>
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

    <script src="<?= base_url(); ?>assets/js/jquery-2.1.3.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.actual.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
</body>
</html>