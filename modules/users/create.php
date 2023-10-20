<?php
require_once "../../classes/app.php";
require_once "../../classes/database.php";

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
  $fname = app::post('fname', ["tags", "entities", "chars"]);
  $lname = app::post('lname', ["tags", "entities", "chars"]);
  $email = app::post('email', ["tags", "entities", "chars"]);
  $password = app::post('password', ["tags", "entities", "chars"]);
  $phone = app::post('phone', ["tags", "entities", "chars"]);
  $about = app::post('about', ["tags", "entities", "chars"]);
  $role = app::post('role', ["tags", "entities", "chars"]);
  $balance = app::post('balance', ["tags", "entities", "chars"]);
  $verify = app::post('verify', ["tags", "entities", "chars"]);
  $status = app::post('status', ["tags", "entities", "chars"]);


  if(DB::exists("users", ["id"], ["email" =>  $email])) {
    message::error("This email address aleady exists");
  } else {
    $create = DB::insert("users",[
      "first_name" => $fname,
      "last_name" => $lname,
      "email" => $email,
      "password" => md5($password),
      "phone" => $phone,
      "about" => $about,
      "role" => $role,
      "balance" => $balance,
      "verified" => $verify,
      "status" => $status,
      "created_at" => date("Y/m/d h:i:s A"),
      "updated_at" => date("Y/m/d h:i:s A")
    ]);
    $create = DB::execute();
    
    if ($create) {
      app::reload(1000);
      app::success("1 row created successfully");
    }
  }
}
