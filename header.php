<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<title><?php if ( is_author() ) {
			echo 'Posts de &quot;'; wp_title(''); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_category() || is_tag() || is_archive() ) {
			echo 'Arquivo para &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Busca para &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
		}  elseif ( is_404() ) {
			echo 'Erro 404 - Conteúdo não encontrado | '; bloginfo( 'name' );
		} elseif ( is_home() ) {
			bloginfo( 'description' ); echo ' | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			wp_title(''); echo ' | '; bloginfo( 'name' );
	} ?></title>

	<meta http-equiv="imagetoolbar" content="no" />
	<meta property="fb:page_id" content="216744745124805" /> 
	<meta property="fb:admins" content="100001304551158" /> 
	<meta property="og:site_name" content="Blog RD Station" />
		
	<?php if ( is_option_setted('webprofile_feedburner') ) { ?>
		<link rel="alternate" type="application/rss+xml" title="Feed RSS" href="http://feeds.feedburner.com/<?php theme_webprofile_feedburner(); ?>" />
	<?php } else { ?>
		<link rel="alternate" type="application/rss+xml" title="Feed RSS" href="<?php bloginfo('rss2_url'); ?>" />
	<?php } ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/modernizr.js"></script>   
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/script.js"></script> 
	<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/jquery.float.box.js"></script>
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>
<body>
	<div id="bg-stripe"></div>
		<div id="wrapper">
			<header id="header_menu">
				<nav>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/images/logo-rdstation.png" /></a>
					<?php wp_nav_menu( array( 'container' => '', 'menu' => 'menu' ));?>
				</nav>
			</header>
