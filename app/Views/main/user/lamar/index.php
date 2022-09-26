<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Form Lamar</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url('assets/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="https://use.fontawesome.com/55fc809dd9.js"></script>

  <!-- Custom styles for this template-->
  <link href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>

</head>

<body id="page-top">
  <!--menambah nama pada kolom inputan file -->
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <?= $this->include('main/user/lamar/sidebarlamar') ?>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <?= $this->include('main/template/navbar') ?>
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <div class="card">
            <div class="card-header">
              <?= $title; ?>
            </div>
            <div class="row">
              <div class="col-xl-12 mb-3">

                <!-- form -->

                <form action="save" method="post" enctype="multipart/form-data">
                  <?= csrf_field(); ?>
                  <?php if (!empty(session()->getFlashdata('berhasil'))) { ?>
                    <div class="alert alert-success">
                      <?php echo session()->getFlashdata('berhasil'); ?>
                    </div>
                  <?php } ?>
                  <div class="form-group my-3">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" name="nama" value="<?= old('nama'); ?>">
                    <div class="invalid-feedback">
                      <?= $validation->getError('nama'); ?>
                    </div>
                  </div>

                  <div class="form-file">
                    <input type="file" class="form-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto">
                    <div class="invalid-feedback">
                      <?= $validation->getError('foto'); ?>
                    </div>
                    <label class="form-file-label" for="foto">
                      <span class="form-file-text">Masukan Image...</span>
                      <span class="form-file-button">Browse</span>
                    </label>
                  </div>

                  <div class="form-file">
                    <input type="file" class="form-file-input <?= ($validation->hasError('cv')) ? 'is-invalid' : ''; ?>" id="cv" name="cv">
                    <div class="invalid-feedback">
                      <?= $validation->getError('cv'); ?>
                    </div>
                    <label class="form-file-label" for="cv">
                      <span class="form-file-text">Masukan CV...</span>
                      <span class="form-file-button">Browse</span>
                    </label>
                  </div>

                  <div class="form-file">
                    <input type="file" class="form-file-input <?= ($validation->hasError('surat_lamaran')) ? 'is-invalid' : ''; ?>" id="surat_lamaran" name="surat_lamaran">
                    <div class="invalid-feedback">
                      <?= $validation->getError('surat_lamaran'); ?>
                    </div>
                    <label class="form-file-label" for="surat_lamaran">
                      <span class="form-file-text">Masukan Surat Lamaran...</span>
                      <span class="form-file-button">Browse</span>
                    </label>
                  </div>

                  <button type="submit" class="btn btn-primary">Save</button>
                </form>


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
            <span>Copyright &copy; syarif soden <?= Date('Y') ?> </span>
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
          <a class="btn btn-primary" href="logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
</body>

</html>