
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $page_title.' | '.$this->db->get_where('settings',array('type'=>'site_name'))->row()->description; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="<?php echo base_url();?>assets/global/favicon.png">
	<?php include 'includes_top.php';?>
</head>
<body>
	<?php include 'payment_gateway.php'; ?>
	<?php include 'includes_bottom.php'; ?>
</body>
</html>
