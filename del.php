<?php

$id = $_GET['id'];

$db = new PDO('mysql:host=localhost;dbname=mizuu','root',''); 
$query = $db->query("DELETE FROM `menu` WHERE `id`='$id'");

if($query){
    header('Location:menu.php');}
    ?>