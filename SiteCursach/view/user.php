<?php 
$mysqli = new mysqli("localhost", "admin", "password", "usersDB"); 
if ($mysqli->connect_errno) { 
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
} 
$id =(isset($_GET['id'])?$_GET['id']:'error' );
$sql = " SELECT * FROM `users` WHERE `users`.`id` ='$id'";
$result = $mysqli->query($sql);
$row=$result->fetch_assoc();

$mysqli->set_charset("utf8");

if($result!=NULL){
    $FIO = $row['name']." ".$row['surname'];
    require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/header.php");
    ?>
        <link href="http://localhost/SiteCursach/assets/styleHome.css" rel="stylesheet">  
        <link href="http://localhost/SiteCursach/assets/user.css" rel="stylesheet">
     <div><div class="avatar">
            <img class="ava" src="<?php echo $row['image']?>">
        </div>
            </div>
        <div class="textNear">
            <p style="color:white;font-size:25"><font><?php echo $FIO?></font></p><br>
            <p style="color:white;font-size:20"><?php echo $row['login']?></p><br>
            <p style="color:orange;font-size:25;text-align:center">Описание</p><br>
            <p style="height: auto;overflow:hidden;width:100%; color:gray;font-size:20;line-height: 1.5;text-align:justify"><?php echo $row['inform'];?></p>
        </div>
<?php      
     require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/footer.php");
     require_once('/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/routing.php');
}
?>