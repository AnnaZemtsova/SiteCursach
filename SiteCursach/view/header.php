<?php
?>
<HTML lang="ru">
<HEAD>
   <meta charset='utf-8' >
        <link href="http://localhost/SiteCursach/assets/styleHome.css" rel="stylesheet"> 
              <script src="http://code.jquery.com/jquery-latest.min.js"></script>
         </HEAD>
   
         <BODY>   
             <div class="cover"  >       
             </div>
              <form class="abs" method="GET" action = "/SiteCursach/models/users.php">
                <div class="outX">  <div class="imgContent"><img src="http://sparkysite.ru/small/cross/cross01/scross41.png" class="img"></div></div>
                <p class="label">Введите логин и пароль</p>
               <input type="text" name="login" class="input" placeholder="Логин"><br>
               <input type="text" name="password" class="input" placeholder="Пароль"><br>  
                  <div class="error">Неправильный логин или пароль</div>
                  <a href ="?admin=enter"><input type="submit" value="Войти" class="button"></a>
                </form>
             
             <form method="GET"  class="abs2" action="/SiteCursach/models/contacts.php">
                 <div class="outX">  <div class="imgContent"><img src="http://sparkysite.ru/small/cross/cross01/scross41.png" class="img"></div></div>
                <p class="label1">Введите свои данные</p>
               <input type="text" name="login" class="input1" placeholder="Логин">
               <input type="text" name="name" class="input1" placeholder="Имя">
               <input type="text" name="lastname" class="input1" placeholder="Фамилия">
               <input type="text" name="email" class="input1" placeholder="email"> 
               <input type="password" name="password" class="input1" placeholder="Пароль">
               <input type="password" name="passwordTwo" class="input1" placeholder="Повторите пароль"> 
                <div class="error2">Пароли не совпадают</div>
                 <a href ="?admin=enter"> <input type="submit" value="Зарегестрироваться" class="button1"></a>
                </form>
              <div class="header">
                    <div class="logo">
                    <img  width=90px
                    height= 90px      src="https://img-fotki.yandex.ru/get/55/200418627.32/0_110475_59920db5_orig.png"> 
                    </div>
                   <div class="title">
                    НОВОСТИ ИНТЕРЬЕРА
                  </div>
                </div> 
             <div class="boxContent">
             <div class="box">
                 <div class="home"><a href="?page=home">
                 HOME</a></div>
                 <div class="news_contacts" ><a href="?page=categories">NEWS </a>
                    <ul class="menu"> 
                        <li>
                          <ul class="submenu">
                          <li><a href="?page=categories"> Все новости </a>
                          </li>
                          <li><a href="?page=categories">Новости по категориям </a> 
                          </li>
                          <li><a class="lock" href="?page=users">Пользователи</a>  
                          </li>
                     </ul></li>
                      </ul>
                   </div>  
                 <div class="news_contacts"><a href="?page=contacts">
                     CONTACTS</a></div> 
              </div>               
            </div>
             <?php
             ?>