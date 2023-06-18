<?php 
include 'cbssessionCustomer.php'; 
if(!session_id())
{
  session_start();
}

include 'headercustomer.php'; 
include 'dbconnect.php';

$uic = $_SESSION['uic'];

//Retrive Booking(Join)
$sql= "SELECT * FROM tb_user
       WHERE u_ic = $uic";


$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result); 


      //Define cipher 
      $cipher = "aes-256-cbc"; 

      //Generate a 256-bit encryption key 
      $encryption_key = "SDVVS4D5V1S6V1SV1S546V1S61VS5DSV1"; 

      // Generate an initialization vector 
      $iv_size = openssl_cipher_iv_length($cipher); 
      $iv = "SDVVS4D5VADASDAA";

//Decrypt data 
$decrypted_data = openssl_decrypt($row['u_pwd'], $cipher, $encryption_key, 0, $iv); 


?>           

<div class="container">
<div class="w-100" style="height: 34px;"></div>
                                        
  <div class="w-75" style="margin-left: auto; margin-right: auto;">
 
    <form class="user" method="POST" onsubmit="return formValidation()" action="editProfileProcess.php">
            <fieldset>
              <legend>Edit your Profile</legend>



              <div class="mb-3">
                <label for="IdentificationNo" class="col-lg-2 control-label">IC Number</label>
                <div class="col-auto">
                  <input name="fic" type="text" class="form-control form-control-user" id="IdentificationNo" placeholder="Please enter your IC Number without (-)" value="<?php echo $row['u_ic']; ?>">
                </div>
              </div>


                                        <!-- IC Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorICDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorIC"> </small>
                                            </div>   
                                        </div>





              <div class="mb-3">
                <label for="inputName" class="col-lg-2 control-label">Name</label>
                <div class="col-auto">
                  <input name="fname" type="text" class="form-control form-control-user" id="inputName" placeholder="Please enter your Full Name" value="<?php echo $row['u_name']; ?>">
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
                  <input name="fphone" type="text" class="form-control form-control-user" id="inputPhone" placeholder="Please enter your Contact Number (Only Digits)" value="<?php echo $row['u_phone']; ?>">
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
                  <textarea name="faddress" class="form-control" rows="3" id="inputAddress" placeholder="<?php echo $row['u_address']; ?>"></textarea>
                  <span class="help-block">Please provide a detailed address.</span>
                </div>
              </div>

      <div style="padding: 10px 0; ">

                <!--- Ask for Password ---> 
                <div class="row mb-3">
                        <label for="inputPassword">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password</label>
                          <div class="col-sm-6 mb-3 mb-sm-0">
                                <input class="form-control form-control-user" name = "fpwd" id="inputPassword" type="text" placeholder="Password" value="<?php echo $decrypted_data; ?>">
                          </div>
                          <div class="col-sm-6">
                                <input class="form-control form-control-user" name = "fpwd2" id="inputPassword2" type="text" placeholder="Repeat Password" value="<?php echo $decrypted_data; ?>">
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



              <div style="padding: 10px 0; ">

                <div class="btn-group" style="width: 100%;" role="group" aria-label="Basic example" id="buttonGroup">
                                          
                    <button type="button" id="cancelButton1" class="btn btn-warning">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                         
                </div>



            </fieldset>

    </form> </div>

                                        <div class="w-100" style="height: 34px;"></div>


                                          
           <?php include "js/profileWorks.php"; ?>                             
  </div>

</div>
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4b83">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Car Systems.Co</p>
      </div>
    </footer>

  </body>
</html>


