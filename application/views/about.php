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
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>index.php/product/tambah/">Jual Barang</a>
          </li>
          <li class="nav-item active">
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
         <p>MyShop merupakan sebuah proyek situs E-commerce. Semua produk yang tertera disini hanyalah fiktif. Proyek ini hanya memberikan gambaran seperti apa penerapan dunia nyata dari Situs Web E-Commerce.</p>
        </div>

      
    
    </div>
  </div>



  
</body>
</html>