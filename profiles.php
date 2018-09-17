<!--Author@ Nimmy Augustin-->
 <!--Date@ 15/09/18-->
 <!--A DevOps group project-->
 <!--file used by studentdisplay.php -->

<?php
    include_once("config.php");

    if (isset($_GET['first']))
    {
        $Fname = $_GET['first'];
        $sql = "SELECT * FROM studentdetails WHERE Fname='$Fname'";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
                echo '<h1>'.$row["Fname"]."'s Profile</h1>";
                echo '<table>';
                echo '<tr><td>UserID:</td><td>'.$row["userID"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["Fname"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["Lname"].'</td></tr>';
                echo '<tr><td>County:</td><td>'.$row["county/state"].'</td></tr>';
            }
            echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    else {

        echo '<h2>All our members:</h2>';

        $sql = "SELECT * FROM studentdetails";
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
   
                echo '<hr />';
                echo '<table class="table table-striped">';
                echo '<thead>
                    <tr>
                      <th scope="col">User Id</th>
                      <th scope="col">First Name</th>
                      <th scope="col">Last Name</th>
                      <th scope="col">County</th>
                    </tr>
                  </thead>';
                echo '<tbody>';
            while($row = $result->fetch_assoc()) {
                
                echo '<tr>';
                echo '<td>'.$row["userID"].'</td>';
                echo '<td>'.$row["Fname"].'</td>';
                echo '<td>'.$row["Lname"].'</td>';
                echo '<td>'.$row["county/state"].'</td>';
                echo '</tr>';
                
            }
            echo '</tbody>';
                echo '</table>';
        }
        else {
           echo "0 results";
        }
    }
    
    include_once("menu.php");
?>
