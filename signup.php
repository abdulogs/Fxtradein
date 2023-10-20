<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>

<?php app::isLogin("id", "home.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | Sign up</title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
  <link rel="stylesheet" href="assets/css/form.css">
</head>

<body>

  <?php app::component("header"); ?>
    
  <main class="container h-100 content">
        <form class="form" id="register">
            <h1 class="h3 mb-2 font-weight-bold text-center">Register account!</h1>
            <p class="h6 mb-4 text-center text-muted">Create free account!</p>
            <div class="form-group mb-0">
                <input type="text" class="form-control form-control-lg shadow-none border border-bottom-0 font-12"
                    placeholder="First name" id="fname" name="fname" value="">
                    <input type="text" class="form-control form-control-lg shadow-none border border-bottom-0 font-12"
                    placeholder="Last name" id="lname" name="lname" value="">
                <input type="email" class="form-control form-control-lg shadow-none border border-bottom-0 font-12"
                    placeholder="Email address..." id="email" name="email" value="">
                <input type="password" class="form-control form-control-lg shadow-none border-bottom-0 border font-12"
                    placeholder="Create password..." id="pass" name="pass" value="8504605">
                <input type="password" class="form-control form-control-lg shadow-none border font-12"
                    placeholder="Confirm password..." id="cpass" name="cpass" value="8504605">
            </div>         
            <label class="checkbox mb-2 mt-2 font-12 d-flex align-items-center">
                <input type="checkbox" value="remember-me" class="mr-3">
                <span>By clicking on proceed button i agree with this
                    <a href="terms.php" class="text-dark">Terms and conditions</a></span>
            </label>
            <button class="w-100 btn btn-lg btn-dark font-12" type="submit">Register</button>
            <a href="login.php" class="text-dark font-12 mt-2 mb-2 d-block">
                - <span class="text-dark">Login instead?</span>
            </a>
        </form>
    </main>
    
    <?php app::component("footer"); ?>
    
    <script src="./modules/register/js/data.js"></script>

</body>

</html>