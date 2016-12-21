<?php 
require("SiteCursach/view/index.php?page=users");
$mysqli = new mysqli("localhost", "admin", "password", "usersDB"); 
if ($mysqli->connect_errno) { 
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
} 
$sql = "SELECT id,name,surname FROM users";
$result = $mysqli->query($sql);
$row=$result->fetch_assoc();
$res = count($row);
?>
<script>
    var table = jQuery(".table");
    for(var i=0;i<$res;i++){
        var tr = document.createElement('tr');
        var td1 = document.createElement('td');
        td1.innerHTML = $row['id'];
        var td2 = document.createElement('td');
        td2.innerHTML = $row['name'];
        var td3 = document.createElement('td');
        td3.innerHTML = $row['surname'];
        tr.appendChild(td1);
        tr.appendChild(td2);
        tr.appendChild(td3);     
    }
</script>
<?php
    // header("Location: /SiteCursach/view/index.php?page=users");
 ?>