<?php 
include 'cbssessionAdmin.php'; 
if(!session_id())
{
  session_start();
}

include 'headeradmin.php'; 
include 'dbconnect.php';


//Get Booking ID
If(isset($_GET['id']))
{
  $vid = $_GET['id'];
}

//Retrive Booking Based on ID
$sql = "SELECT * FROM tb_vehicle WHERE v_reg = '$vid'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$path = "img/";
?>

<div class="container">
  <div class="row">
    <div class="col-sm-3">

                  <div class="u-container-style u-layout-cell u-right-cell u-similar-fill u-size-20 u-size-20-md u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3" style="border-color: #333333; border-width: 1px; ">
                      <img class="u-expanded-width u-image u-image-3" src="<?php echo $path.$row['v_pic']; ?>">
                      <h3 class="u-custom-font u-font-patua-one u-text u-text-5"><?php echo $row['v_reg']; ?></h3> 
                      <p class="u-text u-text-6"><?php echo $row['v_model']; ?><br><?php echo $row['v_type']; ?><br>RM<?php echo $row['v_price']; ?></p>

                    </div>
                  </div>

  </div>
    <div class="col-sm-1"> </div>
    <div class="col-sm-6">
      
      
        <fieldset>

          <legend>Vehicle Details</legend>

          <br>

            
            


                                   <form class="user" name="RegForm" method="POST"  onsubmit="return formValidation()" enctype="multipart/form-data" action="<?php echo "modifyCarprocess.php?id=$vid"; ?>">
                  
                  <label for="inputName" class="form-label form-control-user">Vehicle Model</label>

                                        <!--- Ask for name ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="fname" type="text" id="inputName" placeholder="Vehicle Model" value="<?php echo $row['v_model']; ?>">
                                        </div>

                                        <!-- Name Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorNameDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorName"> </small>
                                            </div>   
                                        </div>

                  <label for="inputSeats" class="form-label form-control-user">Vehicle Seats</label>

                                        <!--- Ask for seats ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="fseats" type="number" id="inputSeats" placeholder="Number of Seats" value="<?php echo $row['v_seat']; ?>">
                                        </div>

                                        <!-- Seats Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorSeatDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorSeat"> </small>
                                            </div>   
                                        </div>


                  <label for="inputType" class="form-label form-control-user">Vehicle Type</label>
                                        
                                        <!--- Ask for type ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="ftype" type="text" id="inputType" placeholder="Vehicle Type" value="<?php echo $row['v_type']; ?>">
                                        </div>

                                        <!-- Type Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorTypeDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorType"> </small>
                                            </div>   
                                        </div>



                  <label for="inputReg" class="form-label form-control-user">Vehicle Registered Plate Number</label>
                                        
                                        <!--- Ask for Reg ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="freg" type="text" id="inputReg" placeholder="Vehicle Registration Plate Number" value="<?php echo $row['v_reg']; ?>">
                                        </div>

                                        <!-- Type Reg message --->

                                        <div class="mb-3" style="height: 27px;" id="errorRegDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorReg"> </small>
                                            </div>   
                                        </div>

                    <label for="inputPrice" class="form-label form-control-user">Vehicle Price to Rent</label>

                                        <!--- Ask for price ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="fprice" type="number" id="inputPrice" placeholder="Price of car" value="<?php echo $row['v_price']; ?>">
                                        </div>

                                        <!-- Price Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorPriceDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorPrice"> </small>
                                            </div>   
                                        </div>




                                        <div class="mb-3">
                                            <label class="form-label form-control-user">Vehicle Picture</label>
                                            
                                            <input class="border rounded-0 border-secondary form-control" type="file" name="file">
                                            <small class="form-text">File must be less than 30MB</small><br>
                                            <small class="form-text">Dont upload a picture if you dont want to update the picture</small><br>

                                        </div>


                                        <div class="w-10" style="height: 15px;"></div>


                      <div class="btn-group"  role="group" style="width: 100%;" aria-label="Basic example">

                                        <button id ="myBtn2"  class="btn btn-warning d-block btn-user w-100" data-bss-hover-animate="pulse" type="button">Delete</button>

                                        <button id ="myBtn1"  class="btn btn-primary d-block btn-user w-100" data-bss-hover-animate="pulse" type="button">Modify</button><!--name="submit"-->
                      </div>

                                        <?php include 'modifyCarOverlay.php';  ?>



                                        <hr>

                                    </form>
          


 <script src="js/createCarWorks.js"></script>

    </div>
  </div>
</div>




    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4b83" style="height: 140px;">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Car Systems.Co</p>
      </div>
    </footer>

  </body>
</html>


<?php include 'deleteCarOverlay.php';  ?>