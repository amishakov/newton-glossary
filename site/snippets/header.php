<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="robots" content="index, follow">
		<meta name="robots" content="noai, noimageai">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<?php echo $page->metaTags() ?>
		<link rel="alternate" type="application/rss+xml" title="Latest Additions" href="<?php echo $site->url() . "/latest/feed" ?>">
		<link rel="shortcut icon" href="<?php echo $site->url() ?>/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $site->url() ?>/assets/devices/apple-touch-icon-57x57-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $site->url() ?>/assets/devices/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo $site->url() ?>/assets/devices/apple-touch-icon-76x76-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $site->url() ?>/assets/devices/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $site->url() ?>/assets/devices/apple-touch-icon-120x120-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $site->url() ?>/assets/devices/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $site->url() ?>/assets/devices/apple-touch-icon-152x152-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php echo $site->url() ?>/assets/devices/apple-touch-icon-180x180-precomposed.png">
		<link rel="icon" type="image/png" sizes="192x192" href="<?php echo $site->url() ?>/assets/devices/android-touch-icon-192x192.png">
		<meta name="msapplication-TileImage" content="<?php echo $site->url() ?>/assets/devices/msapplication-tileimage-144x144.png">
		<meta name="msapplication-TileColor" content="#009900">
		<?php
			$url = 'assets/styles/styles.css';
			$file = $kirby->roots()->index() . '/' . $url;
			echo '<link href="' . $site->url() . '/' . F::dirname($url) . '/' . F::name($url) . '.css?' . F::modified($file) . '" rel="stylesheet">' . PHP_EOL;
		?>
	</head>

	<body>
		<header>
			<h1><a href="<?php echo $site->url() ?>/" title="Back to the home page."><?php echo html($site->title()) ?></a></h1>
			<p><?php echo html($site->description()) ?></p>
		</header>
