<?php 
include 'cbssessionCustomer.php'; 
if(!session_id())
{
  session_start();
}

include 'headercustomer.php'; 
include 'dbconnect.php';
include 'mongodbConnect.php';


//Get Booking ID
If(isset($_GET['id']))
{
  $bid = $_GET['id'];
}

//Retrive Booking Based on ID
$sql = "SELECT * FROM tb_booking WHERE b_id = '$bid'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

$path = "img/";

?>

<div class="container">

   
    <section class="u-clearfix u-white u-section-1" id="carousel_cbcf">

    <a class="button btn btn-primary btn-sm d-none d-sm-inline-block" id="formToggle" data-modal="modalOne" style="width: 25%;transform: perspective(0px) translate(21px);position: absolute;right: 1%;top: 20px;font-size: 15px;">See Your Current Booking</a>

      <?php include 'customermodify1.php';  ?>

      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">

            <div class="u-size-30 u-size-60-md">
              <div class="u-layout-row">

            <?php  
              $sql2 = "SELECT * FROM tb_vehicle";
              $result2 = mysqli_query($con, $sql2);

              
              while ($row2 = mysqli_fetch_array($result2))
              {

              ?> 

                  <div class="u-container-style u-layout-cell u-right-cell u-similar-fill u-size-20 u-size-20-md u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3" style="border-color: #333333; border-width: 1px; ">
                      <img class="u-expanded-width u-image u-image-3" src="<?php echo $path.$row2['v_pic']; ?>">
                      <h3 class="u-custom-font u-font-patua-one u-text u-text-5"><?php echo $row2['v_reg']; ?></h3> 
                      <p class="u-text u-text-6"><?php echo $row2['v_model']; ?><br><?php echo $row2['v_type']; ?><br>RM<?php echo $row2['v_price']; ?></p>

                      <div class="btn-group" style="position: absolute;right: 6%;" role="group" aria-label="Basic example">
                      
                      
                      </div>

                    </div>
                  </div>


            <?php 
              }
              
            ?>   

 

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>







</div>
<div>
</div>

    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4b83">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Car Systems.Co</p>
      </div>
    </footer>

  </body>
</html>      








<!--
<form class="form-horizontal" method="POST" action="customermodifyprocess.php">
        <fieldset>

          <legend>Booking Form</legend>

          <div class="form-group">


            <label for="InputCar" class="form-label mt-4">Booking ID: <?php 
              echo $bid;
             ?></label>
             <br><br>


            <label for="InputCar" class="form-label mt-4">Modify Vehicle</label>
            <?php  
              $sqlv = "SELECT * FROM tb_vehicle";
              $resultv = mysqli_query($con, $sqlv);

              echo '<select name="fcar" class="form-control" id="InputVehicleModel">';
              while ($rowv = mysqli_fetch_array($resultv))
              {
                if($rowv['v_reg'] == $row['b_vehicle'])
                {
                  echo "<option selected='selected' value = '".$rowv['v_reg']."'>".$rowv['v_model']."</option>";
                }

                else
                {
                  echo "<option value = '".$rowv['v_reg']."'>".$rowv['v_model']."</option>";
                }
              }
              echo "</select>";
            ?>  
          </div>

          <div class="form-group">
            <label for="InputBookingDate" class="form-label mt-4">Select Pickup Date</label>
            
              <div>
              <?php 

                echo '<input type="date" name="fbdate" class="form-control" id="InputBookingDate" value="'.$row['b_bdate'].'">';

               ?>
              </div>
          </div>

          <div class="form-group">
            <label for="InputReturnDate" class="form-label mt-4">Select Return Date</label>
            <input type="date" name="frdate" class="form-control" id="InputReturnDate" value="<?php 

            echo $row['b_rdate'];

             ?>" required>
          </div>

          <input type="hidden" name="fbid" class="form-control" id="fbid" value="<?php 

            echo $row['b_id'];

             ?>">

          <div>      
          <button type="reset" class="btn btn-danger">Clear</button>
          <button type="submit" class="btn btn-info">Book</button>
          </div>

        </fieldset>
    </form>-->