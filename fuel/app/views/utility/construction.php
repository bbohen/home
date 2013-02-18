<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<title><?= isset($title) ? $title : null ?></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="robots" content="" />

		<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<?= Casset::render_css() ?>

		<script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
	</head>

	<body>
	  	<div id="construction_wrapper">
	  		<div class="wrapper construction_content">
		  		<?= Asset::img('lab.png'); ?>
				<h1>Hey there! My site is currently under construction.</h1>
				<p>Contact Me:<p>		
				<a href="mailto:bbohen@gmail.com"><?= Asset::img('mail.png', array('id' => 'mail_icon')); ?></a>
				<a href="http://www.linkedin.com/pub/bradley-bohen/59/22a/164"><?= Asset::img('user.png', array('id' => 'linkedin')); ?></a>
			</div>
		</div>
	</body>
	<?= Casset::render_js() ?>
</html>