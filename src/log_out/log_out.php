<?php
setcookie($userId, "", time())-3600;
Header("Location: ./../login/login.php");

?>