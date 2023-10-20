<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>
<?php app::isLogin("id", "home.php"); ?>
<?php app::getRedirect(["uid","token"],"404.php", false)?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | Account verification</title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body class="main-bg">

  <?php app::component("header"); ?>

  <?php
  $id = app::get("uid");

  if(DB::exists("verify_account", ["id"], ["user_id" =>  $id, "token" =>  app::get("token")])) {
    DB::update("users", ["verified" => 1])::where(["id" => $id])::execute();
    DB::delete("verify_account")::where(["user_id" => $id])::execute();
  } else{
    app::redirect("404.php"); 
  }
  ?>

    <main class="container mt-5 pt-5 pb-5 mb-5 text-center">
        <br><br><br><br>
        <br><br><br><br>
        <h1 class="ti-check border d-inline br-50 p-3 text-success"></h1>
        <h2 class="mt-5">Your account verified successfully!</h2>
        <p>Now you can login to your account</p> 
        <a href="login.php" class="btn btn-outline-dark">Login</a>
        <br><br><br><br>
        <br><br><br><br>
    </main>

<?php app::component("footer"); ?>

<script src="./modules/forgot/js/data.js"></script>

</body>

</html>