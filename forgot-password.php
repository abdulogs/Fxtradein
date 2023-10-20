<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>

<?php app::isLogin("id", "home.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | Forgot password</title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
  <link rel="stylesheet" href="assets/css/form.css">
</head>

<body class="main-bg">

  <?php app::component("header"); ?>
    
  <main class="container h-100 content">
        <form class="form" id="forgot">
            <h1 class="h3 mb-2 font-weight-bold text-center">Forgot password!</h1>
            <p class="h6 mb-4 text-center text-muted">We will send you a token for password change authentication!</p>
            <div class="form-group">
                <input type="email" class="form-control form-control-lg shadow-none border rounded font-12"
                    placeholder="Email address..." id="email" name="email">
            </div>
            <button class="w-100 btn btn-lg btn-dark font-12" type="submit">Procced</button>
            <a href="login.php" class="text-dark font-12 mt-2 mb-2 d-block">
                - <span class="text-dark">Login?</span>
            </a>
        </form>
    </main>

<?php app::component("footer"); ?>

<script src="./modules/forgot/js/data.js"></script>

</body>

</html>