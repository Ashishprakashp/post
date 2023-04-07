<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
session_start();
session_destroy();
unset($_SESSION["mailid"]);
unset($_SESSION["pass"]);
unset($_SESSION["user"]);
header("Location:login.php");
?>