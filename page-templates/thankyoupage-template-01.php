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
    * { margin: 0; padding: 0; outline: none; border: none; }
    .wrapper { width: 900px; margin: 0 auto; overflow: hidden; position: relative; }
    header, footer, nav, section, article, figure { display: block; }

    .clearfix:after {visibility: hidden;display: block;font-size: 0;content: " ";clear: both;height: 0;}
    * html .clearfix { zoom: 1; } /* IE6 */
    *:first-child+html .clearfix { zoom: 1; } /* IE7 */

    html, body { height: 100%; width: 100%; font-family: arial; }
    #container { position: absolute;left: 0;top: 0;width: 100%;height: 100%; }
    #container > header { padding: 12px 0px; background: #FFFFFF; color: #555555; }
    #container > header .wrapper { overflow: hidden; }
    #container > header figure { float: left; width: 30%; }
    #container > header hgroup { float: right; width: 70%; }
    #container > header h1 { margin: 4% 0 2% 0; }

    #container > section {  padding: 30px 0; background: #EEEEEE; color: #555555; min-height: 75%; }
    #container div.left { float: left; width: 45%; margin-left: 9%; }
    #container div.left img { margin: 0 0 35px 15px; }
    #container div.left li { margin-bottom: 15px; margin-left: 17px; }
    #container div.left li h3 { font-size: 17px; }
    #container div.left li p { font-size: 13px; }
    #container div.right { float: right; width: 40%; }
    #container div#content.center { width: 70%; margin: 0 auto; }
    #container div#content.center p { margin: 4px 0 16px 0; }
    #container div.socialfloating { position: absolute; top: 0; left: 0; width: 10%; }
    #container div.socialfloating iframe { margin: 10px 0 0 0; }

    #content figure { text-align: center; }

    #conversion header { height: 90px; background: #4678AC; padding: 5px 0px; }
    #conversion header h2 { font-weight: bold; margin: 15px 30px 0; padding: 0; font-size: 18px; text-align: left; color: #FFFFFF; }
    #conversion header p { font-size: 14px; line-height: 18px;margin: 5px 30px 10px; font-size: 14px; color: #FFFFFF; }
    #conversion section { background: #DDDDDD; padding: 20px 50px; }

    form#conversion-form .actions { text-align: center; }
    form#conversion-form label { display: position: relative; block; margin-bottom: 10px; font-size: 12px; color: #FFFFFF; }
    form#conversion-form input { width: 100%; height: 20px; line-height: 20px; padding: 0 0 0 3px; margin: 3px 0 5px 0; display: block; border: 1px solid #DDD; }
    form#conversion-form input[type=submit] { text-align: center; display: block; width: 210px; height: 45px; border: 0; font-weight: bold; font-size: 20px; cursor: pointer; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; margin: 16px auto 25px; }
    form#conversion-form textarea { width: 100%; line-height: 20px; padding: 0 0 0 3px;margin: 3px 0 5px 0; display: block; border: 1px solid #DDD; }
    form#conversion-form input[type=submit] { color: #FFFFFF; background: #ffc552; background: -moz-linear-gradient(top, #ffc552 0%, #c46e00 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffc552), color-stop(100%,#c46e00)); background: -webkit-linear-gradient(top, #ffc552 0%,#c46e00 100%); background: -o-linear-gradient(top, #ffc552 0%,#c46e00 100%); background: -ms-linear-gradient(top, #ffc552 0%,#c46e00 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffc552', endColorstr='#c46e00',GradientType=0 ); background: linear-gradient(top, #ffc552 0%,#c46e00 100%); }
    form#conversion-form input[type=submit]:hover { background: #ffcd5a; background: -moz-linear-gradient(top, #ffcd5a 0%, #d6800d 100%); background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ffcd5a), color-stop(100%,#d6800d)); background: -webkit-linear-gradient(top, #ffcd5a 0%,#d6800d 100%); background: -o-linear-gradient(top, #ffcd5a 0%,#d6800d 100%); background: -ms-linear-gradient(top, #ffcd5a 0%,#d6800d 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffcd5a', endColorstr='#d6800d',GradientType=0 ); background: linear-gradient(top, #ffcd5a 0%,#d6800d 100%); }
    form#conversion-form .notice { font-size: 10px; color: ; margin-top: 15px; }
    form#conversion-form label.error { display: none !important; }
    form#conversion-form input.error, form#conversion-form textarea.error { background: #FFDDDD; border: 1px solid #ED7575; }
    form#conversion-form #error-container { background: #FFDDDD; display: none; padding: 10px; margin: 0 -28px 20px -28px; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; }
    form#conversion-form #error-container p { color: #463A33; text-align: center; font-size: 12px; margin: 0; }
  
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