<?php include "header.php";?>

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
            <!-- Your content Start -->

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
                            <span class="input-group-text">First name  </span>
                        </div>
                        <input id="inpName" type="text" class="form-control" placeholder=" Name">
                        </div>
                        <div class="input-group-addon mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Surname  </span>
                            </div>
                            <input id="inpSurName" type="text" class="form-control" placeholder=" Surname">
                        </div>
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address 1</span>
                                </div>
                                <input type="text"  class="form-control" required="required" id="inpAddress"  placeholder="Address">
                        </div> 
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address 2</span>
                                </div>
                                <input type="text"  class="form-control" required="required" id="inpAddress"  placeholder="Address">
                        </div> 
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Town/City</span>
                                </div>
                                <input type="text"  class="form-control" required="required" id="inpAddress"  placeholder="Town">
                        </div> 
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">County</span>
                                </div>
                                <input type="text"  class="form-control" required="required" id="inpAddress"  placeholder="Address">
                        </div> 
                       
                        <div class="input-group-addon mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date of Birth</span>
                            </div>
                            <input id="inpdate" type="date" class="form-control" required="required"  placeholder="Date">
                        </div>
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Mobile</span>
                                </div>
                                <input id="inpnumber" type="number" class="form-control"  placeholder="Mobile">
                        </div>
                       
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email</span>
                                </div>
                                <input id="inpEmail" type="email" class="form-control" required="required" placeholder="any@email.any">
                        </div>
                        <div class="input-group-addon mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="pswd">Password</span>
                        </div>
                        <input id="inppassword" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="****">
                        </div>
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Repeat Password</span>
                                </div>
                                <input id="inppassword" type="password" class="form-control" placeholder="Repeat Password" oninput="check(this)">
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
                        <div class="input-group-addon mb-3">
                                <div class="input-group-prepend">
                                    <span class="custom-file">Upload Image</span>
                                </div>
                                <input type="file" class="form-control-file" id="imageID" placeholder="Choose file">
                        </div>
                       
                        <div class="row">
                    <div class="col">
                        <div class="courses_button trans_200"><a href="courseSelection.php">Register</a></div>
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