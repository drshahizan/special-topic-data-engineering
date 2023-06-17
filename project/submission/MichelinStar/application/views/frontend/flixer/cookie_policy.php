<!-- TOP LANDING SECTION -->
<div style="width:100%; height:90px; background-color:rgb(202, 202, 202); border-bottom:solid 1px #dcdde0;">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 40px; height: 50px;" />
		</a>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-lg-12" style="margin:20px;">
			<div class="row">
				<?php
					echo $this->db->get_where('settings',array('type'=>'cookie_policy'))->row()->description;
					?>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</div>