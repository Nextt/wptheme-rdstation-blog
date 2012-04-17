		<section id="sidebar">

			<div id="subscribe" class="widget-area widget-sidebar">
				<h3>Assine nossos posts</h3>
				<form action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php theme_webprofile_feedburner(); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
					<label>Receba por e-mail:</label>
					<p><input type="text" placeholder="Endereço de email" name="email"/>
					<input type="submit" value=""/></p>
					<input type="hidden" value="<?php theme_webprofile_feedburner(); ?>" name="uri"/><input type="hidden" name="loc" value="pt_BR"/>
				</form>
				<a href="http://twitter.com/<?php theme_webprofile_twitter(); ?>" class="twitter-follow-button" data-lang="pt">Siga @<?php theme_webprofile_twitter(); ?></a>
				<script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
				<a href="http://feeds.feedburner.com/<?php theme_webprofile_feedburner(); ?>" class="rss_icon" target="_blank">Feed RSS</a>
				<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F<?php theme_webprofile_facebook(); ?>&amp;width=240&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=285" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:285px; margin: 0 0 30px 30px; background: #fff;" allowTransparency="true"></iframe>
			</div> <!-- widget #subscribe -->

			<div id="highlights" class="widget-area widget-sidebar">
				<h3>Posts em destaque</h3>
				<ul class="tabs">
					<li><a href="#recent">Recentes</a></li>
					<li><a href="#readed">+ lidos</a></li>
					<li><a href="#commented">+ comentados</a></li>
				</ul>                        
				<div class="tab_container">
					<div id="recent" class="tab_content">
						<ul>
						<?php
							query_posts( 'posts_per_page=5' );
							while ( have_posts() ) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
						<?php
							endwhile;
							wp_reset_query();
						?>
						</ul>
					</div>
					<div id="readed" class="tab_content">
						<ul>
						<?php
							query_posts( 'meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=5' );
							while ( have_posts() ) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
						<?php
							endwhile;
							wp_reset_query();
						?>
						</ul>
					</div>
					<div id="commented" class="tab_content">
						<ul>
						<?php
							query_posts( 'orderby=comment_count&posts_per_page=5' );
							while ( have_posts() ) : the_post(); ?>
								<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
						<?php
							endwhile;
							wp_reset_query();
						?>
						</ul>
					</div>
				</div>
			</div> <!-- widget #highlights -->

			<div id="categories" class="widget-area widget-sidebar">
				<h3>Categorias</h3>
				<ul>
					<?php wp_list_categories( 'orderby=name&show_count=1&title_li=' ); ?>
				</ul>
			</div> <!-- widget #categories -->

			<?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?>
			<?php endif ?>

		</section> <!-- #sidebar -->