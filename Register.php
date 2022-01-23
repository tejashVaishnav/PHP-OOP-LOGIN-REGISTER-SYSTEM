<?php
include 'include/user.clases.php';
if(isset($_POST['register'])){
    $reg = new User();
    echo $reg->register($_POST['name'],$_POST['email'],$_POST['password'],$_POST['cpassword']);
     
}
?>
<lable>Register</lable>
<form action = "" method="post">
    <input type="text" name="name" placeholder = "Name"><br>
    <input type="text" name="email" placeholder = "email"><br>
    <input type="password" name="password" placeholder = "password"><br>
    <input type="cpassword" name="cpassword" placeholder = "cpassword"><br>
    <input type="submit" name="register">
</form>
