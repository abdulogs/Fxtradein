<?php
require_once "../../classes/app.php";
require_once "../../classes/database.php";

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
  $id = app::post('id', ["tags", "entities", "chars"]);
  $fname = app::post('fname', ["tags", "entities", "chars"]);
  $lname = app::post('lname', ["tags", "entities", "chars"]);
  $email = app::post('email', ["tags", "entities", "chars"]);
  $oemail = app::post('oemail', ["tags", "entities", "chars"]);
  $password = app::post('password', ["tags", "entities", "chars"]);
  $opassword = app::post('opassword', ["tags", "entities", "chars"]);
  $phone = app::post('phone', ["tags", "entities", "chars"]);
  $about = app::post('about', ["tags", "entities", "chars"]);
  $role = app::post('role', ["tags", "entities", "chars"]);
  $balance = app::post('balance', ["tags", "entities", "chars"]);
  $verify = app::post('verify', ["tags", "entities", "chars"]);
  $status = app::post('status', ["tags", "entities", "chars"]);

  if ($email == $oemail) {
    $mail = $oemail;
  } elseif ($email != $oemail) {
    $mail = $email;
  }

  if (!empty($password)) {
    $pass = md5($password);
  } elseif (empty($password) && $password == "") {
    $pass = $opassword;
  }

  $update = DB::update("users",[
    "first_name" => $fname,
    "last_name" => $lname,
    "email" => $email,
    "password" => $pass,
    "phone" => $phone,
    "about" => $about,
    "role" => $role,
    "balance" => $balance,
    "verified" => $verify,
    "status" => $status,
    "updated_at" => date("Y/m/d h:i:s A")
  ]);
  $update = DB::where(["id" => $id]);
  $update = DB::execute();

  if ($update) {
    app::success("1 row updated successfully");
    app::reload(1000);
  }
}
