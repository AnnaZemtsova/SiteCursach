<?php
     require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/header.php");
if(isset($_SESSION['login'])){
    $mysqli = new mysqli("localhost", "admin", "password", "usersDB"); 
    if ($mysqli->connect_errno) { 
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
    }
    $result = $mysqli->query('SELECT id,name,surname FROM users');
?>
   <link href="http://localhost/SiteCursach/assets/styleHome.css"  rel="stylesheet">
   <link href="http://localhost/SiteCursach/assets/styleUsers.css" rel="stylesheet"> 
   <div class="tableContent">
        <table class="table">
            <tr class="row">
                <td class="column">id</td>
                <td class="column">Имя</td>
                <td class="column">Фамилия</td>
                <td class="column">Action
                </td>
            </tr>   
            <div class="coverUser">       
            </div>
            <div class="none">
              <form method="GET" action="/SiteCursach/models/update.php">
               <!--<input type="text" name="id" class="input1" style="display:block" value="ss"> -->   
               <div class="outX">  <div class="imgContent">
               <img src="http://sparkysite.ru/small/cross/cross01/scross41.png" class="img"></div></div>
                <p class="label1">Измените  данные</p>
               <input type="text" name="name" class="input1" placeholder="Имя">
               <input type="text" name="surname" class="input1" placeholder="Фамилия">
               <input type="text" name="email" class="input1" placeholder="email"> 
               <input type="text" name="login" class="input1" placeholder="Логин">
               <input type="password" name="password" class="input1" placeholder="Пароль"> 
               <input type="password" name="passwordTwo" class="input1" placeholder="Повторите пароль"> 
              <div class="error2">Пароли не совпадают</div>
                  <a href ="?page=update"><input type="submit" value="ОК" class="button1"> </a>
                </form>
                </div>
              <?php 
       while ($row=$result->fetch_assoc()) { 
          ?>
            <tr class="row">
                <td class="column"><?php echo $row['id']?></td>
                <td idUser="<?php echo $row['id']?>" class="columnN"><?php echo $row['name']?></td>
                <td idUser="<?php echo $row['id']?>" class="column"><?php echo $row['surname']?></td>
                <td class="column">
         <img idUser="<?php echo $row['id']?>" method = get src="http://s1.iconbird.com/ico/2013/10/464/w512h5121380984696edit.png" class="imgUDU" >
                   <img idUser="<?php echo $row['id']?>" src ="http://sparkysite.ru/small/cross/cross01/scross41.png" class="imgUD">
                </td>
            </tr>        
    <script type="text/javascript" src="http://localhost/SiteCursach/assets/addDelete.js">
    </script>      

 <?php
  }
}else{
  /* ?><script>    
             alert("Permission denied");    
            </script>
            
            <?php
    for($i=0;$i<10000;$i++){
        if($i==10000) header("Location: /SiteCursach/view/index.php?page=home"); 
    }*/
}
?>
             </table>
</div>
<?php
     require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/footer.php");
     require_once('/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/routing.php');
?>