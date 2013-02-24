<div class="wrapper">
	<div class="header_bar">
		<h2><?= $project->title ?></h2>
	</div>
	<div id="gallery">
		<ul class="rslides">
  			<li><?= Asset::img("projects/{$project->id}/1.png", array('id' => 'largeImage')) ?></li>
 		    <li><?= Asset::img("projects/{$project->id}/2.png", array('id' => 'largeImage')) ?></li>
  			<li><?= Asset::img("projects/{$project->id}/3.png", array('id' => 'largeImage')) ?></li>
  			<li><?= Asset::img("projects/{$project->id}/4.png", array('id' => 'largeImage')) ?></li>
  			<li><?= Asset::img("projects/{$project->id}/5.png", array('id' => 'largeImage')) ?></li>
  			<?php

  				$n = $project->photo_count; 

  				for ($i=0; $i <= $n ; $i++) { 
  					# code...
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