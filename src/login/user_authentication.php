<?php
$username = $_POST['username'];
$user_password = $_POST['user_password'];

$connect = mysqli_connect("localhost","root","", "meowmoria_game", 3307);
$db = mysqli_select_db($connect, "meowmoria_game");
$check = mysqli_query($connect, "SELECT id FROM user WHERE nickname = '$username' AND user_password = '$user_password'");

if (mysqli_num_rows($check)<=0) {
    header("Location: login.php");
    echo"<script type='text/javascript'>
    showMessage()</script>";
} else {
    session_start();
    $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['user_id'] = $row["$id"];
    header("Location: ./../select-mode/select_mode.php");
}

?>