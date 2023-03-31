<?php
session_start();
echo "Vous avez été déconnecté.";
session_unset();
session_destroy();
setcookie('auth_token', '', time() - 3600);
header("Location: login.php");

?>