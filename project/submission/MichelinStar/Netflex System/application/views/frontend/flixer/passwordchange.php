<?php include 'header_browse.php';?>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<?php
			if ($this->session->flashdata('status') == 'password_change_failed'):
			?>
		<!-- ERROR MESSAGE --> 
		<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<?php echo get_phrase('Current_password_given_wrong_or_New_password_must_be_at_least_6_character_long. Please_try_again.');?>
		</div>
		<?php endif;?>
		<div class="col-lg-12">
			<h3 class="black_text"><?php echo get_phrase('Change_Password');?></h3>
			<hr>
		</div>
		<div class="col-lg-5">
			<form method="post" action="<?php echo base_url();?>index.php?browse/passwordchange">
				<div class="">
					<?php echo get_phrase('Current_Password');?>
				</div>
				<div class="black_text">
					<input type="password" name="old_password" style="padding: 10px; width:100%;" />
				</div>
				<div class="" style="margin-top: 20px;">
					<?php echo get_phrase('New_Password');?>
				</div>
				<div class="black_text">
					<input type="password" name="new_password" style="padding: 10px; width:100%;" />
				</div>
				<br>
				<button class="btn btn-primary" type="submit"> <?php echo get_phrase('Save');?> </button>
				<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default"><?php echo get_phrase('Cancel');?></a>
			</form>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>