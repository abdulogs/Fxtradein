<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>

<?php app::isLogin("id", "home.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | Login</title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
  <link rel="stylesheet" href="assets/css/form.css">
</head>

<body class="main-bg">

  <?php app::component("header"); ?>
    
  <main class="container h-100 content">
        <form class="form" id="login">
            <h1 class="h3 mb-2 font-weight-bold text-center">Login!</h1>
            <p class="h6 mb-4 text-center text-muted">Welcome back! login to your account!</p>
            <div class="form-group">
                <input type="email" class="form-control form-control-lg shadow-none border border-bottom-0 font-12"
                    placeholder="Email address..." id="email" name="email">
                <input type="password" class="form-control form-control-lg shadow-none  border font-12"
                    placeholder="Password..."id="pass" name="pass">
            </div>
            <label class="checkbox mb-2 mt-2 font-12 d-flex align-items-center">
                <input type="checkbox" value="remember-me" class="mr-3"> Remember me <a href="forgot-password.php"
                    class="ml-auto text-dark">Forgot password?</a>
            </label>
            <button class="w-100 btn btn-lg btn-dark font-12" type="submit">Login</button>
            <a href="signup.php" class="text-dark font-12 mt-2 mb-2 d-block">
                - <span class="text-dark">Register?</span>
            </a>
        </form>
    </main>

    <?php app::component("footer"); ?>

    <script src="./modules/login/js/data.js"></script>

</body>

</html>