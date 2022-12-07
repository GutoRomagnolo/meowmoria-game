<?php
$mysqli = new mysqli("localhost","root","", "meowmoria_game", 3307);

$username = $_POST['username'];

$query = 'SELECT id, user_password FROM user WHERE nickname = ?';
$stmt = $mysqli->prepare( $query );
$stmt->bind_param("s", $username);
$stmt->execute();

$stmt->bind_result($userId, $hash);
$stmt->fetch();

if (password_verify( $_POST['user_password'], $hash) ) {
   echo 'Logado';
   session_start();
   $_SESSION['valid'] = true;
   $_SESSION['timeout'] = time();
   $_SESSION['user_id'] = $row['$id'];
   header("Location: ./../select-mode/select_mode.php");
} else {
   echo 'Usuario e/ou senha invalidos';
   header("Location: login.php");
}

?>