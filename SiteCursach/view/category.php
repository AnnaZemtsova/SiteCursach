<?php
     require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/header.php");
    $mysqli = new mysqli("localhost", "admin", "password", "usersDB"); 
    if ($mysqli->connect_errno) { 
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
    }
    $result = $mysqli->query('SELECT id_categoria,nameCategoria,image FROM categories');
        ?>
 <link href="http://localhost/SiteCursach/assets/styleHome.css" rel="stylesheet">
 <link href="http://localhost/SiteCursach/assets/categories.css" rel="stylesheet">
 <link href="http://localhost/SiteCursach/assets/categoriesy.css" rel="stylesheet">
<?php
     while ($row=$result->fetch_assoc()) { 
?>
             <a  class="go" id_category="<?php echo $row['id_categoria']?>"><div class="block">
                 <img class="image" 
                      style= "background-image:url(<?php echo $row['image']?>)"                        >
                 <div class="text"><?php echo $row['nameCategoria']?></div>
             </div></a> 

             <script type="text/javascript" src="http://localhost/SiteCursach/assets/slider.js"></script>
             <script type="text/javascript" src="http://localhost/SiteCursach/assets/test.js"></script>   
            <script type="text/javascript" src="http://localhost/SiteCursach/assets/categories.js"></script>
            <script type="text/javascript" src="http://localhost/SiteCursach/assets/category.js"></script>
<?php   
                                         }
     require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/footer.php");
     require_once('/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/routing.php');
?>