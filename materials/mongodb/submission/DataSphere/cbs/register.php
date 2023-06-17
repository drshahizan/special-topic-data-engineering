<?php include "headermain.php"; ?>
<div style="padding: 5px 0; ">

  <div class="container pulse animated p-5" >


    <form class="user" method="POST" onsubmit="return formValidation()" action="registerprocess.php">
            <fieldset>
              <legend>Registration Form</legend>



              <div class="mb-3">
                <label for="IdentificationNo" class="col-lg-2 control-label">IC Number</label>
                <div class="col-auto">
                  <input name="fic" type="text" class="form-control form-control-user" id="IdentificationNo" placeholder="Please enter your IC Number without (-)" >
                </div>
              </div>


                                        <!-- IC Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorICDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorIC"> </small>
                                            </div>   
                                        </div>


                <!--- Ask for Password ---> 
                <div class="row mb-3">
                        <label for="inputPassword">Password</label>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                                <input class="form-control form-control-user" name = "fpwd" id="inputPassword" type="password" placeholder="Password" >
                          </div>

                          <div class="col-sm-6">
                                <input class="form-control form-control-user" name = "fpwd2" id="inputPassword2" type="password" placeholder="Repeat Password">
                          </div>
                </div>

                                          <!-- Password Error message --->

                                        <div class="mb-3" style="height: 15px; padding-top: 8px; padding-bottom: 5%;" id="errorPassDiv" >
                                            
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorPass"> </small>
                                            </div> 
                                             
                                        </div>
                                         <div class="mb-3" style="height: 27px; padding-bottom: 5%;" id="errorPassDiv2">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorPass2"> </small>
                                            </div>   
                                         </div>


              <div class="mb-3">
                <label for="inputName" class="col-lg-2 control-label">Name</label>
                <div class="col-auto">
                  <input name="fname" type="text" class="form-control form-control-user" id="inputName" placeholder="Please enter your Full Name" >
                </div>
              </div>


                                        <!-- Name Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorNameDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorName"> </small>
                                            </div>   
                                        </div>


              <div class="mb-3">
                <label for="inputPhone" class="col-lg-2 control-label">Contact Number</label>
                <div class="col-auto">
                  <input name="fphone" type="text" class="form-control form-control-user" id="inputPhone" placeholder="Please enter your Contact Number (Only Digits)" >
                </div>
              </div>

                                        <!-- contactNo Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorPhoneDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorPhone"> </small>
                                            </div>   
                                        </div>
              
              <div class="mb-3">
                <label for="inputAddress" class="col-lg-2 control-label">Address</label>
                <div class="col-auto">
                  <textarea name="faddress" class="form-control" rows="3" id="inputAddress"></textarea>
                  <span class="help-block">Please provide a detailed address.</span>
                </div>
              </div>

              <div style="padding: 10px 0; ">

                <div class="btn-group" style="width: 100%;" role="group" aria-label="Basic example" id="buttonGroup">
                                          
                    <button type="reset" class="btn btn-warning">Clear</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                         
                </div>



            </fieldset>

    </form>

           
  </div>

</div>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4b83">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Car Systems.Co</p>
      </div>
    </footer>

  </body>
</html>
  <?php include "js/registerWorks.php"; ?>
