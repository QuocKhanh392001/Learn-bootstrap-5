<?php
  
    if (isset($_GET['trang'])) {
      if ($_GET['trang'] <= 1) {
        $previous_status = "disabled";
      }
      else{
        $previous = $_GET['trang'] - 1 ;
      }
  
      if ($_GET['trang'] >= $trang) {
        $next_status = "disabled";
      }
      else{
        $next = $_GET['trang'] + 1 ;
      }
    }
    else{
      $previous_status = "disabled";
      $next = 2 ;
    }
    
?>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item <?php echo $previous_status ?>">
      <a class="page-link" href="index.php?trang=<?php echo $previous ?>">Previous</a>
    </li>
    <?php
      for ($i=1; $i <= $trang; $i++) { 
         
    ?>
    <li class="page-item "><a class="page-link color-special-text" href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
    <?php
      };
    ?>
    <li class="page-item <?php echo $next_status ?>">
      <a class="page-link" href="index.php?trang=<?php echo $next ?>">Next</a>
    </li>
  </ul>
</nav>