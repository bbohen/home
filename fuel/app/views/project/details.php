<div class="wrapper">
	<div class="header_bar">
		<h2><a href="<?= Uri::base() ?>"><?= Asset::img('home.png'); ?></a> | <?= $project->title ?> <?php if (is_null($project->link)) {
			
		}elseif ($project->link == "Coming Soon") {
			echo "| Coming Soon";
		}else{
			echo "| <a href=$project->link>Project Link</a>";
		}?></h2>
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