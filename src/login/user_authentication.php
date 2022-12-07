<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);

session_start();

require_once "./../utils.php";
require("./../database.php");

$user_name = $_POST["user_name"];

$sql = $dbConnection->prepare('
  SELECT
    id, user_password
  FROM
    user
  WHERE
    nickname = ?
  LIMIT
    1
');
$sql->bindParam(1, $user_name, PDO::PARAM_INT);
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);

$db_user_password = $result["user_password"] ?? "";
$user_password = $_POST["user_password"] ?? "";

if ($result) {
  if (password_verify($user_password, $db_user_password)) {
    echo 'successfully_init_session';
    $_SESSION['userId'] = $result["id"];
    exit();
  }
}

echo 'user_or_password_incorrect';

$dbConnection = null;
?>