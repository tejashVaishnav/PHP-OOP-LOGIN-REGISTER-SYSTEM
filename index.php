<?php
session_start();

if(isset($_SESSION['id'])){
echo "id:".$_SESSION['id']."<br>";
echo "name:".$_SESSION['user']."<br>";
echo "email:".$_SESSION['email']."<br>";
}
?>

<a href="login">Login</a><br>
<a href="Register">Register</a><br>
<a href="login?logout=true">Logout</a><br>