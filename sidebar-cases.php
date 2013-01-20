<aside id="sidebar" class="cases">
	<header>
		<h2>Segmentos</h2>
	</header>
	<?php

		$args = array(
		  'orderby' => 'name',
		  'show_count' => 0,
		  'pad_counts' => 0,
		  'hierarchical' => 1,
		  'taxonomy' => 'segments',
		  'title_li' => ''
		);

	?>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nec purus sit amet massa ornare gravida ac ut eros.</p>
	<h3>Categorias</h3>
	<ul>
		<?php wp_list_categories($args); ?>
	</ul>
	<hr />
	<ul class="widgets">
	<?php dynamic_sidebar( 'cases-sidebar' ); ?>
	</ul>
	<hr />
	<?php if ( is_option_setted('webprofile_feedburner') ) { ?>
		<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php theme_webprofile_feedburner(); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
			<label>Receba nossos posts em seu e-mail:</label>
			<input type="text" placeholder="Endereço de email" name="email"/>
			<input type="submit" value="Enviar"/>
			<input type="hidden" value="<?php theme_webprofile_feedburner(); ?>" name="uri"/><input type="hidden" name="loc" value="pt_BR"/>
		</form>
	<?php } ?>
	<?php if ( is_option_setted('webprofile_twitter') ) { ?>
		<a href="http://twitter.com/<?php theme_webprofile_twitter(); ?>" class="twitter-follow-button" data-lang="pt">Siga @<?php theme_webprofile_twitter(); ?></a><script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
	<?php } ?>
	<?php if ( is_option_setted('webprofile_feedburner') ) { ?>
		<a href="http://feeds.feedburner.com/<?php theme_webprofile_feedburner(); ?>" class="rss_icon" target="_blank">Feed RSS</a>
	<?php } else { ?>
		<a href="<?php bloginfo('rss2_url'); ?>" class="rss_icon" target="_blank">Feed RSS</a>
	<?php } ?>


</aside> <!-- #sidebar -->