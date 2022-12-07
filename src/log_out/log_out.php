<?php
require_once "../utils.php";

session_start();
session_unset();
session_destroy();

header("location: $url_app/login/login.php");

exit();
?>