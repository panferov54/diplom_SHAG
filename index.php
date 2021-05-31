<!DOCTYPE html>
<html lang="ru" >
  <head>
    <?php
    $website_title='PHP Блог';
    require 'blocks/head.php';
     ?>

  </head>
  <body style='background: url("img/blog.png")'>
<?php
require 'blocks/header.php';
 ?>
<main class="container mt-5 mb-3">
  <div class="row">
      <div class="col-md-8">
<?php 
        require_once 'mysql_connect.html';  
          
          $sql='select * from `articles` order by `date` desc';
          $query=$pdo->query($sql);
          while($row = $query->fetch(PDO::FETCH_OBJ)){
              echo "<div class='itemBlock'><h2>$row->title</h2>
                  <p class='text-secondary'>$row->intro</p>
                   <p ><b class='text-secondary'>Автор статьи:</b> $row->avtor</p>
                 <a  href='/news.php?id=$row->id' title='$row->title'>
                  <button class='btn btn-outline-warning mb-1 ' >Прочитать статью полностью</button>
                       </a></div>";


              
          }
          ?>
      </div>
 
      <?php
      require 'blocks/aside.php';
       ?>
  </div>
</main>


<?php
require 'blocks/footer.php';
 ?>

  </body>
</html>
