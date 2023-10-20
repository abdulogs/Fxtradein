<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | 404</title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
</head>

<body class="main-bg">

  <?php app::component("header"); ?>
    
    <main class="container mt-5 pt-5 pb-5 mb-5 text-center">
        <br><br><br><br>
        <h1 class="ti-close border d-inline br-50 p-3 text-danger"></h1>
        <h2 class="mt-5 font-60">404!</h2>
        The content you are requesting might not be available. </p> 
        <a href="index.php" class="btn btn-dark">Home</a>
        <br><br><br><br>
        <br><br><br><br>
    </main>

<?php app::component("footer"); ?>

<script src="./modules/forgot/js/data.js"></script>

</body>

</html>