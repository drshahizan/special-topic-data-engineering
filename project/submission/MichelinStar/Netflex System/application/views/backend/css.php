<link rel="stylesheet" href="<?php echo base_url('assets/backend/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/font-icons/entypo/css/entypo.css');?>">
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/bootstrap.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/neon-core.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/neon-theme.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/neon-forms.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/custom.css');?>">
<?php
    $skin_colour = $this->db->get_where('settings' , array('type' => 'skin_colour'))->row('description');
    if ($skin_colour != ''):?>
    <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/skins/' . $skin_colour . '.css');?>">

<?php endif;?>

<script src="<?php echo base_url('assets/backend/js/jquery-1.11.0.min.js');?>"></script>

        <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="shortcut icon" href="<?php echo base_url('assets/backend/images/favicon.png');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/backend/css/font-icons/font-awesome/css/font-awesome.min.css');?>">


<link rel="stylesheet" href="<?php echo base_url('assets/backend/js/vertical-timeline/css/component.css');?>">

<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/backend/datatable/dataTables/css/dataTables.bootstrap.css');?>"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/backend/datatable/buttons/css/buttons.bootstrap.css');?>"/>

<link rel="stylesheet" href="<?php echo base_url('assets/backend/js/wysihtml5/bootstrap-wysihtml5.css');?>">

<!--Amcharts-->
<script src="<?php echo base_url('assets/backend/js/amcharts/amcharts.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/pie.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/serial.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/gauge.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/funnel.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/radar.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/exporting/amexport.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/exporting/rgbcolor.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/exporting/canvg.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/exporting/jspdf.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/exporting/filesaver.js');?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/backend/js/amcharts/exporting/jspdf.plugin.addimage.js');?>" type="text/javascript"></script>

<!--Text editor-->
<script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>

<script>
    
    function checkDelete()
    {
        var chk=confirm("Are You Sure To Delete This !");
        if(chk)
        {
          return true;
        }
        else{
            return false;
        }
    }
</script>
