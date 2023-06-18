<?php 
include 'cbssessionAdmin.php'; 
if(!session_id())
{
  session_start();
}

include 'headeradmin.php'; 
include 'dbconnect.php';


//Retrive Booking(Join)
$sql= "SELECT * FROM tb_booking
       LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_ic
       LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
       LEFT JOIN tb_status ON tb_booking.b_status = tb_status.is_id
       WHERE b_status = '1'";

$sql1= "SELECT * FROM tb_booking
       LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_ic
       LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
       LEFT JOIN tb_status ON tb_booking.b_status = tb_status.is_id
       WHERE b_status != '1' ORDER BY b_status";

$result = mysqli_query($con, $sql);
$result1 = mysqli_query($con, $sql1);

?>
<style type="text/css">
  
  #myInput {
  background-image: url('images/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  background-size: 24px;

  width: 20%;
  display: flex; 
  justify-content: flex-end
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

  #myInput1 {
  background-image: url('images/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  background-size: 24px;

  width: 20%;
  display: flex; 
  justify-content: flex-end
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style>

<div class="container">


  <div>
  <h3 style="display:inline;">New Booking List</h3>

  <input class="form-control form-control-user" type="text" id="myInput" onkeyup="search()" placeholder="Search for a new booking" style="display:inline; float:right;">
  </div>
  


  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th scope="col">Booking ID</th>
        <th scope="col">Vehicle</th>
        <th scope="col">Customer</th>
        <th scope="col">Contact</th>
        <th scope="col">Booking Date</th>
        <th scope="col">Return Date</th>
        <th scope="col">Total Price</th>
        <th scope="col">Status</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>

    <tbody>
      <tr>
    <?php 

    while ($row=mysqli_fetch_array($result)) 
    {
      // code...
      echo "<tr>";
      echo "<td>".$row['b_id']."</td>";
      echo "<td>".$row['v_model']."</td>";
      echo "<td>".$row['u_name']."</td>";
      echo "<td>".$row['u_phone']."</td>";    
      echo "<td>".date('d F Y', strtotime($row['b_bdate']))."</td>"; 
      echo "<td>".date('d F Y', strtotime($row['b_rdate']))."</td>";
      echo "<td>".$row['b_total']."</td>";
      echo "<td>".$row['is_desc']."</td>";
      echo "<td>";

        echo "<a href='adminapproval.php?id=".$row['b_id']."' class='btn btn-warning'> Approve </a> &nbsp";

 
      echo "</td>";
      echo "</tr>";
    }

    ?>


      </tr>
    </tbody>
  </table>

</div>



<div class="container">
  <br>


  <div>
  <h3 style="display:inline;">Approved/Rejected List</h3>

  <input class="form-control form-control-user" type="text" id="myInput1" onkeyup="search1()" placeholder="Search for a booking" style="display:inline; float:right;">
  </div>


  <table class="table table-hover" id="myTable1">
    <thead>
      <tr>
        <th scope="col">Booking ID</th>
        <th scope="col">Vehicle</th>
        <th scope="col">Customer</th>
        <th scope="col">Contact</th>
        <th scope="col">Booking Date</th>
        <th scope="col">Return Date</th>
        <th scope="col">Total Price</th>
        <th scope="col">Status</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>

    <tbody>
    <?php 

    while ($row2=mysqli_fetch_array($result1)) 
    {
      // code...
      echo "<tr>";
      echo "<td>".$row2['b_id']."</td>";
      echo "<td>".$row2['v_model']."</td>";
      echo "<td>".$row2['u_name']."</td>";
      echo "<td>".$row2['u_phone']."</td>";    
      echo "<td>".date('d F Y', strtotime($row2['b_bdate']))."</td>"; 
      echo "<td>".date('d F Y', strtotime($row2['b_rdate']))."</td>";
      echo "<td>".$row2['b_total']."</td>";
      echo "<td>".$row2['is_desc']."</td>";
      echo "<td>";

        echo "<a href='adminapproval.php?id=".$row2['b_id']."' class='btn btn-warning'> Update </a> &nbsp";

 
      echo "</td>";
      echo "</tr>";
    }

    ?>


      </tr>
    </tbody>
  </table>

</div>



    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4b83" style="position: fixed; left: 0;bottom: 0;width: 100%;">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Car Systems.Co</p>
      </div>
    </footer>

  </body>
</html>


<script type="text/javascript">
  

function search() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");



  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[0].style.display = "";
        tr[i].style.display = "";
      } else {
        tr[0].style.display = "";
        tr[i].style.display = "none";
      }
    }       
  }
}


function search1() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");



  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[0].style.display = "";
        tr[i].style.display = "";
      } else {
        tr[0].style.display = "";
        tr[i].style.display = "none";
      }
    }       
  }
}


</script>