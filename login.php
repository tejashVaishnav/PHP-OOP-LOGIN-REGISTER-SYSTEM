<?php 
require('include/user.clases.php');
if(isset($_POST['login'])){
$email = $_POST['email'];
$pass = $_POST['password'];
 
$auth = new user();
echo $auth->Login($email,$pass);
}

if(isset($_GET['logout'])){
    $auth = new user();
    $auth->Logout( );
}
?>

<lable>Login</lable>
<form action = "" method="post">
    <input type="text" name="email" placeholder = "email">
    <input type="password" name="password" placeholder = "password">
    <input type="submit" name="login">
</form>
