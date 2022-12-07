<?php
header("Content-Type: application/json");

$user_id = $_POST["user_id"];
$user_full_name = $_POST["user-full-name"];
$cpf = $_POST["cpf"];
$birthday = $_POST["birthday"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$nickname = $_POST["nickname"];
$password = $_POST["password"];

try {
  $sql = $dbConnection->prepare("
    UPDATE
      users
    SET
      user_full_name = ?,
      cpf = ?,
      birthday = ?,
      email = ?,
      phone = ?,
      nickname = ?,
      password = ?
    WHERE
      id = ?
  ");
  $sql->bindParam(1, $user_full_name, PDO::PARAM_STR);
  $sql->bindParam(2, $cpf, PDO::PARAM_STR);
  $sql->bindParam(3, $birthday, PDO::PARAM_STR);
  $sql->bindParam(4, $email, PDO::PARAM_STR);
  $sql->bindParam(5, $phone, PDO::PARAM_STR);
  $sql->bindParam(6, $nickname, PDO::PARAM_STR);
  $sql->bindParam(7, $password, PDO::PARAM_STR);
  $sql->bindParam(8, $user_id, PDO::PARAM_INT);
  $sql->execute();
} catch (PDOException $exception) {
  http_response_code(500);

  $json_error = [
    error => $exception->getMessage()
  ];
  
  echo json_encode($json_error);
}
