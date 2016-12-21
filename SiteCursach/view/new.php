<?php 
$mysqli = new mysqli("localhost", "admin", "password", "usersDB"); 
if ($mysqli->connect_errno) { 
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
} 
$id =(isset($_GET['id'])?$_GET['id']:'error' );
echo $id;
$sql = " SELECT * FROM `new` WHERE `new`.`id_news` ='$id'";
$result = $mysqli->query($sql);
$row=$result->fetch_assoc();
if($result!=NULL){
    require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/header.php");
    ?>
        <link href="http://localhost/SiteCursach/assets/user.css" rel="stylesheet"> 
      <link href="http://localhost/SiteCursach/assets/new.css" rel="stylesheet">     
        <div class="avatar">
            <img class="ava" src="<?php echo $row['image']?>">
        </div>
        <div class="textNear">
            <p style="color:white;font-size:25"><font><?php echo $row['name']?></font></p><br>
            <p style="height: auto;overflow:hidden;width:100%; color:gray;font-size:20;line-height: 1.5;text-align:justify"><?php echo $row['content']?></p>
        </div>
<?php      
     require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/footer.php");
     require_once('/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/routing.php');
}
?>