<?php

$success = 0;
$user = 0;

  if ($_SERVER['REQUEST_METHOD']=='POST') {
    # code...
    include 'connect.php';
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    // $sql = "INSERT INTO registration (user, pass)
    //         VALUES('$user', '$pass')";

    // $result = mysqli_query($conn, $sql);

    // if ($result) {
    //   # code...
    //   echo "Data inserted successfully";
    // }else {
    //   die( mysqli_connect_error());
    // }

    $sql = "SELECT * FROM registration WHERE user = '$user'";

    $result = mysqli_query($conn, $sql);
    if ($result) {
        $num = mysqli_num_rows($result);
        if ($num > 0) {
            // echo "user already exist";
            $user = 1;
        }else {
          $sql = "INSERT INTO registration (user, pass)
            VALUES('$user', '$pass')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
          # code...
          // echo "Signup successful";
          $success = 1;
        }else {
          die( mysqli_connect_error());
        }
        }
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
    <?php
        if ($user) {
         echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
         <strong>Holy guacamole!</strong> You should check in on some of those fields below.
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
       </div>';
        }
    ?>
    <h1 class="text-center">Signup Page</h1>
    <div class="container mt-5">
    <form action="index.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control"  placeholder="Enter your username" name="user">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="pass">
  </div>
  
  <button type="submit" class="btn btn-primary w-100">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>