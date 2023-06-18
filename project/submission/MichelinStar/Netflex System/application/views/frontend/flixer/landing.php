<!-- TOP LANDING SECTION -->
<div style="height:93vh;width:100%;background-image: url(<?php echo base_url().'assets/frontend/flixer/images/home_top_banner.jpg';?>)">
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 18px; width: 160px;" />
		</a>
	</div>
	<div style="float: right;margin: 18px 18px; height: 50px;" class="hidden-xs">
		<a href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger"><?php echo get_phrase('sign_in');?></a>
	</div>
	<?php if(addon_status('blog')): ?>
		<div style="float: right;margin: 18px 18px; height: 50px;" class="hidden-xs">
			<a href="<?php echo base_url();?>index.php?addons/blog" class="btn btn-danger"><?php echo get_phrase('blog');?></a>
		</div>
	<?php endif; ?>
	
	<!-- promo text visible for large devices -->
	<div style="font-size: 85px;font-weight: bold;clear: both;padding: 100px 0px 0px 0px; text-align:center; color: #fff;" class="hidden-xs">
		<?php echo get_phrase('See_what_is_next.');?>
		<div style="font-size: 30px; letter-spacing: .2px; color: #fff; font-weight: 400;">
			<?php echo get_phrase('WATCH_ANYWHERE.');?> <?php echo get_phrase('CANCEL_ANYTIME.');?>
		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg"
			style="padding: 20px 50px; font-size: 30px;">
			<?php echo get_phrase('JOIN_FREE_FOR_A_MONTH');?>
			<i class="fa fa-angle-right" style="margin:0px 0px 0px 20px;"></i>
		</a>
	</div>
	
	<!-- promo text visible for small devices -->
	<div style="font-size: 45px;font-weight: bold;clear: both;padding: 80px 0px 0px 0px; text-align:center; color: #fff;" class="hidden-lg hidden-sm hidden-md">
		<?php echo get_phrase('See_what_is_next.');?>
		<div style="font-size: 25px; letter-spacing: .2px; color: #fff; font-weight: 400;">
			<?php echo get_phrase('WATCH_ANYWHERE.');?> <br> <?php echo get_phrase('CANCEL_ANYTIME.');?>
		</div>
		<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" ><?php echo get_phrase('JOIN_FREE_FOR_A_MONTH');?></a>
		<br>
		<a href="<?php echo base_url();?>index.php?home/signin" class="btn btn-danger btn-lg" ><?php echo get_phrase('SIGN_IN');?></a>
	</div>
</div>
<!-- MIDDLE TAB SECTION -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="bs-component">
				<ul class="nav nav-tabs">
					<li class="active">
						<a href="#cancel" data-toggle="tab">
						<i class="fa fa-sign-out" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						<?php echo get_phrase('Cancel_subscription_anytime');?>
						</a>
					</li>
					<li>
						<a href="#anywhere" data-toggle="tab">
						<i class="fa fa-laptop" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						<?php echo get_phrase('Watch_from_anywhere');?>
						</a>
					</li>
					<li>
						<a href="#price" data-toggle="tab">
						<i class="fa fa-tags fa-flip-horizontal" style="font-size: 64px; font-weight: lighter; padding: 20px 0px 5px;"></i>
						<br>
						<?php echo get_phrase('Pricing_packages');?>
						</a>
					</li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active in" id="cancel">
						<p>
						<div class="row">
							<div class="col-md-7" style="padding-top: 50px;">
								<h4>
									<?php echo get_phrase('If_you_decide_Netflex_is_not_for_you, no_problem.');?> 
									<br>
									<?php echo get_phrase('No_commitment. Cancel_online_anytime.');?>
								</h4>
								<br>
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >
									<?php echo get_phrase('JOIN_TODAY');?></a>
							</div>
							<div class="col-md-5">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_cancelanytime_withdevice.png" style="width: 100%;" />
							</div>
						</div>
						</p>
					</div>
					<div class="tab-pane" id="anywhere">
						<p>
						<div class="row">
							<div class="col-md-9">
								<h4>
									<?php echo get_phrase('Watch_TV_shows_and_movies_anytime, anywhere. From_any_device.');?>
								</h4>
							</div>
							<div class="col-md-3">
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >
									<?php echo get_phrase('JOIN_TODAY');?></a>
							</div>
						</div>
						<div class="row" style="margin-top:50px;text-align: center;">
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_TV_UI.png" style="width: 100%;" />
								<h5><?php echo get_phrase('Watch_on_your_tv');?></h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_mobile_tablet_UI_2.png" style="width: 100%;" />
								<h5><?php echo get_phrase('Watch_on_your_phone, tablet');?></h5>
							</div>
							<div class="col-md-4">
								<img src="<?php echo base_url();?>assets/frontend/flixer/images/asset_website_UI.png" style="width: 100%;" />
								<h5><?php echo get_phrase('Watch_on_your_pc');?></h5>
							</div>
						</div>
						</p>
					</div>
					<div class="tab-pane" id="price">
						<p>
						<div class="row" style="margin: 35px;">
							<div class="col-md-8" style="text-align: right;">
								<h4>
									<?php echo get_phrase('Choose_one_plan_and_watch_everything.');?>
								</h4>
							</div>
							<div class="col-md-4" style="text-align: left;">
								<a href="<?php echo base_url();?>index.php?home/signup" class="btn btn-danger btn-lg" >
									<?php echo get_phrase('JOIN_TODAY');?></a>
							</div>
						</div>
						<!-- price table -->
						<table class="table table-striped table-hover" style="color: #999;">
							<tbody>
								<tr>
									<td></td>
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
									<td><?php echo get_phrase('Monthly_price');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center">USD <?php echo $row['price'];?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Screens_you_can_watch_on_at_the_same_time');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><?php echo $row['screens'];?></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Watch_on_your_laptop, TV, phone_and_tablet');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('HD_available');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Unlimited_movies_and_TV_shows');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
								<tr>
									<td><?php echo get_phrase('Cancel_anytime');?></td>
									<?php
										$plans = $this->crud_model->get_active_plans();
										foreach ($plans as $row):
										?>
									<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
									<?php endforeach;?>
								</tr>
							</tbody>
						</table>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include 'footer.php';?>
</div>