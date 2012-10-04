</div>
<footer>
      <div class="wrapper">
        <div class="row">
            <a id="return-top" href="#">Topo</a>
            <img src="<?php bloginfo( 'template_url' ); ?>/images/logo-footer.png" alt="Um produto Resultados Digitais"  class="logo-footer" />
            <div class="redes-sociais">
              <a id="twitter" href="http://twitter.com/ResDigitais" target="_blank" rel="tooltip" data-original-title="@ResDigitais"><span>Twitter</span></a>
              <a id="rss" href="http://feeds.feedburner.com/ResultadosDigitais" target="_blank" rel="tooltip" data-original-title="Assine nosso feed"><span>RSS</span></a>
              <a id="facebook" href="http://www.facebook.com/ResultadosDigitais" target="_blank" rel="tooltip" data-original-title="facebook.com/ResultadosDigitais"><span>Facebook</span></a>
              <a id="googleplus" href="http://plus.google.com/108141685269689088342" target="_blank" rel="publisher" data-original-title="Perfil no Google+"><span>Google+</span></a>
            </div>
        </div>
        
        <div id="footer-main" class="row">
          <div id="descricao-footer" class="box-footer">
              <?php if ( is_option_setted('footer_desc') ) { theme_footer_desc(); } ?>
         </div>
          <div id="seminarios-footer" class="box-footer">
            <a href="http://resultadosdigitais.com.br/materiais-educativos/" title="Conheça os materiais educativos da Resultados Digitais" target="_blank"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/materiais-educativos.png" alt="Ilustracao Materiais Educativos"><b>Conheça os materiais educativos da Resultados Digitais</b></a>
          </div>
          <div id="facebook-widget" class="box-footer last">
              <?php if ( is_option_setted('webprofile_facebook') ) { ?>
              <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2F<?php theme_webprofile_facebook(); ?>&amp;width=295&amp;height=185&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23FFFFFF&amp;stream=false&amp;header=false&amp;appId=261838613827121" scrolling="no" frameborder="0" style="border:none; background:#fff; overflow:hidden; width:295px; height:185px;" allowTransparency="true"></iframe>
              <?php } ?>
          </div>
        </div>

      </div>
    </footer>
	</div><!-- #wrapper -->
  <?php wp_footer(); ?>
</body>
</html>