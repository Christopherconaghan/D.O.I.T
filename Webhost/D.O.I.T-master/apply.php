<?php
session_start();
 $server="localhost";
 $dbuser="root";
 $password="";
 $link=mysqli_connect($server,$dbuser,$password);
 mysqli_select_db($link,"regdb");


 if(isset($_POST['userID'])) { 
        $username = $_POST['userID'];
        echo $_SESSION['userID'];
        $query = "UPDATE user SET courseID='Applied' where userID={$_SESSION['userID']}";

        $select_user_query = mysqli_query($connection ,$query);

        if(!$select_user_query) {
            die("Error in Query". mysqli_error($connection));
        }
        else
        {
                header("Location: ../cloudTechDetail.php");
        } 
    }
?>