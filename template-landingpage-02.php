<?php
/*
Template Name: RD Station - Landing 02 - Pay Conversion
*/
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php echo get_post_meta(get_the_ID(), 'rdlp_title', true); ?></title>
  <meta name="description" content="<?php echo get_post_meta(get_the_ID(), 'rdlp_subtitle', true); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <style rel="stylesheet">
<?php include (TEMPLATEPATH . '/template-style.css'); ?>
<?php echo get_post_meta(get_the_ID(), 'rdlp_css', true); ?>
  </style>

  <meta property="og:title" content="<?php echo get_post_meta(get_the_ID(), 'rdlp_title', true); ?>" />
  <meta property="og:image" content="<?php echo get_post_meta(get_the_ID(), 'rdlp_imgfeatured', true); ?>" />
  <meta property="fb:admins" content="159732357452275" />

  <script type="text/javascript">
    var _gaq = _gaq || [];

   </script>
</head>
<body>
<?php 
  if ( have_posts() ) {
    while ( have_posts() ) { 
      the_post();
      if( post_password_required($post->ID) ) { 
        the_content();
      } else { 
?>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=159732357452275";
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

  <div id="container">
    <header>
      <div class="wrapper">
        <figure>
          <img src="<?php echo get_post_meta(get_the_ID(), 'rdlp_imglogo', true); ?>" alt="Logo" />
        </figure>
        <hgroup>
          <h1><?php echo get_post_meta(get_the_ID(), 'rdlp_title', true); ?></h1>
          <h2><?php echo get_post_meta(get_the_ID(), 'rdlp_subtitle', true); ?></h2>
        </hgroup>
      </div>
    </header>
    <section class="clearfix">
      <div class="wrapper">
        <div id="content" class="left">
          <figure>
            <img src="<?php echo get_post_meta(get_the_ID(), 'rdlp_imgfeatured', true); ?>" alt="Imagem" />
          </figure>
          <?php echo get_post_meta(get_the_ID(), 'rdlp_topics', true); ?>
        </div>
        <div id="conversion" class="right">
          <header>
            <h2>Faça o download grátis aqui!</h2>
            <p>Para fazê-lo, pedimos em troca um Tweet ou post no Facebook.</p>
          </header>
          <section>
            <div id="pay-area">
              <p>Escolha uma rede, clique no botão correspondente e confirme a postagem para ser redirecionado para a página de download (você poderá ver o texto antes de confirmar).</p>
              <div class="actions">
                <a class="call_button" id="call_pay_twitter" href="<?php echo get_post_meta(get_the_ID(), 'rdlp_paylink_twitter', true); ?>" target="_blank">Enviar Tweet</a>
                <a class="call_button" id="call_pay_facebook" href="<?php echo get_post_meta(get_the_ID(), 'rdlp_paylink_facebook', true); ?>" target="_blank">Postar Facebook</a>
              </div>
            </div>
          </section>
        </div>
        <div id="social-share" class="socialfloating">
          <a href="http://twitter.com/share" class="twitter-share-button" data-count="vertical">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script><br />
          <g:plusone size="tall"></g:plusone><br />
          <div class="fb-like" data-send="false" data-layout="box_count" data-width="55" data-show-faces="false"></div><br />
        </div>
      </div>
    </section>
  </div>

<?php
      }
    }
  }
?>
</body>
<!-- +1 Button -->
<script type="text/javascript">
  window.___gcfg = {lang: 'pt-BR'};
(function() {
 var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
 po.src = '//apis.google.com/js/plusone.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
 })();
</script>
</html>