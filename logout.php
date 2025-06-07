<?php
session_start();
session_destroy();
header("Location: login.php"); // Redirect alla pagina di login
exit;
?>