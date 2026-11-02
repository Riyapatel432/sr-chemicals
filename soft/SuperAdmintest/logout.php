<?php
include("../config.php");
session_start();
unset($_SESSION['SuperAdmin']);
session_destroy();
header("Location: index");
exit;
?>
