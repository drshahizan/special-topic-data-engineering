<style>
	.btn_blank{font-size: 25px;border: 1px solid #ccc;padding: 5px 30px;text-decoration: none;margin: 10px;}
	.btn_blank:hover{font-size: 25px;border: 1px solid #fff;padding: 5px 30px;text-decoration: none;color:#fff;}
	.btn_block{font-size: 25px;padding: 5px 30px;text-decoration: none;background-color: #fff; color: #000; margin: 10px;}
	.btn_block:hover{font-size: 25px;padding: 5px 30px;text-decoration: none;background-color: #c00; color:#fff;}
	.input_black{width: 18em;height: 2em;background: #666;border: 1px solid transparent;margin: 0 .8em 0 0;padding: .2em .6em;  color: #fff;font-size: 1.3vw;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
	.select_black{background-color: #000;height: 45px;padding: 12px;font-weight: bold;color: #fff;}
	/* CUSTOM FILE UPLOAD CSS STARTS */
	#file-upload {
	    position: absolute;
	    left: -9999px;
		color: #fff;
	}

	label[for="file-upload"]{
	  padding:0.5em;
	  display:inline-block;
	  background:#131313;
	  cursor:pointer;
	  color: #fff;
	  &:hover{background:#131313}
	}
	#filename{
	  padding:0.5em;
	  float:left;
	  width:150px;
	  white-space: nowrap;
	  overflow:hidden;
	  background:#131313;
	  width: 18em;
	  color: #fff;
	}
	/* CUSTOM FILE UPLOAD CSS ENDS */
</style>

<!-- TOP LANDING SECTION -->
<div style="height:100vh;width:100%; background-color: #141414;">
	<?php
	if ($user == 'user1')
	{
		$username 	=	$this->crud_model->get_username_of_user('user1');
		$thumb	    =	$this->crud_model->get_image_url_of_user('user1');
	}
	else if ($user == 'user2')
	{
		$username 	=	$this->crud_model->get_username_of_user('user2');
		$thumb	    =	$this->crud_model->get_image_url_of_user('user2');
	}
	else if ($user == 'user3')
	{
		$username 	=	$this->crud_model->get_username_of_user('user3');
		$thumb	    =	$this->crud_model->get_image_url_of_user('user3');
	}
	else if ($user == 'user4')
	{
		$username 	=	$this->crud_model->get_username_of_user('user4');
		$thumb	    =	$this->crud_model->get_image_url_of_user('user4');
	}
	?>
	<!-- logo -->
	<div style="float: left;">
		<a href="<?php echo base_url();?>">
			<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 40px; height: 35px;" />
		</a>
	</div>
	<div class="container">
		<div class="row">
			<form method="post" id="form"
				action="<?php echo base_url();?>index.php?browse/editprofile/<?php echo $user;?>" enctype="multipart/form-data">
				<div class="col-lg-8 col-lg-offset-2">
					<div style="clear: both; padding-top: 100px;">
						<h1><?php echo get_phrase('Edit_Profile');?></h1>
						<hr style="border-top:1px solid #333;">
					</div>
					<div class="row">
						<div class="col-lg-3">
							<img src="<?php echo $thumb;?>" style="height: 160px;" />
						</div>
						<div class="col-lg-9">
							<input type="text" class="input_black" placeholder="Name" value="<?php echo $username;?>" name="username" />
							<br><br>

							<span id="filename"><?php echo get_phrase('upload_user_image').' (476 X 476)'; ?></span>
    						<label for="file-upload"><?php echo get_phrase('browse'); ?><input type="file" class="input_black" id="file-upload" name = "userimage"></label>
						</div>
					</div>
					<hr style="border-top:1px solid #333;">
					<br>
					<a href="#" class="btn_block" onClick="submit_form()"><?php echo get_phrase('SAVE');?></a>
					<a href="<?php echo base_url();?>index.php?browse/manageprofile" class="btn_blank"><?php echo get_phrase('CANCEL');?></a>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function submit_form()
	{
		$( "#form" ).submit();
	}

	$('#file-upload').change(function() {
	    var filepath = this.value;
	    var m = filepath.match(/([^\/\\]+)$/);
	    var filename = m[1];
	    $('#filename').html(filename);
	    console.log(filename);
	});
</script>
