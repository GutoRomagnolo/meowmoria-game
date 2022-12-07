<?php
setcookie($userId, "", time())-3600;
Header("Location: ./../login/login.php");

?>

   <!-- session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["user_passwordpassword"]);
   
   echo 'You have cleaned session';
   header('Refresh: 2; URL = login.php'); -->
