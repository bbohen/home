<div class="wrapper">
	<div class="header_bar">
		<h2><?= $project->title ?></h2>
	</div>
	<div id="gallery">
		<div id="panel">
			<?= Asset::img("projects/{$project->id}/main.png", array('id' => 'largeImage')) ?>
			<!-- <div id="description">First image description</div> -->
		</div>

		<!-- <div id="thumbs">
			<?= Asset::img("projects/{$project->id}/main.png", array('alt' => 'another description')) ?>
	        <?= Asset::img("projects/{$project->id}/1.png", array('alt' => 'another description')) ?>
	        <?= Asset::img("projects/{$project->id}/1.png", array('alt' => 'another description')) ?>
	        <?= Asset::img("projects/{$project->id}/1.png", array('alt' => 'another description')) ?>
		</div> -->
	</div>
	<div class="section">
		<h3>About</h3>
		<p><?= $project->description ?></p>
	</div>
	<div class="side_section">
		<h3>Technology Used</h3> 
	</div>
	

</div>