<?php
   session_start();
   session_destroy();
   header("Location: /SiteCursach/routing.php?page=home");
?>