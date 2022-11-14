<?php

$nama = $_POST['nama'];
$photo = $_POST['photo'];
$qty = $_POST['qty'];
$harga = $_POST['harga'];
$id = $_POST['id'];

$database = new PDO('mysql:host=localhost;dbname=mizuu', 'root', '');
$query = $database->query("UPDATE `menu` SET `nama` = '$nama', `photo` = '$photo', `qty` = '$qty', `harga` = '$harga' WHERE `id`= '$id'");

if($query){
    header("Location:menu.php");
}