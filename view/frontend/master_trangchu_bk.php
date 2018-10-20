<!DOCTYPE html>
<html lang="fr">
<head>
<!-- Site meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Ecommerce</title>
<!-- CSS -->
<link href="public/frontend/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="public/frontend/css/fontawesome-all.min.css">
<link href="public/frontend/css/css.css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
<link href="public/frontend/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-info">
  <div class="container"> <a class="navbar-brand" href="index.html">Simple Ecommerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
      <ul class="navbar-nav m-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
        <li class="nav-item active"> <a class="nav-link" href="index.php?controller=cart">Cart</a> </li>
        <li class="nav-item active"> <a class="nav-link" href="contact.html">Contact</a> </li>
      </ul>
      <script type="text/javascript">
        function search()
        {var key=document.getElementById("key").value;
//di chuyen den trang tim kiem
location.href="index.php?controller=search&key="+key;
      }
      </script>
      <form class="form-inline my-2 my-lg-0">
        <div class="input-group input-group-sm">
          <input type="text" id="key" class="form-control" placeholder="Search...">
          <div class="input-group-append">
            <button type="button" onclick="search()" class="btn btn-secondary btn-number"> <i class="fa fa-search"></i> </button>
          </div>
        </div>
        <a class="btn btn-success btn-sm ml-3" href="index.php?controller=cart"> <i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-light"><?php echo isset($_SESSION["cart"])?count($_SESSION["cart"]):0; ?></span> </a>
      </form>
    </div>
  </div>
</nav>
<div class="container" style="margin-top: 15px;">
  <div class="row"> 
    <!-- category -->
    <div class="col-12 col-md-3">
     <?php include "controller/frontend/controller_inc_category.php"; ?>
     
    </div>
    <!-- end category --> 
    <!-- slide -->
    <div class="col">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active"> <img class="d-block w-100" src="public/frontend/images/chicago.jpg" alt="First slide"> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="public/frontend/images/la.jpg" alt="Second slide"> </div>
          <div class="carousel-item"> <img class="d-block w-100" src="public/frontend/images/ny.jpg" alt="Third slide"> </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
    </div>
    <!-- end slide --> 
  </div>
</div>

<?php include "controller/frontend/controller_lates_product.php"; ?>
<?php include "controller/frontend/controller_hot_product.php"; ?>
