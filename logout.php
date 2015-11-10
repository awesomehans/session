<?php
session_start();
session_destroy();
$_SESSION = array();
// delete the cookie.
header('Location: login.php');