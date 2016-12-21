<?php 
$mysqli = new mysqli("localhost", "admin", "password", "usersDB"); 
if ($mysqli->connect_errno) { 
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
} 
$id =(isset($_GET['id'])?$_GET['id']:'error' );
$sql = " DELETE FROM `users` WHERE `users`.`id` ='$id'";
if($mysqli->query($sql))
     header("Location: /SiteCursach/routing.php?page=users");
?>