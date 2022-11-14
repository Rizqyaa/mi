<?php

session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$k = new PDO('mysql:host=localhost;dbname=mizuu','root','');
$query = $k->query("SELECT * FROM login WHERE username='$username' AND password='$password'");
$data=$query->fetch();
if($query->rowCount()> 0){
    if($data['role']=="Admin"){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['role'] = "Admin";
        header("location:mizua.php");
    } else if($data['role']=="User"){
        $_SESSION['username']=$_POST['username'];
        $_SESSION['password']=$_POST['password'];
        $_SESSION['role'] = "User";
        header("location:mizuu.php");
    }
} else{
    header("location:login.php");
}