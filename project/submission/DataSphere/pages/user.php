                
 <?php 
include '../includes/userSession.php'; 
if(!session_id())
{
  session_start();
}

include '../includes/dbconnect.php';
include '../includes/headerUser.php'; 

?>              
               
                
                <div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Dashboard - User</h4>
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
                    
				</div>


<?php include '../includes/footeruser.php'; ?>