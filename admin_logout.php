<?php
session_start();
unset($_SESSION["username"]);
session_destroy();
header("location:admin_login.php?q=6");