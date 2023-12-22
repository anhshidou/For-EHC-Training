<?php
    setcookie("username", "", time() - (86400 * 7 + 3600),"/");
    setcookie("password", "", time() - (86400 * 7 + 3600),"/");
    header("location:login.php");
?>