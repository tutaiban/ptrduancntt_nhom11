<?php
function connectdb(){
    $servername = "localhost";
    $user = "root";
    $pass = "";
    try {
    $conn = new PDO("mysql:host=$servername;dbname=ptrduancntt",$user,$pass);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    }catch(PDOException $e){
       echo"Connection failed: ". $e-> getMessage();
    }
    return null;
    
}
?>