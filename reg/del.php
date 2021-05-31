<?php
$id=$_POST['#testV'];

require_once '../mysql_connect.html';
$sql='delete from articles where id=$id';
$query=$pdo->prepare($sql);
$query->execute();


?>