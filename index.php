<?php
  include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopPage</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <?php
    include("mainpage/menu.php");
    include("mainpage/banner-ads.php");

    if (isset($_GET['danhmuc'])) {
      if ($_GET['danhmuc'] == 1) {
        include("mainpage/product-list-laptop.php");
      }
      elseif ($_GET['danhmuc'] == 2) {
        include("mainpage/product-list-monitor.php");
      }
      else{
        include("mainpage/all_product.php");
      }
    }
    else{
      include("mainpage/all_product.php");
    };
    
    

  ?>
  </body>

</html>