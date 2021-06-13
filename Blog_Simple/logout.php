<?php 

include_once 'resource\session.php';
// include_once( __DIR__ .DIRECTORY_SEPARATOR."resource".DIRECTORY_SEPARATOR.'session.php');

session_destroy();

header('location:index.php');

?>v  