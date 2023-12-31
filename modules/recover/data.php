<?php
require_once "../../classes/app.php";
require_once "../../classes/database.php";


if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

  $id = app::post('uid', ["tags", "entities", "chars"]);
  $token = app::post('token', ["tags", "entities", "chars"]);
  $password = app::post('password', ["tags", "entities", "chars"]);

  if(!DB::exists("verify_email", ["user_id"], ["user_id" =>  $id, "token" =>  $token])) {
    app::error("Something went wrong");
  } else {
  $update = DB::update("users", [
    "password" => md5($password),
    "updated_at" => date("Y/m/d h:i:s A"),
  ]);
  $update = DB::where(["id" => $id]);
  $update = DB::execute();

  DB::delete("verify_email")::where(["user_id" => $id])::execute();

  if ($update) {
    app::success("Password change successfully");
    app::redirect("login.php", 1000);
    }
  }
}
