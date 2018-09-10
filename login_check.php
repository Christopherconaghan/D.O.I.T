<!--A php file to check the credientials of the username and password-->
<?php
//Starting the session
session_start();
$server="localhost";
$dbuser="root";
$password="Database";
$link=mysqli_connect($server,$dbuser,$password);
mysqli_select_db($link,"regdb");

//if the form is submitted
if(isset($_POST['userID']) and isset($_POST['passwd'])){

    //setting the username and password to their variables
    $username=$_POST['userID'];
    $password=$_POST['passwd'];
  //querying the database
    $query="SELECT * FROM user WHERE userID='$username' AND passwd='$password'";
    $err= "Connection Failed";
    $result=mysqli_query($link,$query) or trigger_error(mysqli_error($err));

    $count=mysqli_num_rows($result);
    
    //if the posted values are the same as the database then the session is created
    if($count==1){
        $_SESSION['userID'] = $username;
        header("Location:courseDetail.php");
         exit;
    }
    else {
        $_SESSION['errors'] = array("Your Username or Password have errors! Please re-enter");
        header("Location:login.php");
    }

}//closes if isset
mysqli_close($link);
?> <!--closes php-->