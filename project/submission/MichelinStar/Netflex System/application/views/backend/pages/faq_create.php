<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="panel panel-primary">
        	<div class="panel-heading">
				<div class="panel-title">
					<?php echo get_phrase('faq'); ?>
				</div>
			</div>
            <div class="panel-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/faq_create">
					<div class="form-group mb-3">
		                <label for="question">Faq Question</label>
		                <input type="text" class="form-control" id = "question" name="question">
		            </div>

					<div class="form-group mb-3">
		                <label for="answer">Faq Answer</label>
						<textarea class="form-control" id="answer" name="answer" rows="6"></textarea>
		            </div>

					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Create">
						<a href="<?php echo base_url();?>index.php?admin/faq_list" class="btn btn-black">Go back</a>
					</div>
				</form>
		    </div>
		</div>
	</div>
</div>
   