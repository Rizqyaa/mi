<?php  
 session_start();  
 if(isset($_SESSION["name"]))  
 {  
      header("location:mizuu.php");  
 }  
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
    <title>Login</title>
    <style>
        body{
            background-color:rgb(0, 0, 20);
        }
    </style>
</head>
<body>
    
    <div style="padding: 50px;">
    <form action="shion.php"  method="post">
    <div class="container">
    <div class="row" >
      <div class="col-md-6 offset-md-3">
      <div class="card my-5">
        <form class="card-body cardbody-color p-lg-4 ">
          <div class="text-center">
            <img src="kobo.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
              width="200px" alt="profile">
          </div>  
          <div class="mb-3 text-center">
            Username : 
            <br>
            <input class="" type="text" name="username" placeholder="username" style="width: 200px;">
          </div>
          <div class="mb-3 text-center">
            Password : 
            <br>
            <input class="" type="password" name="password" placeholder="password" style="width: 200px;">
          </div>
          <div class="text-center"> <button type="submit" class="btn btn-primary px-5 mb-5">Login</button> <br></div>
          </div>

    </form>
    </div>
</body>
</html>