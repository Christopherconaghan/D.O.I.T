@ Author: Mary Walsh McGinty
@ Date: 12/9/18
@ Desc: A PHP file to add course selected  to the database

<?php include "header.php";?>
<?php
session_start()
?>
<?php
 $server="localhost";
 $dbuser="root";
 $password="Database";
 $link=mysqli_connect($server,$dbuser,$password);
 mysqli_select_db($link,"regdb");


 $courseID=$_POST["courseID"];
 $courseName=$_POST["courseName];


  $sql_insert = "INSERT INTO coursedetails(courseID, courseName)
   VALUES('$courseID','$courseName');
   if(mysqli_query($link,$sql_insert))
    {
        echo"<h3> Congratulations! You are now registered your course</h3>";
        echo "<a href='index.php' class='btn btn-lg btn-success btn-block'>Main Page</a>";
    }
    else {
        echo "Sorry that did not go through, an error has occured";
        echo "Please try again.";
    }

 mysqli_close($link);
    ?><!--close PHP-->
    <?php include "footer.php";?> 