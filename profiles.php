<!--Author@ Nimmy Augustin-->
 <!--Date@ 15/09/18-->
 <!--A DevOps group project-->
 <!--file used by studentdisplay.php -->

 <?php include ('admin_header.php'); ?>
<?php
    include_once("config.php");
	
	echo '<div class="container">
		  <div class="row" style="padding-bottom: 25px">';
	

    if (isset($_GET['first']))
    {
        $Fname = $_GET['first'];
        $sql = "SELECT * FROM student WHERE Fname='$Fname'";
        
        $result = $conn->query($sql);		
		
        if ($result->num_rows > 0) {
            
            if($row = $result->fetch_assoc()) {
				echo '<div class="col-sm-4 col-md-4"></div>
					  <div class="col-sm-4 col-md-4">';
                echo '<h4 style="color:#14bdee;margin: 5%">'.$row["Fname"]."'s Profile</h4>";
                echo '<div class="card">
						<div class="card-body">
							<table class="table table-striped" style="color: black !important;border: 2px solid #e9ecef">';
                echo '<tr><td>UserID:</td><td>'.$row["userID"].'</td></tr>';
                echo '<tr><td>Firstname:</td><td>'.$row["Fname"].'</td></tr>';
                echo '<tr><td>Lastname:</td><td>'.$row["Lname"].'</td></tr>';
                echo '<tr><td>County:</td><td>'.$row["county"].'</td></tr>';
				echo '</table>';
				echo '</div>
				  </div>';
				echo '<button class="btn btn-primary float-left"><a style="color:white" href="admin_index.php">Admin Home</a></button>    <button class="btn btn-primary float-right"><a style="color:white" href="profiles.php">All Profiles</a></button>';
				echo '</div>';
				echo '<div class="col-sm-4 col-md-4"></div>';
							
            }
            
        }
        else {
           echo "0 results";
        }
    }
    else {
        $sql = "SELECT * FROM student";        
        $result = $conn->query($sql);
		
        if ($result->num_rows > 0) {
			echo '<div class="col-sm-3 col-md-3"></div>
				  <div class="col-sm-6 col-md-6">';
			echo '<h4 style="color:#14bdee;margin: 5%">All our students:</h4>';
			echo '<div class="card">
					<div class="card-body">
						<table class="table table-striped" style="color: black !important;border: 2px solid #e9ecef">';
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
                echo '<td>'.$row["county"].'</td>';
                echo '</tr>';                
            }
            echo '</tbody>';
            echo '</table>';
			echo '</div>
				  </div>';
			echo '<button class="btn btn-primary float-left"><a style="color:white" href="admin_index.php">Admin Home</a><button>';	  
			echo '</div>';
			echo '<div class="col-sm-3 col-md-3"></div>';
        }
        else {
           echo "0 results";
        }
    }
	echo '</div>
		  </div>';
    
    
?>
<?php include ('admin_footer.php'); ?>