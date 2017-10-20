<div class="panel panel-default">
	<div class="panel-heading">Quuestions</div>
	<div class="panel-body" id="qnocontainer" style="height: 60vh; overflow-y: auto;">

		<div class="panel panel-primary" id="english">
			<div class="panel-heading">English</div>
			<div class="panel-body">
			<?php 
				for ($i=1; $i <=25 ; $i++) 
				{
					echo '<button type="submit" class="current btn btn-info qno col-sm-3">'.$i.'</button>';
				}
			?>
						

			</div>
		</div>
		<div class="panel panel-primary" id="math">
			<div class="panel-heading">Maths</div>
			<div class="panel-body">
			<?php 
				for ($i=26; $i <=50 ; $i++) 
				{
					echo '<button type="submit" class="current btn btn-info qno col-sm-3">'.$i.'</button>';
				}
			?>
			</div>
		</div>
		<div class="panel panel-primary" id="reasoning">
			<div class="panel-heading">Reasoning</div>
			<div class="panel-body">
			<?php 
				for ($i=51; $i <=75 ; $i++) 
				{
					echo '<button type="submit" class="current btn btn-info qno col-sm-3">'.$i.'</button>';
				}
			?>
			</div>
		</div>
		<div class="panel panel-primary" id="gk">
			<div class="panel-heading">GK</div>
			<div class="panel-body">
			<?php 
				for ($i=76; $i <=100 ; $i++) 
				{
					echo '<button type="submit" class="current btn btn-info qno col-sm-3">'.$i.'</button>';
				}
			?>
			</div>
		</div>
	</div>
</div>