<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>

<?php app::isLogin("id", "home.php"); ?>
<?php app::getRedirect(["uid","token"],"404.php", false)?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | Recover password</title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
  <link rel="stylesheet" href="assets/css/form.css">
</head>

<body class="main-bg">

  <?php app::component("header"); ?>
    
  <main class="container h-100 content">
    <form class="form pt-5" id="recover">
        <h1 class="h3 mb-2 font-weight-bold text-center">Recover account!</h1>
        <p class="h6 mb-4 text-center text-muted">Recover your account password!</p>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg shadow-none border-bottom-0 border font-12"
                placeholder="Create password..." name="password" id="pass">
            <input type="password" class="form-control form-control-lg shadow-none border font-12"
                placeholder="Confirm password..."  name="cpassword" id="cpass">
        </div>
        <input type="hidden" id="token" name="token" value="<?php echo app::get("token")?>">
            <input type="hidden" id="uid" name="uid" value="<?php echo app::get("uid")?>">
        <button class="w-100 btn btn-lg btn-dark font-12" type="submit">Change</button>
    </form>
</main>

<?php app::component("footer"); ?>

<script src="./modules/recover/js/data.js"></script>
</body>

</html>