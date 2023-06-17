<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page_title; ?> | MichelinStar</title>
		<!-- all the meta tags -->
		<?php include 'metas.php'; ?>
		<!-- all the css files -->
		<?php include 'css.php'; ?>
	</head>
	<body class="page-body">
		<div class="page-container" >
			<!-- SIDEBAR -->
			<?php include 'menu.php'; ?>
			<!-- PAGE CONTAINER-->
			<div class="main-content custom-query">
				<!-- HEADER -->
				<?php include 'header.php'; ?>
				<!--  PAGE TITLE -->
				<!-- <div class="page-title">
					<i class="icon-custom-right"></i>
					<h4 class="page-title"><?php echo $page_title;?></h4>
				</div> -->
				<h3 style="margin:20px 0px;">
	           		<i class="entypo-right-circled"></i>
					<?php echo $page_title;?>
	           </h3>
				<!-- BEGIN PlACE PAGE CONTENT HERE -->
				<?php include 'pages/'.$page_name.'.php';?>
				<!-- END PLACE PAGE CONTENT HERE -->
			</div>
			<!-- END CONTENT -->
		</div>
		<!-- all the js files -->
		<?php include 'js.php';?>
	</body>
</html>