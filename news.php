<!DOCTYPE html>
<html lang="ru" >
  <head>
    <?php
       require_once 'mysql_connect.html';  
          
          $sql='select * from `articles` where `id`=:id';
        $id=$_GET['id'];
      $query=$pdo->prepare($sql);
      $query->execute(['id'=>$_GET['id']]);
      $article=$query->fetch(PDO::FETCH_OBJ);
      $website_title=$article->title;
      
      
      
      
      
  
    require 'blocks/head.php';
     ?>
  </head>
  <body>
<?php
require 'blocks/header.php';
 ?>
<main class="container mt-5 mb-3">
  <div class="row">
      <div class="col-md-8 mb-3">
       <div class="jumbotron">
           <h1><?=$article->title?></h1>
           <p><b>Автор статьи:</b> <?=$article->avtor?></p>
   <?php
              $date=date('d ',$article->date);  
               $array=["Января","Февраля","Марта","Апреля","Мая","Июня","Июля","Августа","Сентября","Октября","Ноября","Декабря"];
               $date.=$array[date('n',$article->date)-1];
               $date.=date(' H:i',$article->date);
    ?>
          <p><b>Время публикации:</b> <?=$date?></p>
           <p><?=$article->intro?></p>
            <p><?=$article->text?></p>
             
       </div>
          <h3 class="mt-3">Комментарии: </h3>
            <form action="/news.php?id=<?=$_GET['id']?>"  method="post">
          <label for="username">Ваше Имя</label>
          <input type="text" name="username" value="<?=$_COOKIE['login']?>" id="username" class="form-control">

          

          <label for="mess">Ввести комментарий:</label>
                <textarea name="mess" id="mess" class="form-control"></textarea>

            
          
          <button type="submit" id="mess_send" class="btn btn-success mt-3 mb-5">Добавить комментарий</button>

        </form>
        <?php
    if($_POST['username']!='' && $_POST['mess']!=''){
$username=trim(filter_var($_POST['username'],FILTER_SANITIZE_STRING));
$mess=trim(filter_var($_POST['mess'],FILTER_SANITIZE_STRING));
    }
    $sql='insert into comments(username,mess,article_id) values(?,?,?)';
$query=$pdo->prepare($sql);
$query->execute([$username,$mess,$_GET['id']]);
              
              
              
             $sql='select * from `comments` where `article_id` = :id ORDER BY `id` DESC'; 
              $query=$pdo->prepare($sql);
              $query->execute(['id'=>$_GET['id']]);
              $comments=$query->fetchAll(PDO::FETCH_OBJ);
              
              foreach($comments as $comment){
                  echo "<div class='alert alert-info mb-2'> 
                  <h4>$comment->username</h4>
                  <p>$comment->mess</p>
                  
                  
                  </div>";
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
