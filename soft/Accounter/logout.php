<?php
include("../config.php");
session_start();
unset($_SESSION['Accounter']);
session_destroy();
header("Location: index");
exit;
?>
