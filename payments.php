<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>

<?php app::isLogout("id", "login.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | Payments</title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body>

  <?php app::component("header"); ?>
    
  <main class="container pt-5 pb-5 mt-5 d-flex flex-column justify-content-center align-content-center align-items-center">
  <h3 class="mt-5 pt-5 pb-5 text-dark"><b>Payment Methods</b></h3>
    <img src="assets/images/payments.jpg" width="40%">  
    <a href="home.php" class="btn btn-dark btn-sm mt-4 d-inline-block">Go To Dashboard<a>   
  </main>

  
  <?php app::component("footer"); ?>

  <script type="text/javascript" src="assets/js/header.js"></script>

</body>

</html>
