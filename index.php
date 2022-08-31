<?php 
require 'includes/init.php';
if(isset($_POST['email']) && isset($_POST['password'])){

$result = $user_obj->loginUser($_POST['email'],$_POST['PASSWORD']);
}
if (isset($_SESSION['emai'])) {
  header('location:profile.php');
  exit();
  
}

 ?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <title>login</title>
  </head>
  <body>
 
<div class="container">
<form action="" method="post">
  <div class="mb-1">
    <h2 class="text-center">Login To Facebook</h2>
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-outline-success">login</button>
  <a href="signup.php" class="form_link">Signup</a>

<?php

if(isset($result['errorMessage'])){
  echo '<p class="errorMsg">'.$result['errorMessage'].'</p>';
}



?>

</form>


</div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
  </body>
</html>