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
            <h1 class="h3 mb-0 text-gray-800">Data Penyakit</h1>
            <a href="<?= base_url(); ?>admin/tambahpenyakit" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Penyakit</a>
          </div>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Data Penyakit</h6>
              
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama Penyakit</th>
                      <th>Solusi</th>
                      <th>Obat</th>
                      <th>Edit Data</th>
                      <th>Hapus Data</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Kode</th>
                      <th>Nama Penyakit</th>
                      <th>Solusi</th>
                      <th>Obat</th>
                      <th>Edit Data</th>
                      <th>Hapus Data</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach($penyakit as $p){ 
                      ?>
                      <tr>
                        <td><?php echo $no++ ?></td>  
                        <td><?php echo $p->id_penyakit ?></td>
                        <td><?php echo $p->nama_penyakit ?></td>
                        <td><?php echo $p->solusi ?></td>
                        <td><?php echo $p->obat ?></td>
                        <td>
                              <?php echo anchor('admin/editpenyakit/'.$p->id_penyakit,'Edit'); ?>
                              
                        </td>
                        <td>
                              <?php echo anchor('admin/hapuspenyakit/'.$p->id_penyakit,'Hapus'); ?>
                                
                        </td>
                      </tr>
                      <?php } ?>
                  </tbody>
                </table>
              </div>
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

</body>

</html>
