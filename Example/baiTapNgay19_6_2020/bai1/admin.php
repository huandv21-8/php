<?php
require_once('manage.php');


//delete product
$id = $tr = $sql = $s = '';
if (!empty($_GET)) {
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
  }

  $xoa = 'DELETE FROM product WHERE id =' . $id;
  insert_remove($xoa);
}

//select product
$productList[] = array();

$sql = "SELECT * FROM `product`";
$productList = select($sql);

foreach ($productList as $product) {
  $s .= '
  <div class="box-body" style="margin: 20px 20px 10px 10px ;border:1px solid red;">
    <h4 style="background-color:#f7f7f7; font-size: 18px; text-align: center; padding: 7px 10px; margin-top: 0;">
      '.$product['title'].'
    </h4>
    <div class="media">
      <div class="media-left">
        <a href="#" class="ad-click-event">
          <img src="' . $product['link'] . '" alt="Kero" class="media-object" style="width: 150px;height: auto;border-radius: 4px;box-shadow: 0 1px 3px rgba(0,0,0,.15);">
        </a>
      </div>
      <div class="media-body" style="margin-left: 20px;">
        <div class="clearfix">
          <p class="pull-right">
            <a href="#" onclick=\'window.open("admin.php?id='.$product['id'] .'","_self")\' class="btn btn-success btn-sm ad-click-event">
              Delete
            </a>
            <a href="#" onclick=\'window.open("insertProduct.php?id='.$product['id'] .'","_self")\' class="btn btn-success btn-sm ad-click-event">Edit</a>
          </p>
          <h4 style="margin-top: 0">' . $product['price'] . ' đ</h4>

          <p> Bootstrap 4 Admin Dashboard Template</p>
          <p style="margin-bottom: 0">
            <i class="fa fa-shopping-cart margin-r5">giam gia: </i> '.$product['percent'].'%
          </p>
        </div>
      </div>
    </div>
  </div>';
} ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <!-- Custom styles for this template -->
  <style type="text/css">
    body {
      padding-top: 56px;
    }
  </style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">ADMIN</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="welcome.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="insertProduct.php">Add product</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <?= $s ?>
    </div>
  </div>
  <!-- /.container -->
  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white" >quan ly dien thoai</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <!-- <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->


</body>

</html>