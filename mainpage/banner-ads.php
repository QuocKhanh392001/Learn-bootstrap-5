<div class="container py-4">
   <div class="row">
      <div class=" col-sm-8">
         <div id="demo" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators/dots -->
            <div class="carousel-indicators">
               <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
               <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
               <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>
            <!-- The slideshow/carousel -->
            <div class="banner-right-ads carousel-inner" style="height:275px">
               <div class="carousel-item active">
                  <img src="picture/ads.jpg" alt="Los Angeles" class="d-block" style="width:100%;height:100%;object-fit: cover">
               </div>
               <div class="carousel-item">
                  <img src="picture/ads2.png" alt="Chicago" class="d-block" style="width:100%;height:100%;object-fit: cover">
               </div>
               <div class="carousel-item">
                  <img src="picture/ads.jpg" alt="New York" class="d-block" style="width:100%;height:100%;object-fit: cover">
               </div>
            </div>
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            </button>
         </div>
      </div>
      <div class="col-sm-4 d-flex flex-column justify-content-between">
         <div class="d-block">
            <img src="picture/rightads2.png" style="width: 100%;height: auto;object-fit: cover;" alt="">
         </div>
         <div class="d-block">
            <img src="picture/rightads2.png" style="width: 100%;height: auto;object-fit: cover;" alt="">
         </div>
      </div>

   </div>
   <div class="row mt-3">
      <?php
         $sql_product ="SELECT * FROM danhmucsanpham";
         $query_product = mysqli_query($mysqli,$sql_product);
         while($row_title = mysqli_fetch_array($query_product)){
      ?>
      <div class="col-sm-2 h-100"> 
         <a class="text-decoration-none" href="index.php?danhmuc=<?php echo $row_title['id_danhmuc'] ?>"> 
            <div class="category">
               <div class="w-100">
                  <img src="./picture/<?php echo $row_title['icon_danhmuc'] ?>" alt="">
               </div>
               <p class="text-center fw-bold color-special-text">
                  <?php echo $row_title['tendanhmuc'] ?>
               </p>
            </div>
         
         </a>
      
      </div>
      <?php
         }
      ?>
      
   </div>
</div>