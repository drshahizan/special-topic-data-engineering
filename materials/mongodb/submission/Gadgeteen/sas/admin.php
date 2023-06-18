<?php 

include 'dbconnect.php';
include 'headeradmin.php';
/*
$sql1 = "SELECT COUNT(*) FROM tb_booking WHERE b_status = '1'";
$result1 = mysqli_query($con, $sql1);
$row1 = mysqli_fetch_array($result1);
*/
$dataPoints = array( 
  array("label"=>"Jan", "y"=>12),
  array("label"=>"Feb", "y"=>21),
  array("label"=>"Mar", "y"=>32),
  array("label"=>"Apr", "y"=>12),
  array("label"=>"May", "y"=>23),
  array("label"=>"Jun", "y"=>32),
  array("label"=>"Jul", "y"=>123),
  array("label"=>"Aug", "y"=>43),
  array("label"=>"Sept", "y"=>34),
  array("label"=>"Oct", "y"=>54),
  array("label"=>"Nov", "y"=>23),
  array("label"=>"Dec", "y"=>32),
);

$dataPoints1 = array( 
  array("label"=>"Male", "y"=>123),
  array("label"=>"Female", "y"=>200),
);

$dataPoints2 = array( 
  array("label"=>"Sports and travel", "y"=>12),
  array("label"=>"Food and beverages", "y"=>21),
  array("label"=>"Health and beauty", "y"=>32),  
  array("label"=>"Home and lifestyle", "y"=>23),
	array("label"=>"Fashion accessories", "y"=>12),
	array("label"=>"Electronic accessories", "y"=>23),
);
?> 

<script>
  window.onload = function() {
  
		var chart = new CanvasJS.Chart("chartContainer", {
			
				animationEnabled: true,
				title: {
						text: ""
				},
				subtitles: [{
						text: "2019"
				}],
				data: [{
						type: "line",
						yValueFormatString: "RM #,##0.00",
						indexLabel: "{} ({y})",
						dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
				}]
		});

		var piechart = new CanvasJS.Chart("piechart", {
			
			animationEnabled: true,
			title: {
					text: ""
			},
			subtitles: [{
					text: "Gender"
			}],
			data: [{
					type: "pie",
					yValueFormatString: "",
					indexLabel: "{label} ({y})",
					dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
			}]
		});

		var piechart2 = new CanvasJS.Chart("piechart2", {
			
			animationEnabled: true,
			title: {
					text: ""
			},
			subtitles: [{
					text: "Sales by Category"
			}],
			data: [{
					type: "pie",
					yValueFormatString: "RM #,##0",
					indexLabel: "{label} ({y})",
					dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
			}]
		});

  chart.render();
	piechart.render();
	piechart2.render();
  }
</script>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sales Analysis System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="admin.php">Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Sales</a>
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
		
    <div class="row">	
		<div class="col-lg-9">
			<div class="row" style="display:flex; margin-bottom: 0px;">	

				<div class="col-lg-4 col-md-11">
								
					<div class="card text-white bg-success mb-3" style="max-width: 35rem; height:160px;">
						<div class="card-body">
							<h2 class="card-title">Total Sales</h2>
							<p class="card-text" >
								<h3 style="float: right; padding-right:20px; padding-top:30px;">
									RM 12310
								</h3>
							</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-11">
					<div class="card text-white bg-danger mb-3" style="max-width: 35rem; height:160px;">
						<div class="card-body">
							<h2 class="card-title">Total Gross Income</h2>
							<p class="card-text" >
								<h3 style="float: right; padding-right:20px;padding-top:30px;">
									RM 2310
								</h3>
							</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-11">
					<div class="card text-white bg-warning mb-3" style="max-width: 35rem; height:160px;">
						<div class="card-body">
							<h2 class="card-title">Average Rating</h2>
							<p class="card-text" >
								<h3 style="float: right; padding-right:20px;padding-top:30px;">
									6.6
								</h3>
							</p>
						</div>
					</div>
				</div>

			</div> <!-- row -->

			<div class="row">
				<div id="chartContainer" class="text-center" style="height: 400px; width: 98%; color:red;"></div>
			</div>

		</div><!-- col-lg-9 -->

		<div class="col-lg-3">
			<div class="row">
					<div class="d-md-flex">
						<div id="piechart" class="text-center" style="height: 280px; width: 100%; color:red;"></div>
					</div>
			</div>   
			<div class="row">
					<div class="d-md-flex">
						<div id="piechart2" class="text-center" style="height: 280px; width: 100%; margin-top:15px;"></div>
					</div>
			</div>     
  	</div>
		</div><!-- col-lg-3 -->
				

	</div>

</div>

<script src="js/canvasjs.min.js"></script>
<?php include 'footer.php'; ?> 