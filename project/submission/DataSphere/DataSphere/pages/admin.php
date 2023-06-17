                
 <?php 
include '../includes/adminSession.php'; 
if(!session_id())
{
  session_start();
}

include '../includes/dbconnect.php';
include '../includes/headerAdmin.php'; 


$sql = "SELECT * FROM tb_user WHERE u_type = '2'";

// Execute SQL
$result = mysqli_query($con, $sql); // Execute SQL Statement
$row = mysqli_fetch_array($result); // Retrieve result
$count = mysqli_num_rows($result);  // Count result found

?>              
               
                
                <div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Dashboard - Admin</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
						</div>
						
					</div>
				</div>
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <p class="text-bold"><?php echo $count; ?> users registered</p>
				</div>


<?php include '../includes/footerAdmin.php'; ?>