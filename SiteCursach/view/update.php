<?php 
$mysqli = new mysqli("localhost", "admin", "password", "allUser"); 
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
     header("Location: /SiteCursach/view/index.php?page=home");
     ?>
<?php
  }else{
      ?>
<script>
    jQuery(".lock").css(
        display:block;
    )
</script>
<?php
  }
 ?>