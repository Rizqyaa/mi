<!DOCTYPE html>
<html lang="en">
<head>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Tambah</title>
</head>
<body>
    <form method="POST" action="insert.php" class="row g-3" style="padding-top: 20px; padding-left: 25px;">
    <div class="col-auto">
            <label class="form-label">Username</label>
            <input type="text" name="username" class="form-control" placeholder="username">
        </div>
        <div class="col-auto" id="show_hide_password">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
        <div class="col-auto ">
            <label class="form-label">Role</label>
            <input type="role" name="role" class="form-control" placeholder="pilih role">
        </div>
        <div class="d-grid gap-2 d-md-block mx-auto" style="padding-top:5px;">
            <button type="submit" value="simpan" class="btn btn-primary mb-3" style="--bs-btn-font-weight: 600;">.   .Save.   .</button>
            <a type="" class="btn btn-danger mb-3" style="--bs-btn-font-weight: 600;" href="person.php">.   .Batal.   .</a>
            </div>
    </form>
</body>
</html> 