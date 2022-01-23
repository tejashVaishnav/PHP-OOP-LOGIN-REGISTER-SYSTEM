<?php  
include 'db.include.php' ;
session_start();
 class user{
    public $id='';
    public $username= '';
    public $email='';
    public $pass='';
 
    
    public function Login($email,$pass){

        $conn = new db();
        $conn = $conn->connection();
        $qry = $conn->query("SELECT * from users where emailid = '$email' limit 1");
        $record = $qry->fetch();

        $this->id =$record['id'];
        $this->username= $record['username'];
        $this->email=  $record['emailid'];
        $this->pass = $record['password'];
        
        if($email == $this->email && $pass == $this->pass){
            $_SESSION['id'] = $this->id;
            $_SESSION['user'] = $this->username;
            $_SESSION['email'] = $this->email;
            header('location:index');
        }
        else{
            return 0;
        }
    }

    public function register($name , $email, $password , $cpassword){
        $reg = new db();
        $reg = $reg->connection();
// check password
        if($password !== $cpassword){
            echo "Password Does not Match";
            return 0 ;
        } 


// check email 
        $em = $reg->query("SELECT * from users where emailid = '$email' limit 1");
        $record  = $em->rowCount();
        if($record == 1){
            echo "email allready exited";
            return 0 ;
        }else{
            $stringqery = "INSERT INTO users(username,emailid,password) VALUES ('$name', '$email','$password')";
            $insert = $reg ->query($stringqery);
            if($insert){ 
                $_SESSION['id'] =$reg->lastInsertId();;
                $_SESSION['user'] = $name;
                $_SESSION['email'] = $email;
                header('location:index');
            }
            else{
                echo $stringqery;
                echo "failure";
                return  0 ; 
            }
        }
        


    } 
    public function delete(){

    }
    public function forgotpass(){

    }
    public function Logout(){
        session_destroy();
        header('location:index');
    }

    public function UpdateProfile(){
        
    }
 }
 
?>  