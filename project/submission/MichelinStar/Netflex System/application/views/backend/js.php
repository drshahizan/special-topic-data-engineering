<link rel="stylesheet" href="<?php echo base_url('assets/backend/js/select2/select2-bootstrap.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/js/select2/select2.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/js/selectboxit/jquery.selectBoxIt.css');?>">

	<!-- Bottom Scripts -->
<script src="<?php echo base_url('assets/backend/js/gsap/main-gsap.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/joinable.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/resizeable.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/neon-api.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/toastr.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/jquery.validate.min.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/fullcalendar/fullcalendar.min.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/bootstrap-datepicker.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/bootstrap-timepicker.min.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/fileinput.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/jquery.multi-select.js');?>"></script>

<script type="text/javascript" src="<?php echo base_url('assets/backend/datatable/dataTables/js/jquery.dataTables.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/backend/datatable/dataTables/js/dataTables.bootstrap.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/backend/datatable/buttons/js/dataTables.buttons.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/backend/datatable/buttons/js/buttons.bootstrap.js');?>"></script>

<script src="<?php echo base_url('assets/backend/js/select2/select2.min.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/selectboxit/jquery.selectBoxIt.min.js');?>"></script>


<script src="<?php echo base_url('assets/backend/js/neon-calendar.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/neon-chat.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/neon-custom.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/neon-demo.js');?>"></script>

<script src="<?php echo base_url('assets/backend/js/wysihtml5/wysihtml5-0.4.0pre.min.js');?>"></script>
<script src="<?php echo base_url('assets/backend/js/wysihtml5/bootstrap-wysihtml5.js');?>"></script>

<!-- SHOW TOASTR NOTIFIVATION -->
<?php if ($this->session->flashdata('flash_message') != ""):?>

<script type="text/javascript">
	toastr.success('<?php echo $this->session->flashdata("flash_message");?>');
</script>

<?php endif;?>

<?php if ($this->session->flashdata('error_message') != ""):?>

<script type="text/javascript">
	toastr.error('<?php echo $this->session->flashdata("error_message");?>');
</script>

<?php endif;?>


<!---  DATA TABLE EXPORT CONFIGURATIONS -->
<script type="text/javascript">
	jQuery(document).ready(function($)
	{
		var datatable = $("#table_export").dataTable();
	});
</script>