<?php 



/* jQuery from Google
-------------------------------------------------------------- */



if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js", false, null,true);
   wp_enqueue_script('jquery');
}



/*
function scripts() {
  wp_deregister_script('jquery');
  wp_deregister_script( 'wp-embed' );
  wp_deregister_script( 'wp_customize_support_script' );
}
add_action( 'wp_enqueue_scripts', 'scripts', 1 );
*/




/* Enqueued Scripts
-------------------------------------------------------------- */



 function load_my_styles_scripts() {
     // Load my stylesheet
     wp_enqueue_style( 'styles', get_template_directory_uri() . '/style.css', '', 1, 'all' ); 

     // Load my javascripts
     wp_enqueue_script( 'jquery-addon', get_template_directory_uri() . '/js/custom-min.js', array('jquery'), '', true );
     
      wp_enqueue_script( 'jquery-slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '', true );
     
     
 }
 
 add_action( 'wp_enqueue_scripts', 'load_my_styles_scripts', 20 );
 
 
 // Critical Styles in the header
 
/*
add_action( 'wp_head', 'internal_css_print' );
function internal_css_print() {
   echo '<style>';
   
   include_once get_template_directory() . '/style.css';
  
   echo '</style>';
}
*/



/* Force Gravity Forms to init scripts in the footer and ensure that the DOM is loaded before scripts are executed
-------------------------------------------------------------- */


add_filter( 'gform_init_scripts_footer', '__return_true' );
add_filter( 'gform_cdata_open', 'wrap_gform_cdata_open', 1 );
function wrap_gform_cdata_open( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = 'document.addEventListener( "DOMContentLoaded", function() { ';
return $content;
}
add_filter( 'gform_cdata_close', 'wrap_gform_cdata_close', 99 );
function wrap_gform_cdata_close( $content = '' ) {
if ( ( defined('DOING_AJAX') && DOING_AJAX ) || isset( $_POST['gform_ajax'] ) ) {
return $content;
}
$content = ' }, false );';
return $content;
}



/* No Tab Conflicts Gravity Forms
 --------------------------------------------------------------------------------------- */

add_filter( 'gform_tabindex', 'gform_tabindexer', 10, 2 );
function gform_tabindexer( $tab_index, $form = false ) {
  $starting_index = 1000; // if you need a higher tabindex, update this number
  if( $form )
    add_filter( 'gform_tabindex_' . $form['id'], 'gform_tabindexer' );
  return GFCommon::$tab_index >= $starting_index ? GFCommon::$tab_index : $starting_index;
}





/* Remove Unnecessary Scripts
-------------------------------------------------------------- */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/* Register Nav-Menus
-------------------------------------------------------------- */

register_nav_menus(array(
    'main_menu' => 'Main Menu',
    'pa_menu' => 'PA Sidebar Menu',
));

/* Widgets
-------------------------------------------------------------- */

if (function_exists('register_sidebars')) {

/*
    register_sidebar(array(
        'name' => 'Recent Posts',
        'id' => 'sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
*/
    
    register_sidebar(array(
        'name' => 'Category',
        'id' => 'category_sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => 'Archive',
        'id' => 'archive_sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ));

 }

/* Add Theme Support Page Thumbnails
-------------------------------------------------------------- */

add_theme_support('post-thumbnails');

/* Modify the_excerpt() " read more "
-------------------------------------------------------------- */

function new_excerpt_more($more)
{
    global $post;
    return '... <a href="' . get_permalink($post->ID) . '">' . 'read more' . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

/* Add Page Slug to Body Class
-------------------------------------------------------------- */
function add_slug_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}

add_filter('body_class', 'add_slug_body_class');



/* ACF: CREATE OPTIONS PAGE
-------------------------------------------------------------- */

if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title' 	=> 'Theme Options',
    'menu_title'	=> 'Theme Options',
    'menu_slug' 	=> 'theme-options',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
  ));

}



/* ALLOW SVGs IN MEDIA UPLOAD
-------------------------------------------------------------- */
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');




function wpbeginner_numeric_posts_nav() {
 
    if( is_singular() )
        return;
 
    global $wp_query;
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="paged_wrapper"><div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="myprev">%s</li>' . "\n", get_previous_posts_link('< prev') );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="mynext">%s</li>' . "\n", get_next_posts_link('next') );
 
    echo '</ul></div></div>' . "\n";
 
}

