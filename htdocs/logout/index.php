<?php 
require $_SERVER['DOCUMENT_ROOT']."/assets/session_manager.php";
$_SESSION = array();
session_destroy();
header("Location: http://goppyworky.2kool4u.net/");
?>