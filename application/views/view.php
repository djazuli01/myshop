<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MyShop</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

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
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/product/tambah"); ?>">Jual Barang</a>
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

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h2 class="my-4">Kategori</h2>
        <div class="list-group">
          <a href="#" class="list-group-item">Elektronik</a>
          <a href="#" class="list-group-item">Fashion</a>
          <a href="#" class="list-group-item">Kesehatan</a>
          <a href="#" class="list-group-item">Makanan</a>
          <a href="#" class="list-group-item">Mainan & Hobi</a>
          <a href="#" class="list-group-item">Buku</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
            <img class="d-block img-fluid" src="application/views/images/tokopedia.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="application/views/images/bukalapak.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="application/views/images/shopee.png" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

          <div class="row">

           <?php
            
            foreach($produk as $data){ 
          ?>
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href=""><?php 
                 echo "<td><img src='".base_url("application/views/images/products/".$data->IMAGE)."' width='252' height='200'></td>";
                   ?>  </a>

              <div class="card-body">
                <h4 class="card-title">
                  <a href=""><?php 
                  echo "$data->NAMA"; ?></a>
                </h4>
                <h5>Rp<?php echo $data->HARGA ?></h5>
                <p class="card-text"><?php echo $data->DESKRIPSI ?></p>
              </div>
             <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
              </div>
            
          </div>
          

     <?php } ?>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; MyShop 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
