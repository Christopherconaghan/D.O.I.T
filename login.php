<!--Author : Renuka Allbanur-->
<!--A DevOps group project-->

<?php include "header.php";?>
<div class="news">
    <div class="container">
    <div class="row">
            <div class="col">
            <!-- Your content Start -->
           
     <h2 class="section_title text-center">Login Area</h2>
       
    <?php
     $server="localhost";
     $dbuser="root";
     $password="Database";
     $link=mysqli_connect($server,$dbuser,$password);
     mysqli_select_db($link,"regdb");
     mysqli_close($link);
     ?><!--closes mysql-->
      <!--start php session-->
<?php
 if(empty($_SESSION['errors']))
                session_start();
            if (isset($_SESSION['errors'])) {
                echo "<div class='form-errors' 'mx-auto>";
                foreach ($_SESSION['errors'] as $error) {
                   
                    echo "<p class='text-danger mx-auto text-center'>";
                    echo $error;
                    echo "</p>";
                }
                echo "</div>";
            }
            unset($_SESSION['errors']);
            ?><!--closes php-->      
                
  <form  action="login_check.php"  method="POST" class="form-signin">
          <div  style="height: 60% !important; width: 300px;  margin-left: auto; margin-right: auto;">
          <div>
             <label id="lblerror" style="display: none; color: red"> * Enter required details</label>
          </div>
         <div class="form-group text-body">
         <!-- <div class="input-group mb-3">-->
              <label for="userName">Username</label>
              <input id="inpusername" type="text" name="userID"  class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
         </div>
         <div class="form-group text-body">
              <label for="password">Password</label>
              <input id="inppassword" type="password"  name="passwd" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="****">
         </div>
                            
          <div class="form-group">
               <button class="btn btn-lg btn-success btn-block" type="submit" value="Signin">Sign in</button>
               <button class="btn btn-lg btn-primary btn-block" type="submit" value="Submit">Register</button>
         </div>  
               <span class="psw"><a href="#" onclick="togglesigninandaccountresetsection()">Forgot Password?</a></span>
  
                </div> 
      </div> 
                </form>

           

            <!-- Your content end -->
            </div>
        </div>
    </div>
</div>




<?php include "footer.php";?>
