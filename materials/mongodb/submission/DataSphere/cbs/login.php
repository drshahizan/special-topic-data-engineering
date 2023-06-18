<?php include "headermain.php"; ?>

<div style="padding: 20px 0; ">

  <div class="container pulse animated p-5" >


    <form class="user" method="POST" onsubmit="return formValidation()" action="loginprocess.php">
            <fieldset>
              <legend>Login</legend>



              <div class="mb-3">
                <label for="IdentificationNo" class="col-lg-2 control-label">IC Number</label>
                <div class="col-auto">
                  <input name="fic" type="text" class="form-control form-control-user" id="IdentificationNo" placeholder="Enter your IC Number without (-)" >
                </div>
              </div>

                                        <!-- IC Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorICDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorIC"> </small>
                                            </div>   
                                        </div>

              <div class="mb-3">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-auto">
                  <input type="password" name = "fpwd" class="form-control form-control-user" id="inputPassword" placeholder="Enter your Password" >
              </div>
              </div>

                                                        <!-- Password Error message --->

                                        <div class="mb-3" style="height: 15px; padding-top: 8px; padding-bottom: 5%;" id="errorPassDiv" >
                                            
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorPass"> </small>
                                            </div> 
                                             
                                        </div>


<div style="padding: 10px 0; "></div>  
                 <div class="btn-group" style="width: 100%;" role="group" aria-label="Basic example" id="buttonGroup">
                                          
                    <button type="reset" class="btn btn-warning">Clear</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                         
                </div>

            </fieldset>

    </form>

         
  </div>

</div>
<?php include "js/loginWorks.php"; ?>

  <?php include "footer.php"; ?>
  