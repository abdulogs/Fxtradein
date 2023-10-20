<?php
require_once "../../classes/app.php";
require_once "../../classes/database.php";
require_once "../../classes/email.php";

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

  $fname = app::post('fname', ["tags", "entities", "chars"]);
  $lname = app::post('lname', ["tags", "entities", "chars"]);
  $email = app::post('email', ["tags", "entities", "chars"]);
  $password = app::post('pass', ["tags", "entities", "chars"]);
  $token = md5(time().date("y-m-d"));


  if(DB::exists("users", ["id"], ["email" =>  $email])) {
      app::error("This email address already exists");
    } else {

    $user = DB::insert("users", [
      "first_name" => $fname,
      "last_name" => $lname,
      "email" => $email,
      "password" => md5($password),
      "role" => 0,
      "verified" => 0,
      "status" => 0,
      "created_at" => date("Y/m/d h:i:s A"),
      "updated_at" => date("Y/m/d h:i:s A")
    ]);
    $user = DB::execute();
    $user = DB::lastid();

    $verify = DB::insert("verify_account", [
      "token" => $token,
      "user_id" => $user,
      "created_at" => date("Y/m/d h:i:s A"),
    ])::execute();

    if($verify){
      $mail = mailer::template("verify-account");
      $mail = mailer::file("../../email/basic");
      $mail = mailer::fullname($fname." ".$lname);
      $mail = mailer::sender(app::getEmail());
      $mail = mailer::reciever($email);
      $mail = mailer::subject("Verify your account");
      $mail = mailer::web("Fxtradein");
      $mail = mailer::logo("assets/images/logo.jpg");
      $mail = mailer::title("Verify account");
      $mail = mailer::description("Click on the link given below");
      $mail = mailer::btn("Click");
      $mail = mailer::btnRedirect("account-verify.php?token=".$token."&uid=".$user);
      $mail = mailer::send();

      if ($user && $mail) {
        app::success("Account created successfully");
        app::redirect("email-sent.php", 1000);
        }
    }
  }   
}
