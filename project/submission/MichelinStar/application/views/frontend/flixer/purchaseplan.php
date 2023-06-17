<?php include 'header_browse.php';?>
<style>
table{
	background-color: rgb(243, 243, 243);
}
.isDisabled {
	color: currentColor;
	cursor: not-allowed;
	opacity: 0.5;
	text-decoration: none;
}
</style>
<div class="container" style="margin-top: 90px;">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="black_text">Purchase Membership</h3>
			<hr>
		</div>
		<div class="col-lg-8">
			<h4 class="black_text">Purchase any of the membership package from below.</h4>
			<ul class="black_text">
				<li>
					Select any of your preferred membership package & make payment.
				</li>
				<li>
					You can cancel your subscription anytime later.
				</li>
			</ul>
			<table class="table table-striped table-hover" style="color: #000;">
				<tbody>
					<tr>
						<td>
							<h6>Packages</h6>
						</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center">
								<h5 style="text-transform: uppercase;"><?php echo $row['name'];?></h5>
							</td>
						<?php endforeach;?>
					</tr>
					<tr>
						<td>Monthly price</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"> <?php echo currency($row['price']);?></td>
						<?php endforeach;?>
					</tr>
					<tr style="background-color: #fff;">
						<td>Screens you can watch on at the same time</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><?php echo $row['screens'];?></td>
						<?php endforeach;?>
					</tr>
					<tr>
						<td>Watch on your laptop, TV, phone and tablet</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
						<?php endforeach;?>
					</tr>
					<tr style="background-color: #fff;">
						<td>HD available</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
						<?php endforeach;?>
					</tr>
					<tr>
						<td>Unlimited movies and TV shows</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
						<?php endforeach;?>
					</tr>
					<tr style="background-color: #fff;">
						<td>Cancel anytime</td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
						<?php endforeach;?>
					</tr>
					<tr>
						<td></td>
						<?php
						$plans = $this->crud_model->get_active_plans();
						foreach ($plans as $row):
							?>
							<td align="center">
								<input type="radio" name="plan_id" value="<?php echo $row['plan_id'];?>" />
							</td>
						<?php endforeach;?>
					</tr>
				</tbody>
			</table>
			<div class="pull-right">
				<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-default">Go Back</a>
				<a href="javascript:" class="btn btn-primary" id="checkoutButton" onclick="checkPlan()">Checkout</a>
			</div>
		</div>
		<script>
		function checkPlan() {
			var selectedPlanId = $('input[name=plan_id]:checked').val();
			if (selectedPlanId > 0) {
				var redirectionUrl = "<?php echo base_url('index.php?browse/checkout/');?>" + selectedPlanId;
				window.location = redirectionUrl;
			}else{
				alert('<?php echo get_phrase('you_have_to_select_at_least_one_plan'); ?>');
			}
		}
		</script>
	</div>
	<hr>
	<?php include 'footer.php';?>
</div>
