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