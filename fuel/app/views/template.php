<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<title><?= isset($title) ? $title : null ?></title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="robots" content="" />

		<?= Casset::render_css() ?>

		<script src="http://code.jquery.com/jquery.min.js" type="text/javascript"></script>
	</head>

	<body>
		<?= $nav ?>
	  	<div id="wrapper">
			<?= isset($content) ? $content : null ?>
		</div>
		<?= $footer ?>
	</body>
	<?= Casset::render_js() ?>
</html>