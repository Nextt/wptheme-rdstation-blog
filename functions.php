<?php

require_once ( get_template_directory() . '/theme-options.php' );

if (!function_exists('get_theme_option')) {
  function get_theme_option($option = '', $_echo = true) {
    $options = get_option('rd-mkt_theme_options');
    $r = $options[$option];
    if ($_echo) { echo $r; } else { return $r; }
  }
}

if (!function_exists('theme_logo_url')) {
  function theme_logo_url($_echo = true) {
    get_theme_option('logo_url', $_echo);
  }
}

if (!function_exists('theme_logo_link')) {
  function theme_logo_link($_echo = true) {
    get_theme_option('logo_link', $_echo);
  }
}

if (!function_exists('theme_header_title')) {
  function theme_header_title($_echo = true) {
    // maybe use bloginfo( 'name' );
    get_theme_option('header_title', $_echo);
  }
}

if (!function_exists('theme_header_desc')) {
  function theme_header_desc($_echo = true) {
    // maybe use bloginfo( 'description' );
    get_theme_option('header_desc', $_echo);
  }
}

if (!function_exists('theme_footer_desc')) {
  function theme_footer_desc($_echo = true) {
    get_theme_option('footer_desc', $_echo);
  }
}

if (!function_exists('theme_contact_link')) {
  function theme_contact_link($_echo = true) {
    get_theme_option('contact_link', $_echo);
  }
}

if (!function_exists('theme_webprofile_twitter')) {
  function theme_webprofile_twitter($_echo = true) {
    get_theme_option('webprofile_twitter', $_echo);
  }
}

if (!function_exists('theme_webprofile_facebook')) {
  function theme_webprofile_facebook($_echo = true) {
    get_theme_option('webprofile_facebook', $_echo);
  }
}

if (!function_exists('theme_webprofile_linkedin_id')) {
  function theme_webprofile_linkedin_id($_echo = true) {
    get_theme_option('webprofile_linkedin_id', $_echo);
  }
}

if (!function_exists('theme_webprofile_feedburner')) {
  function theme_webprofile_feedburner($_echo = true) {
    get_theme_option('webprofile_feedburner', $_echo);
  }
}

function is_option_setted($option){
  return !is_string_null_or_empty( get_theme_option($option, false) );
}
function is_string_null_or_empty($question){
  return (!isset($question) || trim($question)==='');
}

// remove junk from head
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// removes detailed login error information for security
add_filter('login_errors', create_function('$a', "return null;"));

// excludes pages from search results
function exclude_pages_from_search($query) {
  if ($query->is_search) {
    $query->set('post_type', 'post');
  }
  return $query;
}
add_filter('pre_get_posts','exclude_pages_from_search');

