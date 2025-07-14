<?php
/*******************************************************
 *
 * SETS UP THEME DEFAULTS REGISTER SUPPORT WP FEATURES
 *
 *******************************************************/

if ( ! function_exists( 'wd_setup' ) ) :
  function wd_setup() {

    // Automatic feed links enables post and comment RSS feeds by default.
    add_theme_support( 'automatic-feed-links' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Allow users to format their posts in different ways. 
    add_theme_support( 'post-formats',  array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    // Add support for two custom navigation menus.
    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'wd_theme' ),
        'secondary' => __('Secondary Menu', 'wd_theme' )
    ) );

  }
endif;
add_action( 'after_setup_theme', 'wd_setup' );


/*******************************************************
 *
 * REGISTER WP WIDGETS
 *
 *******************************************************/
function wd_theme_widgets_init() {

    register_sidebar(
        array(
            'name'          => __( 'Footer', 'wd' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your footer.', 'wd' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

}
add_action( 'widgets_init', 'wd_theme_widgets_init' );


/*******************************************************
 *
 * ENQUEUE STYLES AND SCRIPTS
 *
 *******************************************************/
function theme_assets() {

    // Enqueue theme styles
    wp_enqueue_style('roboto_condensed', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
    wp_enqueue_style('mulish', 'https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,500&display=swap');
    wp_enqueue_style('slick_style', get_stylesheet_directory_uri().'/assets/css/slick.css');
    wp_enqueue_style('ticker_style', get_stylesheet_directory_uri().'/assets/css/jquery.simpleTicker.css');
    wp_enqueue_style('animate_css', get_stylesheet_directory_uri().'/assets/css/animate.css');
    wp_enqueue_style('site_style', get_stylesheet_directory_uri().'/style.css');

    // Enqueue theme scripts
    wp_enqueue_script('jquery_script', get_stylesheet_directory_uri(). '/assets/js/jquery-3.4.1.min.js', array(), false, true);
    // wp_enqueue_script('video_script', '//api.html5media.info/1.2.2/html5media.min.js', array(), false, true);
    wp_enqueue_script('slick_script', get_stylesheet_directory_uri(). '/assets/js/slick.min.js', array(), false, true);
    wp_enqueue_script('ticker_script', get_stylesheet_directory_uri(). '/assets/js/jquery.simpleTicker.js', array(), false, true);
    wp_enqueue_script('wow_script', get_stylesheet_directory_uri(). '/assets/js/wow.min.js', array(), false, true);
    wp_enqueue_script('site_script', get_stylesheet_directory_uri(). '/assets/js/scripts.js', array(), false, true);
}
add_action('wp_enqueue_scripts','theme_assets');


/*******************************************************
 *
 * WOOCOMMERCE SUPPORT
 *
 *******************************************************/
add_action( 'after_setup_theme', 'yourtheme_setup' );
function yourtheme_setup() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}

/*******************************************************
 *
 * JAPAN TEAM (管理画面のWordPressロゴを非表示にする)
 *
 *******************************************************/
function hide_admin_logo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu( 'wp-logo' );
}
add_action( 'wp_before_admin_bar_render', 'hide_admin_logo' );


/*******************************************************
 *
 * JAPAN TEAM (投稿記事のスラッグが日本語などマルチバイトの場合は、{投稿タイプ}-{記事ID}に強制的に変更)
 *
 *******************************************************/
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
    if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
        $slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
    }
    return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4  );


/*******************************************************
 *
 * JAPAN TEAM メジャーアップデートの自動更新
 *
 *******************************************************/
add_filter( 'allow_major_auto_core_updates', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );



/*******************************************************
 *
 * SHORTCODES
 *
 *******************************************************/
function siteurl(){
    return get_site_url();
}
add_shortcode('url', 'siteurl');

function get_directory() {
    return get_bloginfo('stylesheet_directory');
}
add_shortcode('stylesheet_directory', 'get_directory');


/*******************************************************
 *
 * PAGINATION (NUMBERED)
 *
 *******************************************************/
