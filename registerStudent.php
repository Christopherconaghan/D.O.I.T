<!-- @ Author: Mary Walsh McGinty
@ Date: 2/9/18
@ Desc: A PHP file to add registration data to the database -->
<?php include "header.php";?>
<?php
 $server="localhost";
 $dbuser="root";
 $password="";
 $link=mysqli_connect($server,$dbuser,$password);
 mysqli_select_db($link,"regdb");

    $Fname=$_POST["Fname"];
    $Lname=$_POST["Lname"];
    $street=$_POST["street"];
    $village=$_POST["village"];
    $town=$_POST["town"];
    $county=$_POST["county"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $dob=$_POST["dob"];
    $pic=$_POST["pic"];
    $passwd=$_POST["passwd"];
$sql_insert1="INSERT INTO student (Fname,Lname,street,village,town,county,email,phone,dob,pic)
 VALUES('$Fname','$Lname','$street','$village','$town','$county','$email','$phone','$dob','$pic')";

   $sql_insert2= "INSERT INTO user (passwd) VALUES('$passwd')";

   $sql="UPDATE user SET userID= concat(userID,ID)";


    if(mysqli_query($link,$sql_insert1))
    {
       // echo"<p> Congratulations! You are now registered</p>";
       echo"<a href='index.php' class='btn btn-sm btn-success btn-block'>Main Page</a>";
    }
    else {
        echo "Sorry that did not go through, an error has occured  ";
        
		}
   if(mysqli_query($link,$sql_insert2))
    {
		//header("Location:index.php");
        echo"<h4> Congratulations! You have now created your account.<br> Take note of your password !</h4>";
        //echo "<a href='index.php' class='btn btn-sm btn-success btn-block'>Main Page</a>";
    }
    else {
        
		  echo "With your password";
        }
        if(mysqli_query($link,$sql))
        {
            echo " ";
         } 
            else {
                echo " an error has occured  ";
                
                }
	
    mysqli_close($link);
    ?><!--close PHP-->
    <?php include "footer.php";?> 