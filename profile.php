<?php require_once "classes/app.php"; ?>
<?php require_once "classes/database.php"; ?>

<?php app::isLogout("id", "login.php"); ?>

<?php 
  $user = DB::exists("users", ["first_name", "last_name","email","phone","about"] , ["id" => app::getSession("id")]); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fxtradein | <?php echo $user["first_name"]." ".$user["last_name"]; ?></title>
  <link rel="stylesheet" href="./assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/themify/themify.min.css">
  <link rel="stylesheet" href="assets/css/stylesheet.css">
  <link rel="stylesheet" href="assets/css/form.css">
</head>

<body>

<?php app::component("header"); ?>
    
  <main class="container h-100 content">
    <form class="form" id="profile" method="post">
        <h1 class="h3 mb-2 font-weight-bold text-center">Profile!</h1>
        <p class="h6 mb-4 text-center text-muted">Update your account!</p>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg shadow-none border border-bottom-0 font-12"
                placeholder="Firstname" name="fname" id="fname" value="<?php echo $user["first_name"]; ?>">
            <input type="text" class="form-control form-control-lg shadow-none border border-bottom-0 font-12"
                placeholder="Lastname" name="lname" id="lname" value="<?php echo $user["last_name"]; ?>">
            <input type="email" class="form-control form-control-lg shadow-none border border-bottom-0 font-12"
                placeholder="Email address..." value="<?php echo $user["email"]; ?>" disabled>
            <input type="text" class="form-control form-control-lg shadow-none border-bottom-0 border font-12"
                placeholder="Phone number..." name="phone" id="phone" value="<?php echo $user["phone"]; ?>">
            <textarea class="form-control form-control-lg shadow-none border font-12"
                placeholder="About" name="about" id="about"><?php echo $user["about"]; ?></textarea>
        </div>
        <button class="w-100 btn btn-lg btn-dark font-12" type="submit">Update</button>
    </form>
</main>

<?php app::component("footer"); ?>

<script src="./modules/profile/js/data.js"></script>

</body>

</html>