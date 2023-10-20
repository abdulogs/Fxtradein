<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>


<?php app::isLogout("id", "login.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | Change password</title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
  <link rel="stylesheet" href="assets/css/form.css">
</head>

<body>

  <?php app::component("header"); ?>
    
  <main class="container h-100 content">
          <!-- Breadcrumbs-->
   
        <form class="form" id="change">
            <h1 class="h3 mb-2 font-weight-bold text-center">Change password!</h1>
            <p class="h6 mb-4 text-center text-muted">Set up your new password !</p>
            <div class="form-group">
            <input type="password" class="form-control form-control-lg shadow-none border-bottom-0 border font-12"
                    placeholder="Old password..." name="opassword" id="opass">
                <input type="password" class="form-control form-control-lg shadow-none border-bottom-0 border font-12"
                    placeholder="Create password..." name="password" id="pass">
                <input type="password" class="form-control form-control-lg shadow-none border font-12"
                    placeholder="Confirm password..." name="cpassword" id="cpass">
            </div>
            <button class="w-100 btn btn-lg btn-dark font-12" type="submit">Change</button>
        </form>
    </main>

    <?php app::component("footer"); ?>

    <script src="./modules/change/js/data.js"></script>

</body>

</html>