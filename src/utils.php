<?php
$url_app = 'http://localhost/meowmoria-game/src';

function verify_exists_session() {
    global $url_app;
    if (!isset($_SESSION["userId"])) {
        header("location: $url_app/login/login.php");
    }
}

function avoid_start_session() {
    global $url_app;
    if (isset($_SESSION["userId"])) {
        header("location: $url_app/select-mode/select_mode.php");
    }
}
?>