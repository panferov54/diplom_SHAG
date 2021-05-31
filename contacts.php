<!DOCTYPE html>
<html lang="ru" >
  <head>
    <?php
    $website_title='Контакты';
    require 'blocks/head.php';
     ?>
  </head>
  <body >
<?php
require 'blocks/header.php';
 ?>
<main class="container mt-5 mb-3">
  <div class="row">
      <div class="col-md-8 mb-3">
        <h4>Обратная связь</h4>
        <form   method="post">
          <label for="username">Ваше Имя</label>
          <input type="text" name="username" id="username" class="form-control">

          <label for="email">Ваш email</label>
          <input type="email" name="email" id="email" class="form-control">

          <label for="mess">Сообщение</label>
            <textarea  name="mess" id="mess" class="form-control"></textarea>

        

            <div class="alert alert-danger mt-2" id="errorBlock">

            </div>
          
          <button type="button"  id="mess_send" class="btn btn-success mt-3">Отправить сообщение</button>

        </form>
      </div>
      <?php
      require 'blocks/aside.php';
       ?>
  </div>
</main>


<?php
require 'blocks/footer.php';
 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$('#mess_send').click(function(){
let name=$('#username').val();
let email=$('#email').val();
let mess=$('#mess').val();
$.ajax({
  url:'reg/mail.php',
  type:'POST',
  cache:false,
  data:{'username':name,'email':email,'mess':mess},
  dataType:'html',
  success:function(data){
    if(data=='Готово'){
          $('#mess_send').text('Сообщение отправленно');
          $('#errorBlock').hide();
        $('#username').val("");
        $('#email').val("");
        $('#mess').val("");
          }

    else{
        $('#errorBlock').show();
        $('#errorBlock').text(data);
    }

  }
});


});

    

</script>


  </body>
</html>
