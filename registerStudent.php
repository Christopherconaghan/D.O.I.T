@ Author: Mary Walsh McGinty
@ Date: 2/9/18
@ Desc: A PHP file to add registration data to the database
<?php include "header.php";?>
<?php
 $server="localhost";
 $dbuser="root";
 $password="Database";
 $link=mysqli_connect($server,$dbuser,$password);
 mysqli_select_db($link,"regdb");

    $fname=$_POST["Fname"];
    $lname=$_POST["Lname"];
    $add1=$_POST["add1"];
    $add2=$_POST["add2"];
    $town=$_POST["town"];
    $county=$_POST["county"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $dob=$_POST["DOB"];
    $image=$_POST["Image"];
   
    $sql_insert ="INSERT INTO studentdetails(Fname,Lname,add1,add2,town,county,email,phone,DOB,Image)
    VALUES('$fname','$lname','$add1','$add2','$town','$county','$email','$phone','$dob','$image')";

	$passwd=$_POST["passwd"];
	$sql_insert= "INSERT INTO user (passwd)  VALUES('$passwd')";

    if(mysqli_query($link,$sql_insert))
    {
		header("Location:index.php");
        echo"<h3> Congratulations! You are now registered</h3>";
        ///echo "<a href='index.php' class='btn btn-lg btn-success btn-block'>Main Page</a>";
    }
    else {
        echo "Sorry that did not go through, an error has occured";
        echo "Please try again.";
    }
    mysqli_close($link);
    ?><!--close PHP-->
    <?php include "footer.php";?> 