<?php
session_start();
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
   $Name= $_POST['name'];
   $Email= $_POST['email'];
 $Password=$_POST['password'];
 $conpas=$_POST['confrim_password'];
}
if ($Password != $conpas){
    echo "passsword does not match";
    exit;
}

$Password =password_hash($Password,PASSWORD_BCRYPT);
$sql = $conn->prepare("INSERT INTO users (name,email,password) VALUES(?, ?, ?)");
if($sql->execute([$Name,$Email,$Password])){
  echo "data successfully send";
}else{
  echo "Data not sent";
}

