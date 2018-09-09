@ Author: Mary Walsh McGinty
@ Date: 2/9/18
@ Desc: A PHP file to log out closing the Session


<?php 
Session_start();
unset($_SESSION['userID']);
session_destroy();
header("Location:index.php");
exit;
?><!--close php-->