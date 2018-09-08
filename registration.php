<?php include "header.php";?>

<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
            <!-- Your content Start -->

                <div id="divregistraionform" class="container" style="height: 60% !important; width: 300px;">
                <div class="section_title_container text-center">
                        <h2 class="section_title">Registration Area</h2>
                        <div class="section_subtitle"><p> Please fill out the form correctly below.</p></div>
                    </div>          <div id ="registeration_Div">
                <form class="form-register">
                    <div>
                    <div>
                        <label id="lblerror" style="display: none; color: red"> * Enter required details</label>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Name</span>
                        </div>
                        <input id="inpName" type="text" class="form-control" placeholder="Name">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Surname</span>
                            </div>
                            <input id="inpSurName" type="text" class="form-control" placeholder="Surname">
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Password</span>
                        </div>
                        <input id="inppassword" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="****">
                        </div>
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Repeat Password</span>
                                </div>
                                <input id="inppassword" type="password" class="form-control" placeholder="Repeat Password">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Date of Birth</span>
                            </div>
                            <input id="inpdate" type="date" class="form-control" placeholder="Date">
                        </div>
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Mobile</span>
                                </div>
                                <input id="inpnumber" type="number" class="form-control" placeholder="Mobile">
                        </div>
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Address</span>
                                </div>
                                <input id="inpAddress" type="text" class="form-control" placeholder="Address">
                        </div> 
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Email</span>
                                </div>
                                <input id="inpEmail" type="email" class="form-control" placeholder="Email">
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