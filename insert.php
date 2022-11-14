<?php

$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];

$add = new PDO('mysql:host=localhost;dbname=mizuu','root','');
$query = $add->query("insert into `login` values('','$username','$password','$role');");

 if($query){
    header('location:person.php');
 }