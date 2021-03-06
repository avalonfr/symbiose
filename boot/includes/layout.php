<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html> <!--<![endif]-->
<head>
	<title>Symbiose</title>
	<meta charset="utf-8" />
	<meta name="description" content="Symbiose, the free and open-source webos." />
	<meta name="author" content="emersion" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="usr/share/css/webos/global.css" />

	<!-- MOBILE METAS -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<!-- FAVICONS -->
	<link rel="shortcut icon" href="usr/share/images/distributor/icons/favicon.ico" />
	<link rel="apple-touch-icon" href="usr/share/images/distributor/icons/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="usr/share/images/distributor/icons/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="usr/share/images/distributor/icons/apple-touch-icon-114x114.png" />

	<!-- SCRIPTS -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
		if (!window.Webos) {
			window.Webos = {
				name: 'Symbiose',
				standalone: false,
				built: false
			};
			window.W = window.Webos;
		}
	</script>
	<?php
	foreach($jsIncludes as $include => $includeConfig) { //Include base JS files
		$attrs = 'type="text/javascript" src="'.$include.'"';
		if (isset($includeConfig['async']) && $includeConfig['async'] == true) {
			$attrs .= ' async="true"';
		}

		echo '<script '.$attrs.'></script>';
	}
	?>
</head>
<body>
	<div id="userinterfaces"></div>
	<div id="webos-loading">
		<div class="center">
			<p><?php echo $t->get('Loading...'); ?></p>
		</div>
	</div>
	<!-- Javascript disabled -->
	<noscript id="webos-unsupported">
		<div class="center">
			<p class="error">
				<strong><?php echo $t->get('Your web browser doesn\'t support ${webos}', array('webos' => 'Symbiose')); ?></strong> : <?php echo $t->get('Javascript is required to launch it.'); ?><br /><?php echo $t->get('Please update your web browser (${download-link}) or turn on Javascript.', array('download-link' => '<a href="http://www.mozilla.org/firefox/new/" target="_blank">'.$t->get('download ${browser}', array('browser' => 'Mozilla Firefox')).'</a>')); ?>
			</p>
		</div>
	</noscript>
	<div id="webos-loading-console" style="display: none;"></div>
	<!-- Browser unsupported -->
	<!--[if lt IE 10 ]>
	<div id="webos-unsupported">
		<div class="center">
			<p class="error">
				<strong><?php echo $t->get('Your web browser doesn\'t support ${webos}', array('webos' => 'Symbiose')); ?></strong> : <?php echo $t->get('A recent browser is required to launch it.'); ?><br /><?php echo $t->get('Please update your web browser (${download-link}).', array('download-link' => '<a href="http://www.mozilla.org/firefox/new/" target="_blank">'.$t->get('download ${browser}', array('browser' => 'Mozilla Firefox')).'</a>')); ?>
			</p>
		</div>
	</div>
	<![endif]-->
</body>
</html>