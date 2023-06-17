<?php include 'header_browse.php';?>

<div class="row" style="margin:20px 60px;">
	<h4 style="text-transform: capitalize;"><?php echo get_phrase('filter_by_cast'); ?></h4>
	<div class="content">
		<div class="grid">
			<div class="row">
				<div class="col-md-6 col-lg-2">
					<div class="select" style="width: 100%; margin-bottom: 10px">
						<select name="actor_id" id="actor_id" class="custom-select">
							<option value="all"><?php echo get_phrase('all_actors'); ?></option>
							<?php $actors = $this->db->get('actor')->result_array(); ?>
							<?php foreach ($actors as $key => $actor): ?>
								<option value="<?php echo $actor['actor_id']; ?>" <?php if ($actor['actor_id'] == $actor_id): ?>selected<?php endif; ?>><?php echo $actor['name']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-2">
					<div class="select" style="width: 100%; margin-bottom: 10px">
						<select name="director_id" id="director_id" class="custom-select">
							<option value="all"><?php echo get_phrase('all_directors'); ?></option>
							<?php $directors = $this->db->get('director')->result_array(); ?>
							<?php foreach ($directors as $key => $director): ?>
								<option value="<?php echo $director['director_id']; ?>" <?php if ($director['director_id'] == $director_id): ?>selected<?php endif; ?>><?php echo $director['name']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-2">
					<div class="select" style="width: 100%; margin-bottom: 10px">
						<select name="year" id="year" class="custom-select">
							<option value="all"><?php echo get_phrase('all_years'); ?></option>
							<?php foreach ($years as $key => $year): ?>
								<option value="<?php echo $year['year']; ?>" <?php if ($year['year'] == $search_key_year): ?>selected<?php endif; ?>><?php echo $year['year']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>

				<div class="col-md-6 col-lg-2">
					<div class="select" style="width: 100%; margin-bottom: 10px">
						<?php $countries = $this->crud_model->get_countries(); ?>
						<select name="country" id="country" class="custom-select">
							<option value="all"><?php echo get_phrase('all_countries'); ?></option>
							<?php foreach ($countries as $key => $country): ?>
								<option value="<?php echo $country['country_id']; ?>" <?php if ($country['country_id'] == $search_key_country): ?>selected<?php endif; ?>><?php echo $country['name']; ?></option>
							<?php endforeach; ?>
						</select>
					</div>
				</div>
				<div class="col-md-6 col-lg-2">
					<button type="submit" style="width: 100%; margin-bottom: 10px; margin-top: 2px; height: 38px;" class="btn btn-danger" onclick="submit('<?php echo $genre_id; ?>', '<?php echo $type; ?>')"><?php echo get_phrase('filter'); ?></button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- ITEM LIST, GENRE WISE LISTING -->
<div class="row" style="margin:20px 60px;">
	<h4 style="text-transform: capitalize;">
		<?php echo $this->db->get_where('genre', array('genre_id' => $genre_id))->row()->name;?>
		<?php
            if ($type == 'movie') {
                echo get_phrase('movies');
            }elseif ($type == 'series') {
                echo get_phrase('Tv_series');
            }
         ?>
		(<?php echo $total_result;?>)
	</h4>
	<div class="content">
		<div class="grid">
			<?php
			foreach ($items as $row)
			{
				$title	=	$row['title'];
                if ($type == 'movie') {
                    $link	=	base_url().'index.php?browse/playmovie/'.$row['movie_id'];
    				$thumb	=	$this->crud_model->get_thumb_url('movie' , $row['movie_id']);
                }elseif ($type == 'series') {
                    $link	=	base_url().'index.php?browse/playseries/'.$row['series_id'];
					$thumb	=	$this->crud_model->get_thumb_url('series' , $row['series_id']);
                }

				include 'thumb.php';
			}
			?>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>
<hr style="border-top:1px solid #333; margin-top: 50px;">
<div class="container">
	<?php include 'footer.php';?>
</div>

<script>
    function submit(genre_id, type)
    {
        actor_id  = document.getElementById("actor_id").value;
        director_id  = document.getElementById("director_id").value;
        year  = document.getElementById("year").value;
        country  = document.getElementById("country").value;
        window.location = "<?php echo base_url();?>index.php?browse/filter/"+type+ "/"+genre_id+ "/" + actor_id+ "/" + director_id+ "/" + year + "/" + country;
    }
</script>
