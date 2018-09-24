<!--A php file to check the credentials of the userID and password-->
<?php
//session_start();
$server="localhost";
 $dbuser="root";
 $password="";
 $link=mysqli_connect($server,$dbuser,$password);
 mysqli_select_db($link,"regdb");

//session needs started as no header included

//if the form is submitted
if(isset($_POST['userID']) and isset($_POST['passwd'])){


	 $userID = mysqli_real_escape_string($link, $_POST["userID"]);  
     $password = mysqli_real_escape_string($link, $_POST["passwd"]);  
     $query = "SELECT * FROM user WHERE userID = '$userID'";  
     $result = mysqli_query($link, $query);  
     if(mysqli_num_rows($result) > 0)  
		{  
        while($row = mysqli_fetch_array($result))  
        {  
            if(password_verify($password, $row["passwd"]))  
            {  
                //return true;  
                $_SESSION["username"] = $username;  
                header("location:courseSelection.php");  
            } 
			
            else  
            {  
				//return false;  
				echo '<script>alert("Wrong User Details")</script>';  
            }  
        }  
    }  
	
	else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           } 


}//closes if isset
mysqli_close($link);
?> <!--closes php-->