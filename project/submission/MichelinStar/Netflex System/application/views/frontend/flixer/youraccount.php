<?php include 'header_browse.php';?>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<!-- NOTIFICATION MESSAGES HERE -->
		<?php
			if ($this->session->flashdata('payment_status') == 'cancelled'):
			?>
		<div class="alert alert-dismissible alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo get_phrase('Payment_cancelled.');?>
		</div>
		<?php endif;?>
		<?php
			if ($this->session->flashdata('payment_status') == 'success'):
			?>
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo get_phrase('Payment_completed_successfully.');?>
		</div>
		<?php endif;?>
		<?php
			if ($this->session->flashdata('status') == 'email_changed'):
			?>
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo get_phrase('Email_changed_successfully.');?>
		</div>
		<?php endif;?>
		<?php
			if ($this->session->flashdata('status') == 'password_changed'):
			?>
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo get_phrase('Password_changed_successfully.');?>
		</div>
		<?php endif;?>
		<?php
			if ($this->session->flashdata('status') == 'subscription_cancelled'):
			?>
		<!-- ERROR MESSAGE --> 
		<div class="alert alert-dismissible alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<?php echo get_phrase('Membership_cancelled_successfully.');?> 
				<?php echo get_phrase('You_can_purchase_or_renew_it_anytime.');?>
		</div>
		<?php endif;?>
		<!-- NOTIFICATION MESSAGES ENDS -->
		<div class="col-lg-12">
			<h3 class="black_text"><?php echo get_phrase('Account');?></h3>
			<hr>
		</div>
		<div class="col-lg-12">
			<div class="row">
				<div class="col-lg-5">
					<span style="font-size: 20px;"><?php echo get_phrase('MEMBERSHIP_AND_BILLING');?></span>
					<br>
					<?php
						if ( $this->crud_model->validate_subscription() == false):
						?>
					<a href="<?php echo base_url();?>index.php?browse/purchaseplan" 
						class="btn btn-primary" style="margin:10px 0px;"> 
							<?php echo get_phrase('Purchase_Membership');?> </a>
					<?php endif;?>
					<?php
						if ( $this->crud_model->validate_subscription() != false):
						?>
					<a href="<?php echo base_url();?>index.php?browse/cancelplan" 
						class="btn btn-default" style="margin:10px 0px;"> 
							<?php echo get_phrase('Cancel_Membership');?> </a>
					<?php endif;?>
				</div>
				<div class="col-lg-7">
					<div class="row" style="margin: 5px;">
						<div class="pull-left black_text">
							<b><?php echo $this->crud_model->get_current_user_detail()->email;?></b>
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url();?>index.php?browse/emailchange" class="blue_text">
								<?php echo get_phrase('Change_Email');?></a>
						</div>
					</div>
					<div class="row" style="margin: 5px;">
						<div class="pull-left">
							<?php echo get_phrase('Password');?> : ******</div>
						<div class="pull-right">
							<a href="<?php echo base_url();?>index.php?browse/passwordchange" class="blue_text">
								<?php echo get_phrase('Change_Password');?></a>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-5">
					<span style="font-size: 20px;">
						<?php echo get_phrase('PLAN_DETAILS');?></span>
					<br>
				</div>
				<div class="col-lg-7">
					<div class="row" style="margin: 5px;">
						<div class="pull-left">
							<!-- IF ANY ACTIVE SUBSCRIPTION IS FOUND -->
							<?php
								if ( $this->crud_model->validate_subscription() != false):
									$current_plan_id			=	$this->crud_model->get_current_plan_id();
									$current_plan_name			=	$this->db->get_where('plan', array('plan_id'=> $current_plan_id))->row()->name;
									$current_plan_screens		=	$this->db->get_where('plan', array('plan_id'=> $current_plan_id))->row()->screens;
									$current_subscription_upto_timestamp
																=	$this->db->get_where('subscription', array('plan_id'=> $current_plan_id))->row()->timestamp_to;
								?>
							<b class="black_text" style="text-transform: capitalize;">
							<?php echo $current_plan_name . " (" . $current_plan_screens . " screens)"; ?>
							</b>
							<br>
								<?php echo get_phrase('Effective_upto');?> : 
								<b><?php echo date('d M, Y', $current_subscription_upto_timestamp);?></b>
							<br>
							<i style="font-size: 12px;">for changing plan, cancel the currently running plan first</i>
							<?php endif;?>
							<!-- IF ANY ACTIVE SUBSCRIPTION IS NOT FOUND -->
							<?php
								if ( $this->crud_model->validate_subscription() == false):
								?>
							<i style="font-size: 12px;"><?php echo get_phrase('Membership_inactive');?></i>
							<?php endif;?>
						</div>
						<div class="pull-right" style="text-align: right;">
							<?php
								if ( $this->crud_model->validate_subscription() == false):
								?>
							<a href="<?php echo base_url();?>index.php?browse/purchaseplan" class="blue_text">
								<?php echo get_phrase('Purchase');?></a>
							<?php endif;?>
							<?php
								if ( $this->crud_model->validate_subscription() != false):
								?>
							<a href="<?php echo base_url();?>index.php?browse/cancelplan" class="blue_text">
								<?php echo get_phrase('Cancel');?></a>
							<?php endif;?>
							<br>
							<a href="<?php echo base_url();?>index.php?browse/billinghistory" class="blue_text">
								<?php echo get_phrase('Billing_history');?></a>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-lg-5">
					<span style="font-size: 20px;">
						<?php echo get_phrase('MY_PROFILE');?></span>
					<br>
				</div>
				<div class="col-lg-7">
					<div class="row" style="margin: 5px;">
						<div class="pull-left black_text">
						
							<?php
							if (isset($active_user)) :
								// $bar_text & $bar_thumb is coming from header_browser.php, if they are available only.
								?>
							
								<img src="<?php echo base_url();?>assets/global/<?php echo $bar_thumb;?>" style="margin:10px 10px 10px 0px; height: 30px;" />
									<?php echo $bar_text;?>
								<br>
								
							<?php endif;?>
							
						</div>
						<div class="pull-right">
							<a href="<?php echo base_url();?>index.php?browse/manageprofile" class="blue_text">
								<?php echo get_phrase('Manage_profiles');?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>