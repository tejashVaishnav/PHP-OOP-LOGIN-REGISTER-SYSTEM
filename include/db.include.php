<?php  

   class db{
    public $host='localhost';
    public $user = 'root';
    public $pass = '';
    public $database = 'test';
    public $conn; 

 public function connection(){
     try{
        $pdo = new PDO("mysql:host=$this->host;dbname=$this->database", "$this->user", "$this->pass");
        if($pdo){
           return $pdo; 
        }
        else{
            die("error,cannot connection to host");
        }
     }
     catch(PDOException $ex){
        echo $ex->getMessage();
     }
 }
} 
?>