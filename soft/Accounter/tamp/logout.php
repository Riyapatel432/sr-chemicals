<?php
include("../config.php");
session_start();
unset($_SESSION['companystore']);
session_destroy();
header("Location: index");
exit;
?>
