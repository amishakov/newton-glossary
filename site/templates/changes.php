<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php
	/* Nab the current version of the site */
	$r = $site->release();
	/* Nab the number of term and source pages */
	$t = number_format(page('terms')->children()->count());
	$s = number_format(page('sources')->children()->count());
	/* Replace placeholders in the page text */
	$p = str_replace(array('_$r','_$t','_$s'), array($r,$t,$s), $page->text());
?>

<section>
	<article>
		<h2><?php echo html($page->title()) ?></h2>
		<?php echo kirbytext($p) ?>
	</article>
</section>

<?php snippet('footer') ?>
