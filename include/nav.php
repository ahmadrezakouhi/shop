<?php 
$query = 'SELECT * FROM `categories`';
$result = mysqli_query($conn,$query);

?>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom shadow">
     

      <ul class="nav nav-pills">
        <?php while($row = mysqli_fetch_assoc($result)):?>
       
        <li class="nav-item"><a href="#" class="nav-link persian"><?php echo $row['name']; ?></a></li>
        <?php endwhile; ?>
      </ul>
    </header>