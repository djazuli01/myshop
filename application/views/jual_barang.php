<!DOCTYPE html>
<html>
<head>
  <title>MyShop || Jual Barang</title>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">

</head>
<body>

 <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url() ?>index.php">MyShop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url() ?>index.php/product/tambah/">Jual Barang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/product/about"); ?>">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/product/contact"); ?>">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container" style="margin-top: 80px">
    <div class="col-md-12">
      <?php echo form_open('product/tambah', array('enctype'=>'multipart/form-data')); ?>
        
        <div class="form-group">
          <label for="text">Nama Barang</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Barang">
        </div>

        <div class="form-group">
          <label for="text">Harga</label>
          <input type="text" name="harga" class="form-control" placeholder="Masukan Harga Barang">
        </div>


       <div class="form-group">
        <label for="text">Gambar</label><br/>
    <input type="file" name="input_gambar"> 
        </div>

        <div class="form-group">
                <label for="name">Deskripsi</label>
                <textarea class="form-control"
                 name="deskripsi" placeholder="Masukkan deskripsi produk"></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('description') ?>
                </div>
              </div>
      
        
        <button class="btn btn-md btn-success type="submit" name="submit" value="Simpan">Upload</button>
      <?php echo form_close() ?>
    
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
<script>
  $('#table').DataTable( {
    autoFill: true
} );
</script>
</body>
</html>