// enables widgets
if ( function_exists('register_sidebar') )
  // Sidebar Default Widgets
  register_sidebar(array('name' => 'Sidebar',
    'before_widget' => '<div id="%1$s" class="widget-area widget-sidebar">',
    'after_widget' => '</div> <!-- widget #%1$s -->',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
  // Footer Widgets
  register_sidebar(array('name' => 'Footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));
  // The Top Widget For Main Banner
  register_sidebar(array('name' => 'Top Banner',
    'before_widget' => '<section id="main-banner">',
    'after_widget' => '</section>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  ));

// post thumbnail support
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
  set_post_thumbnail_size( 200, 150, true );
  add_image_size( 'facebook-thumb', 50, 50 );
}

// custom menu support
add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menus' ) ) {
  register_nav_menus(
    array(
      'header-menu' => 'Header Menu',
      'sidebar-menu' => 'Sidebar Menu',
      'footer-menu' => 'Footer Menu'
    )
  );
}

// custom excerpt ellipses for 2.9+
function custom_excerpt_more($more) {
  return 'Leia mais &raquo;';
}
add_filter('excerpt_more', 'custom_excerpt_more');
// no more jumping for read more link
function no_more_jumping($post) {
  return '<a href="'.get_permalink($post->ID).'" class="read-more">'.'&nbsp; Continue lendo &raquo;'.'</a>';
}
add_filter('excerpt_more', 'no_more_jumping');

// category id in body and post class
function category_id_class($classes) {
  global $post;
  foreach((get_the_category($post->ID)) as $category)
    $classes [] = 'cat-' . $category->cat_ID . '-id';
  return $classes;
}
add_filter('post_class', 'category_id_class');
add_filter('body_class', 'category_id_class');

// Social share buttons - horizontal
function btn_horz_tweet() {
  global $post;
  echo '<a href="http://twitter.com/share" class="twitter-share-button" lang="en" data-count="horizontal" data-url="' . get_permalink($post->ID) . '" data-text="' . get_the_title($post->ID) . '" data-via="' . theme_webprofile_twitter(false) . '">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
}
function btn_horz_fblike() {
  global $post;
  echo '<iframe src="http://www.facebook.com/plugins/like.php?app_id=169216193155429&amp;href=' . get_permalink($post->ID) . '&amp;send=false&amp;layout=standard&amp;width=510&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:510px; height:35px;" allowTransparency="true"></iframe>';
}
function btn_horz_gplusone() {
  global $post;
  echo '<g:plusone size="medium" href="' . get_permalink($post->ID) . '"></g:plusone>';
}
function btn_horz_linkedin() {
  global $post;
  echo '<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-url="' . get_permalink($post->ID) . '" data-counter="right"></script>';
}

// Social share buttons - vertical
function btn_vert_tweet() {
  global $post;
  echo '<a href="http://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="vertical" data-url="' . get_permalink($post->ID) . '" data-text="' . get_the_title($post->ID) . '" data-via="' . theme_webprofile_twitter(false) . '">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>';
}
function btn_vert_fblike() {
  global $post;
  echo '<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=226762650709944&amp;xfbml=1"></script><fb:like href="' . get_permalink($post->ID) . '" send="false" layout="box_count" width="60" show_faces="false" action="like" font=""></fb:like>';
}
function btn_vert_gplusone() {
  global $post;
  echo '<g:plusone size="tall" href="' . get_permalink($post->ID) . '"></g:plusone>';
}
function btn_vert_linkedin() {
  global $post;
  echo '<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/Share" data-url="' . get_permalink($post->ID) . '" data-counter="top"></script>';
}

// Social share meta - Facebook metatags
function fb_metatags() {
  global $post;

  $img_url = theme_logo_url(false);
  if (is_single()) {
    if (function_exists('wp_get_attachment_thumb_url') && function_exists('get_post_thumbnail_id') && has_post_thumbnail()) { $img_url =  wp_get_attachment_thumb_url(get_post_thumbnail_id($post->ID, 'thum_fb')); }
    $metatags = '<meta property="og:url" content="' . get_permalink($post->ID) . '"/>
<meta property="og:title" content="' . get_the_title($post->ID) . '" />
<meta property="og:type" content="article" />';
  } else {
    $metatags = '<meta property="og:url" content="' . get_bloginfo( 'url' ) . '"/>
<meta property="og:title" content="' . get_bloginfo( 'name' ) . '" />
<meta property="og:description" content="' . get_bloginfo( 'description' ) . '" />
<meta property="og:type" content="blog" />';
  }
  $metatags = $metatags . '<meta property="og:image" content="' . $img_url . '" />';
  echo $metatags;
}
add_action( 'wp_head', 'fb_metatags' );

// Social share meta - Google +1 script
function gplusone_scrpit() {
  echo '<script type="text/javascript">
window.___gcfg = {lang: "pt-BR"};
(function() {
	var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
	po.src = "https://apis.google.com/js/plusone.js";
	var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
})();
</script>';
}
add_action( 'wp_footer', 'gplusone_scrpit' );

function alterar_titulo($titulo) {
  $titulo = attribute_escape($titulo);
  $keywords = array( '#Protected:#', '#Private:#' );
  $substituir = array(
    '', // podes definir se queres branco ou outra palavra, imagem, etc
    '' // O mesmo para quando aparece o texto Private
  );
  $titulo = preg_replace($keywords, $substituir, $titulo);
  return $titulo;
}
//add_filter('the_title', 'alterar_titulo');

function getPostViews($postID){
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
    delete_post_meta($postID, $count_key);
    add_post_meta($postID, $count_key, '0');
    return "Nenhuma visualização";
  }
  return $count.' visitas';
}
function incrementPostViews($postID) {
  if ( !is_user_logged_in() ) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if( $count == '' ) {
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
    } else {
      $count++;
      update_post_meta($postID, $count_key, $count);
    }
  }
}

function get_random_top_banner() {
  global $post;
  return '';
}
function get_post_end_banner() {
  global $post;
  return '';
}
//function add_postbanner_to_content($content) {
//	if(is_feed() || is_single()) {
//		$content .= get_post_end_banner();
//	}
//	return $content;
//}
//add_filter('the_content', 'add_postbanner_to_content');


if ( ! function_exists( 'twentyeleven_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own twentyeleven_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function twentyeleven_comment( $comment, $args, $depth ) {
  $GLOBALS['comment'] = $comment;
  switch ( $comment->comment_type ) :
    case 'pingback' :
    case 'trackback' :
  ?>
  <li class="post pingback">
    <p><?php _e( 'Pingback:', 'twentyeleven' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?></p>
  <?php
      break;
    default :
  ?>
  <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
    <article id="comment-<?php comment_ID(); ?>" class="comment">
      <footer class="comment-meta">
        <div class="comment-author vcard">
          <?php
            $avatar_size = 68;
            if ( '0' != $comment->comment_parent )
              $avatar_size = 39;

            echo get_avatar( $comment, $avatar_size );

            /* translators: 1: comment author, 2: date and time */
            printf( __( '%1$s on %2$s <span class="says">said:</span>', 'twentyeleven' ),
              sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
              sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
                esc_url( get_comment_link( $comment->comment_ID ) ),
                get_comment_time( 'c' ),
                /* translators: 1: date, 2: time */
                sprintf( __( '%1$s at %2$s', 'twentyeleven' ), get_comment_date(), get_comment_time() )
              )
            );
          ?>

          <?php edit_comment_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
        </div><!-- .comment-author .vcard -->

        <?php if ( $comment->comment_approved == '0' ) : ?>
          <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'twentyeleven' ); ?></em>
          <br />
        <?php endif; ?>

      </footer>

      <div class="comment-content"><?php comment_text(); ?></div>

      <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'twentyeleven' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
      </div><!-- .reply -->
    </article><!-- #comment-## -->

  <?php
      break;
  endswitch;
}
endif; // ends check for twentyeleven_comment()