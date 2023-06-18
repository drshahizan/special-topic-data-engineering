<?php include 'header_browse.php';?>
<!-- MOVIE LIST, GENRE WISE LISTING -->
<?php
	$movies		=	$this->crud_model->get_mylist('movie');
	$series		=	$this->crud_model->get_mylist('series');
	?>
<div class="row" style="margin:20px 60px;">
	<h4 style="text-transform: capitalize;">
		<?php echo get_phrase('My_List');?> 
			(<?php echo count($movies) + count($series);?>)
	</h4>
	<div class="content">
		<div class="grid">
			<?php 
				for ($i = 0; $i<count($movies) ; $i++)
				{
					$title	=	$this->db->get_where('movie' , array('movie_id' => $movies[$i]))->row()->title;
					$link	=	base_url().'index.php?browse/playmovie/' . $movies[$i];
					$thumb	=	$this->crud_model->get_thumb_url('movie' , $movies[$i]);
					include 'thumb.php';
				}
				
				for ($i = 0; $i<count($series) ; $i++)
				{
					$title	=	$this->db->get_where('series' , array('series_id' => $series[$i]))->row()->title;
					$link	=	base_url().'index.php?browse/playseries/' . $series[$i];
					$thumb	=	$this->crud_model->get_thumb_url('movie' , $series[$i]);
					include 'thumb.php';
				}
				?>
		</div>
	</div>
	<div style="clear: both;"></div>
	<ul class="pagination">
		<?php echo $this->pagination->create_links(); ?>
	</ul>
</div>
<div class="container" style="margin-top: 90px;">
	<hr style="border-top:1px solid #333;">
	<?php include 'footer.php';?>
</div>