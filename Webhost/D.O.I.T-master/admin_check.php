<!--Author : Renuka Allbanur-->
<!--Date : 06/09/18-->
<!--A DevOps group project-->
<!--A php file to check the credientials of the username and password-->
<?php
//Starting the session
session_start();
$server="localhost";
$dbuser="root";
$password="";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link,"admindb");

//if the form is submitted
if(isset($_POST['username']) and isset($_POST['password'])){

    //setting the username and password to their variables
    $username=$_POST['username'];
    $password=$_POST['password'];
  //querying the database
    $query="SELECT * FROM adminlogin WHERE username='$username' AND password='$password'";
    $err= "Connection Failed";
    $result=mysqli_query($link,$query) or trigger_error(mysqli_error($err));

    $count=mysqli_num_rows($result);
    
    //if the posted values are the same as the database then the session is created
    if($count==1){
        $_SESSION['username'] = $username;
        header("Location:admin_index.php");
         exit;
    }
    else {
        $_SESSION['errors'] = array("Your Username or Password have errors! Please re-enter");
        header("Location:admin_login.php");
    }

}//closes if isset
mysqli_close($link);
?> <!--closes php-->