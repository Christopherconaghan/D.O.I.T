<?php include "header.php";?>


<div class="news">
    <div class="container">
        <div class="row">
            <div class="col">
            <!-- Your content Start -->

                <div class="section_title_container text-center">
                    <h2 class="section_title">Login Area</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
                </div>
                
                
                <form class="form-signin">
                    <div  style="height: 60% !important; width: 300px;  margin-left: auto; margin-right: auto;">
                        <div>
                            <label id="lblerror" style="display: none; color: red"> * Enter required details</label>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">ID</span>
                        </div>
                        <input id="inpusername" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">key</span>
                        </div>
                        <input id="inppassword" type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="****">
                        </div>
                        </div>      
                        <div class="form-group">
                        <button class="btn btn-lg btn-success btn-block" type="submit"onclick="validatedata()">Sign in</button>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
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