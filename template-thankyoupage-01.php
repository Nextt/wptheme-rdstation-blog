<?php
/*
Template Name: RD Station - ThankYou 01
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
        <div id="content" class="center">
          <!-- <figure>
            <img src="<?php echo get_post_meta(get_the_ID(), 'rdlp_imgfeatured', true); ?>" alt="Imagem" />
          </figure> -->
          <?php the_content(); ?>
        </div>
        <div id="social-share" class="socialfloating">
          <a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php echo get_post_meta(get_the_ID(), 'rdlp_link', true); ?>" data-count="vertical">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script><br />
          <g:plusone size="tall" href="<?php echo get_post_meta(get_the_ID(), 'rdlp_link', true); ?>"></g:plusone><br />
          <div class="fb-like" data-send="false" data-layout="box_count" data-width="55" data-show-faces="false" data-href="<?php echo get_post_meta(get_the_ID(), 'rdlp_link', true); ?>"></div><br />
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