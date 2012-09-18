<aside id="sidebar">
	<header>
		<h1>Blog RD Station</h1>
		<p>O RD Station é uma plataforma de marketing digital destinada a ajudar médias e pequenas empresas a gerar resultados de negócio de maneira incremental e consistente.</p>
		<a href="http://www.rdstation.com.br/" title="Clique e conheça o RD Station" class="cta-rdstation" target="_blank">Clique e conheça o RD Station</a>
	</header>
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
	<?php if ( is_option_setted('webprofile_facebook') ) { ?>
		<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F<?php theme_webprofile_facebook(); ?>&amp;width=270&amp;height=270&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23f3f2eb&amp;stream=false&amp;header=false&amp;appId=261838613827121" scrolling="no" frameborder="0" style="border:none; background:#fff; overflow:hidden; width:270px; height:270px;" allowTransparency="true"></iframe>
	<?php } ?>
	<hr />
	<?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?><?php endif ?>


</aside> <!-- #sidebar -->