<?php 
    include "header.php";
?>

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
            <!-- Your content Start -->
<!-- <?php echo $_SESSION['userID']?> -->
                <div id="divregistraionform" class="container" style="height: 60% !important; width: 400px;">
                <div class="section_title_container text-center">
                        <h2 class="section_title">Registration Area</h2>
                        <div class="section_subtitle"><p> Please fill out the form correctly below.</p></div>
                    </div>          <div id ="registeration_Div">
                <form action ="registerStudent.php" method="POST" class="form-register">
                    <div>
                    <div>
                        <label id="lblerror" style="display: none; color: red"> * Enter required details</label>
                    </div>
                    <div class="form-group">
                    <div class="input-group-addon mb-3 ">
                        <div class="input-group-prepend">
                            <span class="input-group-text pr-3">First name  </span>
                        </div>
                        <input id="inpName" type="text"  name="Fname" required class="form-control ml-4" placeholder="Name">
                        </div>
                        <div class="input-group-addon mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text pr-4">Surname  </span>
                            </div>
                            <input id="inpSurName" type="text" name="Lname" required class="form-control ml-4" placeholder="Surname">
                        </div>
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pr-3">Address 1</span>
                                </div>
                                <input type="text" name="street" required class="form-control ml-4" required="required" id="inpStreet"  placeholder="Street">
                        </div> 
                        
                      
                       <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pr-3">Address 2</span>
                                </div>
                                <input id="inpAddress2" type="text" name="village" required class="form-control ml-4"    placeholder="Address 2">
                        </div>
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pr-3">Town/City</span>
                                </div>
                                <input type="text" name="town" required class="form-control ml-4" required="required" id="inpAddress"  placeholder="Town">
                        </div> 
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">County/State</span>
                                </div>
                                <input type="text" name="county" required class="form-control ml-3" required="required" id="inpCounty"  placeholder="County">
                        </div> 
                       
                       <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text  pr-4">Email</span>
                                </div>
                                <input id="inpEmail" type="email" name="email" required class="form-control ml-5" required="required" placeholder="any@email.any">
                        </div>
                       <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pr-3">Mobile</span>
                                </div>
                                <input id="inpnumber" type="number" name="phone" required class="form-control ml-5"  placeholder="Mobile">
                        </div>
                       
                        
						 <div class="input-group-addon mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date of Birth</span>
                            </div>
                            <input id="inpdate" type="text" name="dob" required class="form-control ml-4 " required="required"  placeholder="yyyy/mm/dd">
                        </div>
						 <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="custom-file ">Upload Image</span>
                                </div>
                                <input type="text" name="pic" class="form-control-file ml-3" id="imageID" placeholder="Choose file path">
                        </div>
                       <div class="input-group-addon mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text pr-3" id="pswd">Password</span>
                        </div>
                        <input id="inppassword" type="password"  name="passwd" required class="form-control ml-4" placeholder="Password" aria-label="Password" aria-describedby="****">
                        </div>
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text pr-5">Repeat </span>
                                </div>
                                <input id="inppassword" type="password" required class="form-control ml-3" placeholder="Repeat Password" oninput="check(this)">
                                    <script>
                                    function check(input) { 
                                        //input not valid
                                        if (input.value !=document.getElementById('inppassword').value) {
                                            input.setCustomValidity('Passwords are not matching !');
                                        }
                                        else{
                                            //input is valid
                                            input.setCustomValidity('');
                                        }
                                    }
                                </script>
                        </div>
                       
                       
                        <div class="row">
                    <div class="col">
					<input type="submit" name="submit" value= "Register"class="courses_button trans_200" />
                        <!--<div class="courses_button trans_200"><a href="courseSelection.php">Register</a></div>-->
                    </div>
                </div>
                    </div>
                    <span class="psw"><a href="login.php" onclick="openregistrationform()">Already have account?</a></span>
                    </div> 
                </form>
            </div>
            </div>
              



            <!-- Your content end -->
            </div>
        </div>
    </div>
</div>




<?php include "footer.php";?>