		<div class="clear"></div>
		<footer>
			<header><span><?php bloginfo( 'name' ); ?></span></header>
			<div id="description">
				<?php theme_footer_desc(); ?>
			</div>
			<div id="links">
			<?php if ( ! dynamic_sidebar( 'Footer' ) ) : ?>
				<div>
					<h3>Clientes atuais</h3>
					<img src="<?php bloginfo( 'template_url' ); ?>/images/marcas.png" alt="Nossos clientes" />    
				</div>
				<div>
					<h3>Contato</h3>
					<ul class="profiles">
						<li class="facebook_icon"><a href="http://www.facebook.com/<?php theme_webprofile_facebook(); ?>" target="_blank"><span>Facebook</span></a></li>
						<li class="twitter_icon"><a href="http://twitter.com/<?php theme_webprofile_twitter(); ?>" target="_blank"><span>Twitter</span></a></li>
						<li class="email_icon"><a href="<?php theme_contact_link(); ?>"><span>E-mail</span></a></li>
					</ul>                    
				</div>
			<?php endif ?>
			</div>
			<div class="clear"></div><hr />
			<div id="copyright">Copyright &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>.</div>
		</footer>
	</div><!-- #wrapper -->
	<div id="footer-stripe"></div>

<?php wp_footer(); ?>
</body>
</html>