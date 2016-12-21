<?php 
session_start();
$mysqli = new mysqli("localhost", "admin", "password", "usersDB"); 
if ($mysqli->connect_errno) { 
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
} 
$login = (isset($_GET['login'])?$_GET['login']:'error' );
$pwd = (isset($_GET['password'])?$_GET['password']:'error' );
$sql = "SELECT password FROM users WHERE login='$login'";
$result = $mysqli->query($sql);
$row=$result->fetch_assoc();
$pwd1=$row['password'];   
  if($pwd==$pwd1){ 
       $_SESSION['login']=$login;
      ?>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
       <script>
           var el = jQuery(".enter");
           el.hide();
       </script>
           <?php
       header("Location: /SiteCursach/routing.php?page=home"); 
  }
 ?>
