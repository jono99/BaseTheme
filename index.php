<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?></title>

<link rel="stylesheet" media="screen" type="text/css" href="<? bloginfo('template_directory'); ?>/css/style.css" />
<link rel="stylesheet" media="screen" type="text/css" href="<? bloginfo('template_directory'); ?>/style.css" />
<link rel="shortcut icon" href="<? bloginfo('template_directory'); ?>/images/favicon.png" />

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript">var siteurl = '<?php echo bloginfo('url'); ?>', templatedir = '<?php echo bloginfo('template_directory'); ?>';</script>
<?php wp_enqueue_script('bootstrap', get_bloginfo('template_directory').'/js/bootstrap.js', array('jquery'), '1.0', true ); ?>
<?php wp_enqueue_script('theme', get_bloginfo('template_directory').'/js/theme.js', array('jquery'), '1.0', true ); ?>

<?php wp_head(); ?>

</head>

<body <?php echo body_class(); ?>>

	<?php if (is_user_logged_in()) { ?>
	<div id="editlink">
		<div class="btn-group">
			<button type="button" class="btn btn-inverse btn-xs dropdown-toggle" data-toggle="dropdown" data-toggle="tooltip" data-original-title="Tools" data-placement="right" data-container="body"><i class="icon-cogs"></i></button>
			<ul class="dropdown-menu" role="menu">
				<li><a href="<?php echo bloginfo('url'); ?>/wp-admin/" data-toggle="tooltip" data-original-title="WP Admin" data-placement="right" data-container="body"><i class="icon-wp"></i></a></li>
				<li class="divider"></li>
				<li><a href="<?php echo bloginfo('url'); ?>/wp-admin/post.php?post=<?php echo $post->ID; ?>&action=edit" data-toggle="tooltip" data-original-title="Edit this item" data-placement="right" data-container="body"><i class="icon-pencil"></i></a></li>
				<li class="divider"></li>
				<li><a href="<?php echo wp_logout_url(get_bloginfo('url')); ?>" data-toggle="tooltip" data-original-title="Log Out" data-placement="right" data-container="body"><i class="icon-off"></i></a></li>
			</ul>
		</div>
	</div>
	<?php } ?>


<?php wp_footer(); ?>

</body>
</html>