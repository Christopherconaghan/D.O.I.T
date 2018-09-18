 <!--Author@ Nimmy Augustin-->
 <!--Date@ 15/09/18-->
 <!--A DevOps group project-->
 <!--php file used by studentdisplay.php -->


<h1>Search by County</h1>
<form action="search.php" method="post" enctype="multipart/form-data">
    County:  <input type="text" name="userID" value="" placeholder="" size="20">
    <input type="submit" value="Search" name="submit">
</form>

<?php 

include_once("config.php");

    if (isset($_POST['userID']))
    {
        $userID = $_POST['userID'];
        
        $sql = "SELECT * FROM studentdetails WHERE 'userID' ='$userID';";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
   ?>

   <h3>Search results:</h3>

   <?php
            while($row = $result->fetch_assoc()) {
                echo '<table>';
                echo '<tr><td>UserID:</td><td>'.$row["userID"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["Fname"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["Lname"].'</td></tr>';
                echo '<tr><td>County:</td><td>'.$row["county/state"].'</td></tr>';
                echo '</table>';
                echo '<hr />';
            }
        }
        else {
           echo "0 results";
        }
    }
    include_once("menu.php");

?>