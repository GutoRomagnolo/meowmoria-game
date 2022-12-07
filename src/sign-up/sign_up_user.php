<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);
session_start();

require("./../database.php");

$user_full_name = $_POST['user_full_name'];
$cpf = $_POST['cpf'];
$birthday = $_POST['birthday'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$nickname = $_POST['nickname'];
$hash = password_hash($_POST['user_password'], PASSWORD_DEFAULT);

$usersWithSameCPF = $dbConnection->query("SELECT * FROM user WHERE cpf = '$cpf'");

if ($usersWithSameCPF->rowCount()) {
  echo 'same_cpf_sign_up';
  exit();
}

$sql = "INSERT INTO user(
    user_full_name,
    cpf,
    birthday,
    email,
    phone,
    nickname,
    user_password
  ) VALUES (
    '$user_full_name',
    '$cpf',
    '$birthday',
    '$email',
    '$phone',
    '$nickname',
    '$hash'
)";

if ($dbConnection->query($sql)) {
  $_SESSION["userId"] = $dbConnection->lastInsertId();
  echo 'successfully_sign_up';
}

$dbConnection = null;

exit();
?>