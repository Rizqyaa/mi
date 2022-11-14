<?php

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
$id = $_POST['id'];

$database = new PDO('mysql:host=localhost;dbname=mizuu', 'root', '');
$query = $database->query("UPDATE `login` SET `username` = '$username', `password` = '$password', `role` = '$role' WHERE `id`= '$id'");

if($query){
    header("Location:person.php");
}