<?php
$sql_trang =mysqli_query($mysqli, "SELECT * FROM product WHERE iddanhmuc = 1");
$row_counts = mysqli_num_rows($sql_trang);
 $trang = ceil($row_counts / 4);
if (isset($_GET['trang'])) {
   $page = $_GET['trang'];
}
else{
   $page = '';
}
if ($page == '' || $page == 1) {
   $begin = 0;
}
else {
   $begin = ($page * 4) - 4;
}

    $sql_product ="SELECT * FROM product WHERE iddanhmuc = 1 LIMIT $begin,4";
    $query_product = mysqli_query($mysqli,$sql_product);
   

?>

<div class="d-block color-second-background pt-3">
   <div class="container">
      <div class="d-block text-center color-white-background banner-product py-3">
         <div class="display-6 color-special-text">
            Laptop
         </div>
      </div>
      <div class="row mt-3">
        <?php
            while($row_title = mysqli_fetch_array($query_product)){
        ?>
         <div class="col-3 my-3">
            <a href="" class="link-card">
               <div class="card">
                  <img class="card-img-top" src="picture/<?php echo $row_title['hinhanh']?>" alt="Card image">
                  <div class="card-body">
                     <h6 class="card-title "><?php echo $row_title['tensanpham']?></h6>
                     <h4 class="card-text"><?php echo number_format($row_title['giatien'])?>₫</h4>
                  </div>
               </div>
            </a>
         </div>
         <?php
            }
            if ($trang > 1) {
               include("mainpage/pagination.php");
            }
         ?>
      </div>
   </div>
</div>