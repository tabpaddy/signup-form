<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FORMS</title>
    <link href="style.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"> -->
  </head>
  <body>

  <h1>HTML FORM</h1>
  <div class="container">
    <form action="connect.php" method="post">
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name" autocomplete="off">
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email" autocomplete="off">
        </div>
        <div class="genderCon">
            <label>Gender</label>
            <input class="gender1" type="radio" name="gender" value="m">Male
            <input class="gender1" type="radio" name="gender" value="f">Female
            <input class="gender1" type="radio" name="gender" value="a">Adult
        </div>
        <div>
            <label>Mobile</label>
            <input type="text" name="mobile" placeholder="Enter your mobile" autocomplete="off">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter your password" autocomplete="off">
        </div>
        <div class="btn">
            <button type="submit">Submit data</button>

        </div>
    </form>
  </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> -->
  </body>
</html>