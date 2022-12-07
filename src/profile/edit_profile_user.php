<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);
session_start();

require("./../database.php");

$user_id = $_SESSION["userId"] ?? "";
$user_full_name = $_POST['user_full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$user_password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);;

if (!$user_id) {
  echo 'you_need_sign_up';
  exit();
}

$sql = "
  UPDATE
    user
  SET
    user_full_name = '$user_full_name',
    email = '$email',
    phone = '$phone',
    user_password = '$user_password'
  WHERE
    id = $user_id
";

if ($dbConnection->query($sql)) {
  echo 'successfully_update';
}

$dbConnection = null;

exit();
?>