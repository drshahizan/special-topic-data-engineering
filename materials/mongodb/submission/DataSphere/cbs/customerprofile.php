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
?>




<div class="container">

  <div style="padding: 10px 0; ">

    <form class="user">
            <fieldset>
              <legend>Profile of <?php echo $row['u_name']; ?></legend>



              <div class="mb-3">
                <label for="IdentificationNo" class="col-lg-2 control-label">IC Number</label>
                <div class="col-auto">
                  <input name="fic" type="text" class="form-control form-control-user" id="IdentificationNo" placeholder="Please enter your IC Number without (-)" value="<?php echo $row['u_ic']; ?>" readonly>
                </div>
              </div>


   
    
              <div class="mb-3">
                <label for="inputPhone" class="col-lg-2 control-label">Contact Number</label>
                <div class="col-auto">
                  <input name="fphone" type="text" class="form-control form-control-user" id="inputPhone" placeholder="Please enter your Contact Number (Only Digits)" value="<?php echo $row['u_phone']; ?> " readonly>
                </div>
              </div>


              
              <div class="mb-3">
                <label for="inputAddress" class="col-lg-2 control-label">Address</label>
                <div class="col-auto">
                  <textarea name="faddress" class="form-control" rows="3" id="inputAddress" placeholder="<?php echo $row['u_address']; ?>" readonly></textarea>
                </div>
              </div>

              <div style="padding: 10px 0; ">

  
            </fieldset>

    </form>

                <div class="btn-group" style="width: 100%;" role="group" aria-label="Basic example" id="buttonGroup">
                    <a href='editProfileOverlay.php' class='btn btn-primary'> Edit Profile </a>                                               
                </div> 



</div>


<?php include 'footer.php'; ?>

