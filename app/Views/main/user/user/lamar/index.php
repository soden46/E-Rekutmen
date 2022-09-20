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
            <span>Copyright &copy; E Recruitment <?= Date('Y') ?> </span>
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

  <script>
    // document.querySelector('.custom-file-input').addEventListener('change', function (e) {
    // var name = document.getElementById("foto").files[0].name;
    // var nextSibling = e.target.nextElementSibling
    // nextSibling.innerText = name
    // })
    // document.querySelector('.custom-file-input-1').addEventListener('change', function (e) {
    // var name1 = document.getElementById("cv").files[0].name;
    // var nextSibling1 = e.target.nextElementSibling
    // nextSibling1.innerText = name1
    // })
    // document.querySelector('.custom-file-input-2').addEventListener('change', function (e) {
    // var name2 = document.getElementById("surat_lamaran").files[0].name;
    // var nextSibling2 = e.target.nextElementSibling
    // nextSibling2.innerText = name2
    // })

    // function onFileUpload(input, id) {
    //         id = id || '#ajaxImgUpload';
    //         if (input.files && input.files[0]) {
    //             var reader = new FileReader();
    //             reader.onload = function (e) {
    //                 $(id).attr('src', e.target.result).width(300)
    //             };
    //             reader.readAsDataURL(input.files[0]);
    //         }
    //     }
    //   $(document).on('click','#save',function(e){
    //         e.preventDefault();
    //         var data_foto = $('#foto').prop('files')[0];
    //         var data_cv = $('#cv').prop('files')[0];
    //         var data_surat = $('#surat_lamaran').prop('files')[0];
    //         var form_data = new FormData();

    //         form_data.append('foto', data_foto, data_cv, data_surat);
    //         $.ajax({
    //             url: ', // point to server-side PHP script
    //             dataType: 'json',  // what to expect back from the PHP script, if anything
    //             cache: false,
    //             contentType: false,
    //             processData: false,
    //             data: form_data,
    //             type: 'post',
    //             success: function(data,status){
    //                 //alert(php_script_response); // display response from the PHP script, if any
    //                 if (data.status!='error') {
    //                     $('#foto').val('');
    //                     $('#cv').val('');
    //                     $('#surat_lamaran').val('');
    //                     alert(data.msg);
    //                 }else{
    //                     alert(data.msg);
    //                 }
    //             }
    //         });
    //     })

    // $("#formLamaran").submit(function(event) {
    //             $.ajax({
    //                 url: <?= base_url("save") ?>, // Url to which the request is send
    //                 type: "POST", // Type of request to be send, called as method
    //                 data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
    //                 contentType: false, // The content type used when sending data to the server.
    //                 cache: false, // To unable request pages to be cached
    //                 processData: false, // To send DOMDocument or non processed data file it is set to false
    //                 success: function(data) // A function to be called if request succeeds
    //                     {
    //                         alert("Data Loaded: " + data);
    //                     }
    //             });
    //         });
  </script>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
  <!-- Core plugin JavaScript-->
  <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
  <!-- Custom scripts for all pages-->
  <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
</body>

</html>