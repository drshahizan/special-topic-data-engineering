<?php 
include 'dbconnect.php';
include 'headeradmin.php';

//Retrieve booking (JOIN)
$sql = "SELECT * FROM sales";
$result = mysqli_query($con, $sql);
?> 

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sales Analysis System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Sales</a>
        </li>
        
      </ul>
      <ul class="navbar-nav ms-auto d-flex">

        <li class="nav-item">
          <a class="nav-link" aria-haspopup="true" aria-expanded="false">
              <img src="img/user.jpg" alt="user-img" width="36" style="border-radius: 50%;">
              <span class="text-white">
                Ming Qi
              </span>
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<div class="page-wrapper">

    <div class="container-fluid">
        <div class="row" style="margin-left:10%; margin-bottom:20px;">
            <div class="col-6">
                <h1> Sales </h1>
            </div>
            
            <a class="btn btn-secondary btn-lg" href='create.php' style="width:200px; margin-left:auto;margin-right:12%;"> 
	    			  + Add Sales
	    		  </a>
        </div>

        <div class="white-box">

	<div class="table-responsive" style="margin-left: ; width:100%">
	<table id="myTable" class="table table-hover" >  
	       <thead>
		    <tr>
		    	<th hidden> # </th>
		      <th scope="col">ID</th>
		      <th scope="col">City</th>
		      <th scope="col">Customer</th>
		      <th scope="col">Gender</th>	  
		      <th scope="col">Category</th>
		      <th scope="col">Total</th>
					<th scope="col">Date</th>
					<th scope="col">Gross_income</th>
					<th scope="col">Rating</th>
		      <th scope="col">Operation</th>
		    </tr>
		  </thead>


		  <tbody>
		  	<?php
		  	$num = 1;
				$message = '"Are you sure you want to delete this sales?"';

				require 'mongodb.php'; 
				$sales = $collection->find([]);  
  
      	foreach($sales as $sale) {  
		  			echo "<tr>";
		  			echo "<td hidden>".$num++."</td>";
		  			echo "<td> ".$sale->Sales_id."</td>";
		  			echo "<td> ".$sale->City."</td>";
		  			echo "<td> ".$sale->Customer."</td>";
		  			echo "<td> ".$sale->Gender."</td>";
		  			echo "<td> ".$sale->Category."</td>";
		  			echo "<td> ".$sale->Total."</td>";
		  			echo "<td> ".$sale->Date->toDateTime()->format('Y-m-d')."</td>";
						echo "<td> ".$sale->Gross_income."</td>";
						echo "<td> ".$sale->Rating."</td>";
						echo"<td>";
							echo"<a class='vedit' type='button' title='View Sales' href='View.php?id=".$sale->Sales_id."'><i class='fa fa-eye fa-2x' aria-hidden='true' style='margin-right:10px;'></i></a>";
							echo"<a class='vedit' type='button' title='Modify Sales' href='Modify.php?id=".$sale->Sales_id."'><i class='fa fa-pencil-square fa-2x' aria-hidden='true' style='margin-right:10px;'></i></a>";

							echo"<a class='dlt' title='Delete Sales' href='Modify.php?id=".$sale->Sales_id."' onclick='return confirm(".$message.");'><i class='fa fa-trash fa-2x' aria-hidden='true'></i></a>";
				   	echo"</td>";
		  			echo "</tr>";
				}
		    ?>
		  </tbody>
	      </table>
	</div>
</div>

</div>



<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});

</script>

<?php include 'footer.php'; ?> 