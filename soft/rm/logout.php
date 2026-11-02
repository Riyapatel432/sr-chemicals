<?php
include("../config.php");
session_start();
unset($_SESSION['RM']);
session_destroy();
header("Location: index");
exit;
?>
