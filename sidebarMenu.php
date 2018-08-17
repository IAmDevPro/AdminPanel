<div class="col col-md-3 col-sm-12">			
	<div class="panel-group" id="accordion">
	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
			Congregations</a>
		  </h4>
		</div>
		<div id="collapse1" class="panel-collapse collapse in">
			<ul class="list-group">
				<?php foreach($congregList as $congregation) {?>
					<li class="list-group-item"><?php echo ($congregation[0]); ?></li>
				<?php }	?>
			</ul>
		</div>
	  </div>
	  <div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
			Admins</a>
		  </h4>
		</div>
		<div id="collapse2" class="panel-collapse collapse">
			<ul class="list-group">
            <?php print_r($admins); ?>
                <?php foreach($admins as $admin) {?>
			    	<li class="list-group-item"><?php echo ($admin['login']); ?></li>
			    <?php }	?>
			</ul>
		</div>
	  </div>
		<div class="panel panel-default">
		<div class="panel-heading">
		  <h4 class="panel-title">
			<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
			Users</a>
		  </h4>
		</div>
		<div id="collapse3" class="panel-collapse collapse">
			<ul class="list-group">
				<li class="list-group-item"><span class="badge">102</span> User list</li>
			</ul>
		</div>
	  </div>
	</div> 
</div>