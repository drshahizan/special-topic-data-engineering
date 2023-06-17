<?php include 'header_browse.php';?>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="black_text"><?php echo get_phrase('cancel_your_membership');?>?</h3>
			<hr>
		</div>
		<div class="col-lg-8">
			<h4 class="black_text"><?php echo get_phrase('Click_Finish_Cancellation_below_to_cancel_your_membership');?></h4>
			<ul class="black_text">
				<li>
					<?php echo get_phrase('Cancellation_will_be_effective_immedietly_after_your_confirmation');?>
				</li>
				<li>
					<?php echo get_phrase('Restart_your_membership_anytime. Your_viewing_preferences_will_be_saved_always');?>
				</li>
			</ul>
			<form method="post" action="<?php echo base_url();?>index.php?browse/cancelplan">
				<input type="hidden" name="task" value="<?php echo get_phrase('cancel_plan');?>" />
				<button class="btn btn-primary" type="submit"> <?php echo get_phrase('Finish_Cancellation');?> </button>
				<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default"><?php echo get_phrase('Go_Back');?></a>
			</form>
		</div>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>


