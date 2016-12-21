<?php
$mysqli = new mysqli("localhost", "admin", "password", "usersDB"); 
if ($mysqli->connect_errno) { 
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
}
$id =(isset($_GET['id'])?$_GET['id']:'error' );
$name =(isset($_GET['name'])?$_GET['name']:'error' );
$surname =(isset($_GET['surname'])?$_GET['surname']:'error' );
$login = (isset($_GET['login'])?$_GET['login']:'error' );
$pwd = (isset($_GET['password'])?$_GET['password']:'error' );
$email =(isset($_GET['email'])?$_GET['email']:'error' );
$sql = "UPDATE `users` SET  `name` = '$name', surname= '$surname',login='$login',password='$pwd',email='$email' WHERE `users`.`id` = '$id'";
echo $sql;
if($mysqli->query($sql))
     header("Location: /SiteCursach/view/index.php?page=users");
?>
