<?php
session_start();
$pages = array(
"contacts"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/contact.php","home"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/layout.php","categories"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/category.php","users"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/users.php","update"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/models/update.php","delete"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/models/delete.php","user"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/user.php","news"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/news.php","new"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/view/new.php","destroy"=>"/Applications/XAMPP/xamppfiles/htdocs/SiteCursach/models/session_destroy.php");
if(isset($_GET['id'])){
$id = $_GET['id'];
}
if(isset($_GET['page'])&&isset($pages[$_GET['page']]))  {
    require_once($pages[$_GET['page']]);
}
?>