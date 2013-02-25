<div class="wrapper">
	<div class="header_bar">
		<h2><?= $project->title ?></h2>
	</div>
	<div id="gallery">
		<ul class="rslides">
  			<?php
  				$n = $project->photo_count; 

  				for ($i=1; $i <= $n ; $i++) { 
  					echo '<li>'. Asset::img("projects/{$project->id}/$i.png", array('id' => 'largeImage')).'</li>';
  				}
  			?>
		</ul>
	</div>
	<div class="section">
		<h3>About</h3>
		<p><?= $project->about ?></p>
	</div>
	<div class="side_section">
		<h3>Technology Used</h3>
		<?php
			
			$step1 = explode(" ", $project->tech);
			$keyWord = Array();

			// loop each word array
			echo "<ul class='tech_list'>";
			foreach ($step1 as $eachWord) { 	
    			echo "<li>$eachWord</li>";
			} 
			echo "</ul>"; 
		?>
	</div>
	

</div>