<?php
     require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/header.php");
    ?>
 <link href="http://localhost/SiteCursach/assets/styleHome.css" rel="stylesheet">
 <link href="http://localhost/SiteCursach/assets/contacts.css" rel="stylesheet">
       <div class="map"> 
           <iframe class = "map" style="width:100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9889.823542761444!2d36.25791873703529!3d50.09289402092592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a5e6b7c289e5%3A0x28c1a35ccece81d6!2z0LLRg9C70LjRhtGPINCQ0LrQsNC00LXQvNGW0LrQsCDQktCw0LvRjNGC0LXRgNCwLCAxNCwg0KXQsNGA0LrRltCyLCDQpdCw0YDQutGW0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1sru!2sua!4v1478970288134" ></iframe>        
        </div>
        
        <div class="siteBar"> 
           <div> 
               <form class="contactsForm">
               <p class="label">Оставьте отзыв</p>
               <input type="text" name="name" class="input" placeholder="Имя"><br>
               <input type="text" name="subject" class="input" placeholder="Предмет"><br>    
               <textarea class="input" style="height:200px;width:320px" placeholder="Отзыв"> 
               </textarea><br> 
                   <p class="label"></p>      
               <p class="labelRadio">Хотите ли Вы, чтобы информация о новостях приходила Вам на почту?</p>
                   <p class="label"></p> 
                   <input type="radio"  class="radio" name="1">  Да<br><br>
                    <input type="radio"  class="radio" name="1" >  Нет<br>
               <input type="submit" value="Отправить" class="button">
             </form>
            </div>
            <div class="contacts">
            <p><font color="gray" >Контакты</font></p>
            <p><font color="gray">email:c interia@hotbox.com</font></p>
            <p><font color="gray">телефон: 095-678-54-92</font></p>
                </div>
        </div>

             <script type="text/javascript" src="http://localhost/SiteCursach/assets/slider.js"></script>
             <script type="text/javascript" src="http://localhost/SiteCursach/assets/test.js"></script>  
            <script type="text/javascript" src="http://localhost/SiteCursach/assets/move.js"></script>
<?php
     require_once("/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/footer.php");
     require_once('/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/routing.php');
?>