<?php
/*
Template Name: RD Station - Landing 01
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
        <div id="content" class="left">
          <figure>
            <img src="<?php echo get_post_meta(get_the_ID(), 'rdlp_imgfeatured', true); ?>" alt="Imagem" />
          </figure>
          <?php echo get_post_meta(get_the_ID(), 'rdlp_topics', true); ?>
        </div>
        <div id="conversion" class="right">
          <header>
            <h2>Faça o download grátis aqui!</h2>
            <p>Basta preencher o formulário abaixo para recebê-lo em seu e-mail.</p>
          </header>
          <section>
<form method="POST" id="conversion-form" >
  <input type="hidden" name="token_rdstation" value="<?php echo get_post_meta(get_the_ID(), 'rd_token', true); ?>" />
  <input type="hidden" name="identificador" value="<?php echo get_post_meta(get_the_ID(), 'rdlp_identifier', true); ?>" />
  <input type="hidden" name="c_utmz" value="" />

  <div id="error-container">
  	<p>Preencha corretamente os campos marcados</p>
  </div>

  <div class="field">
  	<label>Nome:*</label>
		<input type="text" name="nome" class="required" />
  </div>
  <div class="field">
  	<label>E-mail:*</label>
		<input type="text" name="email_lead" class="required email" />
  </div>
  <div class="field">
  	<label>Telefone:*</label>
		<input type="text" name="telefone" class="required" />
  </div>
  <div class="field">
  	<label>Empresa:*</label>
		<input type="text" name="empresa" class="required" />
  </div>
  <div class="field">
  	<label>Cargo:*</label>
		<input type="text" name="cargo" class="required" />
  </div>
  
  <div class="field">
    <label><span id="math_expression">3 + 7 = ?</span></label>
    <input type="text" name="captcha" class="math" />
  </div>

  <div class="actions">
    <input type="submit" id="cf_submit" value="Receber material" />
    <img src="//static.rdstation.com.br/images/ajax-loader.gif" id="ajax-loader" alt="Enviando..." />
  </div>
  <p class="notice">Prometemos não utilizar suas informações de contato para enviar qualquer tipo de SPAM.</p>
</form>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
<script type="text/javascript" src="//downloads.mailchimp.com/js/jquery.form.js"></script>
<script type="text/javascript">
  $(document).ready(function($) {
    $("#ajax-loader").hide();
    var n1 = Math.floor(Math.random()*11) + 1;
    var n2 = Math.floor(Math.random()*11) + 1;
    $("#math_expression").html(n1 + " + " + n2 + " = ?");
    jQuery.validator.addMethod("math", function(v, e) { return v == (n1 + n2); }, "Resultado incorreto");
  
    var $ec = $('#error-container');
    var v_opts = { errorContainer: $ec, rules : { captcha : { math : true } } };
    var validator = $("#conversion-form").validate(v_opts);
    set_utmz_value();
  
    var ajax_opts = { 
        url: 'http://www.rdstation.com.br/salvar-conversao', type: 'GET',
        dataType: 'jsonp', jsonp: 'callback', jsonpCallback: 'jsonp_cb',
        beforeSubmit: function(){ if (!validator.form()) { return false; }; $("#cf_submit").hide(); $("#ajax-loader").show(); }, 
        success: cb_success, error: cb_failure 
      };
    $('#conversion-form').ajaxForm(ajax_opts);
  });
  
  function read_cookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) {
        return c.substring(nameEQ.length,c.length);
      }
    }
    return null;
  }
  function set_utmz_value() {
    try {
      var c_v = read_cookie('__utmz');
      $("input[type=hidden][name=c_utmz]").val(c_v);
    } catch(err) { }
  }
  
  function cb_success(resp) {
    $("#ajax-loader").hide(); $("#cf_submit").show();
      try { _gaq.push(['_trackPageview', '/<?php echo get_post_meta(get_the_ID(), 'rdlp_identifier', true); ?>/conversao']); } catch(err) { }
      location.href = '<?php echo get_post_meta(get_the_ID(), 'rdtyp_link', true); ?>';
  }
  function cb_failure(resp) {
    $("#ajax-loader").hide(); $("#cf_submit").show();
    alert("Não foi possível enviar seus dados. Por favor, tente novamente.");
  }
  function jsonp_cb(data){ return true; }
</script>
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