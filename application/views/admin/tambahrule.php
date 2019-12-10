<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Pakar Diagnosa Penyakit Typhoid - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url();?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url();?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'siderbar.php' ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
       <?php include 'topbar.php' ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data Gejala</h1>
            
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Form Data Gejala</h6>
              
            </div>
            <div class="card-body">
              <form class="form-horizontal form-bordered" method="get">
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="inputSuccess">Nama Penyakit</label>
                                                <div class="col-md-6">
                                                    <select class="form-control mb-md">
                                                        <option>Penyakit Typhoid</option>
                                                        <option>Demam Berdarah Dengue</option>
                                                        <option>Gastroentritis</option>
                                                        <option>Dispepsi</option>
                                                        <option>Demam</option>
                                                    </select>
                                                </div>
                                            </div>
                        
                                            <div class="form-group" >
                                                <label class="col-md-3 control-label">Gejala</label>
                                                <div class="col-sm-8" id="input_fields_wrap">
                                                    <div class="row" >
                                                        <div class="col-sm-6">
                                                            <select class="form-control mb-md">
                                                              <option>Apakah Demam Tinggi?</option>
                                                              <option>Apakah Merasakan Sakit Kepala?</option>
                                                              <option>Apakah Merasakan Nyeri Perut?</option>
                                                              <option>Apakah Terjadi Diare beberapa Terakhir?</option>
                                                              <option>Apakah Merasakan Mual?</option>
                                                              <option>Merasakan Muntah Muntah?</option>
                                                              <option>Apakah Nafsu Makan Menurun?</option>
                                                              <option>Apakah Merasakan Lemah, Letih, Lesu?</option>
                                                              <option>Terjadi Ruam Ruam Pada Bagian Tubuh?</option>
                                                              <option>Merasakan nyeri Otot dan Persendian?</option>
                                                              <option>Apakah merasakan Nyeri Pada Bagian Belakang Mata?</option>
                                                            </select>
                                                        </div>
                                                        <div class="visible-xs mb-md"></div>
                                                        <div class="col-sm-2">
                                                            <button class="btn btn-primary" id="add_field_button">add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <footer class="panel-footer">
                                            <div class="center">
                                                <div class="col-sm-9 col-sm-offset-4">
                                                    <button class="btn btn-primary">Submit</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </div>
                                            </div>
                                        </footer>
                                    </form> 
            </div>
          </div>
            
              


            
          </div>

        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Sistem Pakar Diagnosa Penyakit Typhoid 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>assets/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="<?= base_url(); ?>assets/admin/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url(); ?>assets/admin/js/demo/chart-area-demo.js"></script>
  <script src="<?= base_url(); ?>assets/admin/js/demo/chart-pie-demo.js"></script>
  <script src="<?= base_url(); ?>assets/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url(); ?>assets/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="<?= base_url(); ?>assets/admin/js/demo/datatables-demo.js"></script>

  <script>
        $(document).ready(function() {
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $("#input_fields_wrap"); //Fields wrapper
            var add_button      = $("#add_field_button"); //Add button ID
            
            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    $(wrapper).append('<div class="row" style="margin-top:10px"><div class="col-sm-6">'+
                                           '<input type="text" class="form-control" placeholder="Gejala">'+
                                       '</div>'+
                                       
                                       '<div class="col-sm-4">'+
                                       '</div><a href="#" class="remove_field">Remove</a>'); //add input box
                }
            });
            
            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).parent('div').remove(); x--;
            })
        });
</script>

</body>

</html>
