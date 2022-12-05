<?php
session_start();
include("database.php");

$user_full_name = mysqli_real_escape_string($dbConnection, ($_POST['user_full_name']));
$cpf = mysqli_real_escape_string($dbConnection, ($_POST['cpf']));
$birthday = mysqli_real_escape_string($dbConnection, ($_POST['birthday']));
$email = mysqli_real_escape_string($dbConnection, ($_POST['email']));
$phone = mysqli_real_escape_string($dbConnection, ($_POST['phone']));
$nickname = mysqli_real_escape_string($dbConnection, ($_POST['nickname']));
$password = mysqli_real_escape_string($dbConnection, ($_POST['user_password']));

$sql = "select count(*) as total from user where cpf = '$cpf'";
$result = mysqli_query($dbConnection, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['total'] == 1){
    $_SESSION['user_exists'] = true;
    header("Location: sign_up.html"); 
    exit();
}

$sql = "INSERT INTO user (user_full_name, cpf, birthday, email, phone, nickname, user_password) VALUES ('$user_full_name', '$cpf', '$birthday', '$email', '$phone', '$nickname', '$user_password')";

if($dbConnection->query($sql) === TRUE){
    $_SESSION['status_signup'] = true;
}

$dbConnection->close();

header("Location: sign_up.html"); 
exit();
?>