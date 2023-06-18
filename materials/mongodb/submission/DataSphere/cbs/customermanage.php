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
$sql= "SELECT * FROM tb_booking
       LEFT JOIN tb_user ON tb_booking.b_customer = tb_user.u_ic
       LEFT JOIN tb_vehicle ON tb_booking.b_vehicle = tb_vehicle.v_reg
       LEFT JOIN tb_status ON tb_booking.b_status = tb_status.is_id
       WHERE b_customer = $uic";


$result = mysqli_query($con, $sql);

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
</style>


<div class="container">


  <div>
  <h3 style="display:inline;">Manage your bookings</h3>

  <input class="form-control form-control-user" type="text" id="myInput" onkeyup="search()" placeholder="Search for your booking" style="display:inline; float:right;">
  </div>

  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th scope="col">Booking ID</th>
        <th scope="col">Vehicle</th>
        <th scope="col">Booking Date</th>
        <th scope="col">Return Date</th>
        <th scope="col">Total Price</th>
        <th scope="col">Status</th>
        <th scope="col">Operation</th>
      </tr>
    </thead>

    <tbody>
    <?php 

    while ($row=mysqli_fetch_array($result)) 
    {
      // code...
      echo "<tr>";
      echo "<td>".$row['b_id']."</td>";
      echo "<td>".$row['v_model']."</td>";
      echo "<td>".date('d F Y', strtotime($row['b_bdate']))."</td>"; 
      echo "<td>".date('d F Y', strtotime($row['b_rdate']))."</td>";
      echo "<td>".$row['b_total']."</td>";
      echo "<td>".$row['is_desc']."</td>";
      echo "<td>";

        echo "<a href='customermodify.php?id=".$row['b_id']."' class='btn btn-warning'> Modify </a> &nbsp";

        echo "<a href='customercancel.php?id=".$row['b_id']."' class='btn btn-danger'> Cancel  </a>";

      echo "</td>";
      echo "</tr>";
    }

    ?>


      </tr>
    </tbody>
  </table>

</div>


<?php include 'footer.php'; ?>


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


</script>