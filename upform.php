<?php

$id = $_GET['id'];

$db =new PDO("mysql:host=localhost;dbname=mizuu", 'root', '');
$query = $db->query("SELECT * FROM menu WHERE id='$id' ");
$data = $query->fetch();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Ubah</title>
</head>
<body>
    <form method="POST" action="up.php" class="row g-3" style="padding-top: 20px; padding-left: 25px;">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="col-auto">
            <label class="form-label">nama</label>
            <input type="text" name="nama" class="form-control" placeholder="nama" value="<?= $data['nama'] ?>">
        </div>
        <div class="col-auto">
            <label for="formFile" class="form-label">taro foto</label>
            <input class="form-control" name="photo" type="file" id="formFile" value="<?= $data['photo'] ?>">
        </div>
        <div class="col-auto">
            <label for="formFile" class="form-label">qty</label>
            <input class="form-control" name="qty" type="text" id="formFile" value="<?= $data['qty'] ?>">
        </div>
        <div class="col-auto">
            <label class="form-label">harga</label>
            <input type="text" name="price" class="form-control" placeholder="price" value="<?= $data['price']?>">
        </div>
        <div class="d-grid gap-2 d-md-block mx-auto" style="padding-top:5px;">
            <button type="submit" value="simpan" class="btn btn-primary mb-3" style="--bs-btn-font-weight: 80;">.   .Update.   .</button>
            <button type="" class="btn btn-danger mb-3" style="--bs-btn-font-weight: 600;" action="menu.php" >.   .Batal.   .</button>
            </div>
    </form>

</body>
</html>