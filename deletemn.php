<?php

$id=$_GET['id'];

$d = new PDO('mysql:host=localhost;dbname=mizuu','root',''); 
$query = $d->query("DELETE FROM `mr_menu` WHERE `id`='$id' ");

if($query){
    header('location:person.php');}