<div class="wrapper">
	<div class="text_box">
		<p>Hello there, my name is Brad Bohen. <br/> I develop and design usable, attractive websites, apps and user experiences for the web. Please click around and check out my different projects, I will be continually updating these as I revisit past work.
		</p>
		<ul>
			<li>Send me an <a href="mailto:bbohen@gmail.com">Email</a></li>
			<li>Check out my <a href="http://www.linkedin.com/pub/bradley-bohen/59/22a/164">Linked In Profile</a></li>
		<ul>
	</div>
	<?php foreach($projects as $project) : ?>
		<a href="projects/<?= $project->id ?>" >
		<div class="box">
			<?= Asset::img("projects/{$project->id}/thumb.png", array('class' => 'thumb')) ?>
			<?= Html::anchor("projects/{$project->id}", $project->title, array('class' => 'detail_button')) ?>
		</div>
		</a>
	<?php endforeach ?>
</div>