                
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
					<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
				</ol>
			</nav>
		</div>
		
	</div>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<p class="text-bold"><?php echo $count; ?> users registered</p>
</div>
<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
	<div class='tableauPlaceholder' id='viz1687029318769' style='position: relative'>
		<noscript><a href='#'>
			<img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DataSphere&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a>
		</noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
		<param name='embed_code_version' value='3' /> 
		<param name='site_root' value='' />
		<param name='name' value='DataSphere&#47;Dashboard1' />
		<param name='tabs' value='no' />
		<param name='toolbar' value='yes' />
		<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;DataSphere&#47;Dashboard1&#47;1.png' /> 
		<param name='animate_transition' value='yes' />
		<param name='display_static_image' value='yes' />
		<param name='display_spinner' value='yes' />
		<param name='display_overlay' value='yes' />
		<param name='display_count' value='yes' />
		<param name='language' value='en-US' />
		<param name='filter' value='publish=yes' />
	</object>
</div>                
<script type='text/javascript'>                    
	var divElement = document.getElementById('viz1687029318769');                    
	var vizElement = divElement.getElementsByTagName('object')[0];                    
	if ( divElement.offsetWidth > 800 ) 
	{ vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} 
	else if ( divElement.offsetWidth > 500 ) 
	{ vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} 
	else { vizElement.style.width='100%';vizElement.style.height='2077px';}                     
	
	var scriptElement = document.createElement('script');                    
	scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    
	vizElement.parentNode.insertBefore(scriptElement, vizElement);                
</script>              

</div>


<?php include '../includes/footerAdmin.php'; ?>