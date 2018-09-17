 <!--Author@ Nimmy Augustin-->
 <!--Date@ 15/09/18-->
 <!--A DevOps group project-->
 <!--file used by studentdisplay.php -->
 
<?php 
/*
$today = date("d-m-Y");
echo "<strong>Date: ".$today."</strong>";
list ($tday, $tmonth, $tyear) = preg_split("[-]", $today);
*/
// connect to DB
$servername = "localhost";
$username = "root";
$password = "";
$database = "regdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die('<p style="color:red">'."Database connection failed: " . $conn->connect_error);
}
// END of connect to DB
?>