<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="<?php echo esc_url(home_url()); ?>/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo esc_url(home_url()); ?>/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo esc_url(home_url()); ?>/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo esc_url(home_url()); ?>/favicon-160x160.png" sizes="160x160">
	<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
	<link rel="alternate" type="application/rss+xml" title="<?php echo get_bloginfo('name'); ?> Feed" href="<?php echo esc_url(get_feed_link()); ?>">

	<?php wp_head(); ?>
</head>
