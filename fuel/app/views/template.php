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
		<div id="bg_wrapper">
			<?= $nav ?>
			  	<div class="wrapper">
					<?= isset($content) ? $content : null ?>
					<div class="push"></div>
				</div>
			<?= $footer ?>
		</div>
	</body>
	<?= Casset::render_js() ?>
	<script type="text/javascript">

		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-27208158-1']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();

	</script>
</html>