 <!--Author@ Nimmy Augustin-->
 <!--Date@ 15/09/18-->
 <!--A DevOps group project-->
 <!--file used by studentdisplay.php -->
 
<?php 
//display all users
include_once("config.php");


$sql = "SELECT * FROM studentdetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table>';
    while($row = $result->fetch_assoc()) {
        $Fname = $row["Fname"];
        echo '<tr><td font size:160%><a href="profiles.php?first='.$Fname.'">'.$Fname.'</a><br /></td></tr>';
    }
    echo '</table>';
}
else {
    echo "0 results";
}
include_once("menu.php");
?>