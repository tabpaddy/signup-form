<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

  session_start();
    if (!isset($_SESSION['user'])) {
        var_dump($_SESSION['user']); // Check if the session variable is set
        header('location:login.php');
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center text-warning mt-5">
        WElCOME
        <?PHP echo $_SESSION['user'];?>
    </h2>


    <div class="container">
        <a href="logout.php" class="btn btn-primary mt-5">Logout</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>