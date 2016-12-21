<?php 
$mysqli = new mysqli("localhost", "admin", "password", "usersDB"); 
if ($mysqli->connect_errno) { 
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
} 
$id =(isset($_GET['id'])?$_GET['id']:'error' );
$sql = " SELECT * FROM `news` WHERE `news`.`id_cat` ='$id'";
$result = $mysqli->query($sql);
  while ($row=$result->fetch_assoc()) { 
    require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/header.php");
    ?>
        <link href="http://localhost/SiteCursach/assets/styleHome.css" rel="stylesheet">
        <link href="http://localhost/SiteCursach/assets/categories.css" rel="stylesheet">
        <link href="http://localhost/SiteCursach/assets/news.css" rel="stylesheet">
                 <a class="go" id_New = "<?php echo $row['id_new']?>"><div class="block">
                 <img class="image" 
                      style= "background-image:url(<?php echo $row['image']?>)">
                 <div class="text"><?php echo $row['nameNews']?></div>
                  </div>
            <script type="text/javascript" src="http://localhost/SiteCursach/assets/news.js"></script>
<?php      
  }
     require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/footer.php");
     require_once('/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/routing.php');
?>