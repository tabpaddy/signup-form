<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


$login = 0;
$invalid = 0;

  if ($_SERVER['REQUEST_METHOD']=='POST') {
    # code...
    include 'connect.php';
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM registration WHERE user = '$user' and pass = '$pass'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
           $login = 1;
           session_start();
           $_SESSION['user']=$user;
           header('location:home.php');
        }else {
          $invalid = 1; 
        }
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
  <?php
        if ($login) {
         echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
         <strong>Success </strong> You are successfully logged in.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
        }
    ?>

<?php
        if ($invalid) {
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Error </strong> Invalid Data.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
        }
    ?>
    
    <h1 class="text-center">Login to our website</h1>
    <div class="container mt-5">
    <form action="login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control"  placeholder="Enter your username" name="user">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="pass">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Login</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>