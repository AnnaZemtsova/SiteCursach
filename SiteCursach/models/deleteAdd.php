<?php 
$mysqli = new mysqli("localhost", "admin", "password", "userDb"); 
if ($mysqli->connect_errno) { 
echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
} 

$login = (isset($_REQUEST['login'])?$_REQUEST['login']:'error' );
$name = (isset($_REQUEST['name'])?$_REQUEST['name']:'error' );
$surname = (isset($_REQUEST['lastname'])?$_REQUEST['lastname']:'error' );
$email = (isset($_REQUEST['email'])?$_REQUEST['email']:'error' );
$pwd = (isset($_REQUEST['password'])?$_REQUEST['password']:'error' );
$pwd2 = (isset($_REQUEST['passwordTwo'])?$_REQUEST['passwordTwo']:'error' );
if(($login!="")&&($name!="")&&($surname!="")&&($email!="")&&($pwd==$pwd2)&&($pwd!="")){      
            $sql = "INSERT INTO users (name, surname,login,password,email) VALUES('$name', '$surname', '$login', '$pwd', '$email')";
$result = $mysqli->query($sql);
$row=$result->fetch_assoc();
}else{
    ?>
    <script>
        jQuery(".error2").innerHTML="Пароли не совпадают";
    </script>
<?php
}
?>