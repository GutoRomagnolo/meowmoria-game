<?php
ini_set("display_errors", "on");
error_reporting(E_ALL);
session_start();

require("./../database.php");

$user_id = $_SESSION["userId"] ?? "";

if (!$user_id) {
  echo 'you_need_sign_up';
  exit();
}

$sql = "
  SELECT
    *
  FROM
    user
  WHERE
    id = $user_id
";

$stmt = $dbConnection->query($sql);

if ($stmt) {
  echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}

$dbConnection = null;

exit();
?>