function pagination_bar( $custom_query ) {
    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
            'prev_next' => false
        ));
    }
}

/*******************************************************
 *
 * DISPLAY MENU DESCRIPTION
 *
 *******************************************************/
function prefix_nav_description( $item_output, $item, $depth, $args ) {
    if ( !empty( $item->description ) ) {
        $item_output = str_replace( $args->link_after . '</a>', '<span class="menu-item-description">' . $item->description . '</span>' . $args->link_after . '</a>', $item_output );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'prefix_nav_description', 10, 4 );


/*******************************************************
 *
 * デバイスの条件分岐
 *
 *******************************************************/
//スマートフォンの判別
function wp_is_phone() {
  $ua = $_SERVER['HTTP_USER_AGENT'];
  if (   strpos($ua, 'iPhone')              // iPhone
    || strpos($ua, 'iPod')                // iPod touch
    ||(strpos($ua, 'Android') && strpos($ua, 'Mobile')) // Android搭載スマホ
    ||(strpos($ua, 'Windows') && strpos($ua, 'Mobile')) // Windows Phone
    ||(strpos($ua, 'firefox') && strpos($ua, 'Mobile')) // firefox製ブラウザ
    || strpos($ua, 'Opera Mini')            // Androidで人気のブラウザ
    || strpos($ua, 'Opera Mobi')            // Androidで人気のブラウザ
    || strpos($ua, 'webmate')               // その他の Other iPhone browser
    || strpos($uat,'incognito')             // その他の iPhone browser
  ) {
    return true;
  } else {
    return false;
  }
}
//タブレットの判別
function wp_is_tablet() {
  $uat = $_SERVER['HTTP_USER_AGENT'];
  if ( strpos($uat, 'iPad') // iPad
    ||(strpos($uat, 'Android') && strpos($uat, 'Mobile')=== false ) // Android搭載タブレット
    || strpos($uat, 'windows touch') //windows touch
    || strpos($uat, 'Kindle') // Kindle
    || strpos($uat, 'Silk') // Kindle に付属の Amazon 製ブラウザ
    || strpos($uat, 'firefox tablet') //firefox tablet
    || strpos($uat, 'WebOS') // Palm
  ) {
    return true;
  } else {
    return false;
  }
}

/*******************************************************
 *
 * Hide editor on history page
 *
 *******************************************************/

add_action( 'admin_init', 'hide_editor' );
function hide_editor() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;
  $pagetitle = get_the_title($post_id);
  if($pagetitle == 'History'){
    remove_post_type_support('page', 'editor');
  }
}


// WordPressの管理画面ログインURLを変更する
define( 'LOGIN_CHANGE_PAGE', 'hnReKej9brEu.php' );
add_action( 'login_init', 'login_change_init' );
add_filter( 'site_url', 'login_change_site_url', 10, 4 );
add_filter( 'wp_redirect', 'login_change_wp_redirect', 10, 2 );
// 指定以外のログインURLは403エラーにする
if ( ! function_exists( 'login_change_init' ) ) {
  function login_change_init() { // 先ほど付けた hoge と同じ文字列にする
    if ( !defined( 'LOGIN_CHANGE' ) || sha1( 'hnReKej9brEu' ) != LOGIN_CHANGE ) {
      status_header( 403 );
      exit;
    }
  }
}
// ログイン済みか新設のログインURLの場合はwp-login.phpを置き換える
if ( ! function_exists( 'login_change_site_url' ) ) {
  function login_change_site_url( $url, $path, $orig_scheme, $blog_id ) {
    if ( $path == 'wp-login.php' &&
      ( is_user_logged_in() || strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false ) )
      $url = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $url );
    return $url;
  }
}
// ログアウト時のリダイレクト先の設定
if ( ! function_exists( 'login_change_wp_redirect' ) ) {
  function login_change_wp_redirect( $location, $status ) {
    if ( strpos( $_SERVER['REQUEST_URI'], LOGIN_CHANGE_PAGE ) !== false )
      $location = str_replace( 'wp-login.php', LOGIN_CHANGE_PAGE, $location );
    return $location;
  }
}