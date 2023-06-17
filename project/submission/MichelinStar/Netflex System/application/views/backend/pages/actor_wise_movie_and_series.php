<div class="row justify-content-center">
    <div class="col-xl-8 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <!-- <h4 class="header-title">Actor List</h4> -->
                <ul class="nav nav-pills bg-light nav-justified mb-3">
                    <li class="nav-item">
                        <a href="#movie" data-toggle="tab" aria-expanded="false" class="nav-link rounded-0 active">
                            <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">Movies</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#series" data-toggle="tab" aria-expanded="true" class="nav-link rounded-0">
                            <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                            <span class="d-none d-lg-block">TV-Series</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="movie">
                       <table id="" class="table dt-responsive nowrap" width="100%">
               					<thead>
               						<tr>
               							<th>
               								#
               							</th>
               							<th></th>
               							<th>Movie Title</th>
               							<th>Genre</th>
               							<th>Operation</th>
               						</tr>
               					</thead>
               					<tbody>
               						<?php
                            $movies = $this->crud_model->get_actor_wise_movies_and_tv_series($actor_id, 'movie') ;
               							$counter = 1;
               							foreach ($movies as $row):
               							  ?>
               						<tr>
               							<td style="vertical-align: middle;"><?php echo $counter++;?></td>
               							<td><img src="<?php echo $this->crud_model->get_thumb_url('movie' , $row['movie_id']);?>" style="height: 60px;" /></td>
               							<td style="vertical-align: middle;"><?php echo $row['title'];?></td>
               							<td style="vertical-align: middle;">
               								<?php echo $this->db->get_where('genre',array('genre_id'=>$row['genre_id']))->row()->name;?>
               							</td>
               							<td style="vertical-align: middle;">
               								<a href="<?php echo base_url();?>index.php?browse/playmovie/<?php echo $row['movie_id'];?>"
               									target="_blank" class="btn btn-secondary btn-xs btn-mini">
               								<i class="fa fa-external-link"></i>visit</a>
               								<a href="<?php echo base_url();?>index.php?admin/movie_edit/<?php echo $row['movie_id'];?>" class="btn btn-info btn-xs btn-mini">
               								edit</a>
               								<a href="<?php echo base_url();?>index.php?admin/movie_delete/<?php echo $row['movie_id'];?>" class="btn btn-danger btn-xs btn-mini" onclick="return confirm('Want to delete?')">
               								delete</a>
               							</td>
               						</tr>
               						<?php endforeach;?>
               					</tbody>
               				</table>
                    </div>
                    <div class="tab-pane show" id="series">
                       <table id="" class="table dt-responsive nowrap" width="100%">
                 					<thead>
                 						<tr>
                 							<th>
                 								#
                 							</th>
                 							<th></th>
                 							<th>Series Title</th>
                 							<th>Genre</th>
                 							<th>Operation</th>
                 						</tr>
                 					</thead>
                 					<tbody>
                 						<?php
                 							$seriess = $this->crud_model->get_actor_wise_movies_and_tv_series($actor_id, 'series');
                 							$counter = 1;
                 							foreach ($seriess as $row):
                 							  ?>
                 						<tr>
                 							<td style="vertical-align: middle;"><?php echo $counter++;?></td>
                 							<td><img src="<?php echo $this->crud_model->get_thumb_url('series' , $row['series_id']);?>" style="height: 60px;" /></td>
                 							<td style="vertical-align: middle;"><?php echo $row['title'];?></td>
                 							<td style="vertical-align: middle;">
                 								<?php echo $this->db->get_where('genre',array('genre_id'=>$row['genre_id']))->row()->name;?>
                 							</td>
                 							<td style="vertical-align: middle;">
                 								<a href="<?php echo base_url();?>index.php?browse/playseries/<?php echo $row['series_id'];?>"
                 									target="_blank" class="btn btn-secondary btn-xs btn-mini">
                 								<i class="fa fa-external-link"></i>visit</a>
                 								<a href="<?php echo base_url();?>index.php?admin/series_edit/<?php echo $row['series_id'];?>" class="btn btn-info btn-xs btn-mini">
                 								manage</a>
                 								<a href="<?php echo base_url();?>index.php?admin/series_delete/<?php echo $row['series_id'];?>" class="btn btn-danger btn-xs btn-mini" onclick="return confirm('Want to delete?')">
                 								delete</a>
                 							</td>
                 						</tr>
                 						<?php endforeach;?>
                 					</tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
