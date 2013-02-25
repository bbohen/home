<div class="wrapper">
	<div class="text_box">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus semper elit vitae urna iaculis vehicula. Nunc vel est quis massa convallis cursus ac a urna. Curabitur nunc dolor, tincidunt ut iaculis ut, aliquam vitae purus. Morbi non tortor diam, eu placerat urna. Cras sed diam erat, scelerisque tempus erat. Nullam convallis interdum orci, eu mollis risus lobortis eget. Aenean convallis placerat magna, non convallis tortor rutrum quis. Curabitur lobortis enim pretium lorem hendrerit ultricies.</p>
	</div>
	<?php foreach($projects as $project) : ?>
		<div class="box">
			<?= $project->title ?>
			<?= Asset::img("projects/{$project->id}/thumb.png", array('id' => 'largeImage')) ?>
			<?= Html::anchor("projects/{$project->title}", 'Details', array('class' => 'detail_button')) ?>
		</div>
	<?php endforeach ?>
</div>