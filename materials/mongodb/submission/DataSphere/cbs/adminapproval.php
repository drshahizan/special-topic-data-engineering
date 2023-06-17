<?php 
include 'cbssessionAdmin.php'; 
if(!session_id())
{
  session_start();
}

//Get Booking ID
If(isset($_GET['id']))
{
  $bid = $_GET['id'];
}

include 'headeradmin.php'; 
include 'dbconnect.php';


//Retrive Booking(Join)
$sql= "SELECT * FROM tb_booking
       LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_ic
       LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
       LEFT JOIN tb_status ON tb_booking.b_status = tb_status.is_id
       WHERE b_id = '$bid'";


$result = mysqli_query($con, $sql);

$sqlstatus= "SELECT * FROM tb_status";
$resultstatus = mysqli_query($con, $sqlstatus);

$row=mysqli_fetch_array($result);

?>


<div class="container">

  <h3>Booking Approval</h3><br>

  <table class="table table-hover">
  <!--Form-->

    
   <tr>
      <td>Booking ID</td>
      <td><?php echo $bid;?></td>
    </tr>

   <tr>
      <td>Vehicle</td>
      <td><?php echo $row['v_model'];?></td>
    </tr>
   <tr>
      <td>Customer</td>
      <td><?php echo $row['u_name'];?></td>
    </tr>
   <tr>
      <td>Contact</td>
      <td><?php echo $row['u_phone'];?></td>
    </tr>
   <tr>
      <td>Booking Date</td>
      <td><?php echo date('d F Y', strtotime($row['b_bdate']));?></td>
    </tr>
   <tr>
      <td>Return Date</td>
      <td><?php echo date('d F Y', strtotime($row['b_rdate'])); ?></td>
    </tr>
   <tr>
      <td>Total Price</td>
      <td><?php echo $row['b_total'];?></td>
    </tr>  


<form class="form-horizontal" method="POST" action ="<?php echo "adminapprovalprocess.php?id=$bid"; ?>"> 

   <tr>
      <td>Approval</td>
      <td>
        <?php  

            echo '<select name="fstatus" class="form-control">';
      while ($rowstatus = mysqli_fetch_array($resultstatus))
              {
                if($rowstatus['is_id'] != '1')
                {
                  echo "<option value = '".$rowstatus['is_id']."'>".$rowstatus['is_desc']."</option>";
                }
              
               
              }
            echo "</select>";

          ?>     
                    
      </td>
    </tr>

   <tr>
      <td>Action</td>
      <td>
   
          <div class="btn-group"  role="group" style="width: 50%; float:right;" aria-label="Basic example">
          <button type="reset" class="btn btn-danger">Clear</button>
          <button type="submit" class="btn btn-info">Approve</button>
          </div>
      </td>
    </tr>


  </form>
</table>


          

</div>


  <?php include "footer.php"; ?>