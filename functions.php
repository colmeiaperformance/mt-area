<?php

//Stylesheets
function loading_styles()
{
    wp_enqueue_style('source-sans-pro-font', 'https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('icons-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('dashmix-fullcalendar-css', get_template_directory_uri() . '/assets/js/plugins/fullcalendar/main.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('dashmix-datatables-css', get_template_directory_uri() . '/assets/js/plugins/datatables-bs5/css/dataTables.bootstrap5.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('dashmix-buttons-css', get_template_directory_uri() . '/assets/js/plugins/datatables-buttons-bs5/css/buttons.bootstrap5.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('dashmix-responsive-css', get_template_directory_uri() . '/assets/js/plugins/datatables-responsive-bs5/css/responsive.bootstrap5.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/vendor/fontawesome/all.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('sweetalert2', get_template_directory_uri() . '/vendor/sweetalert2/sweetalert2.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/dashmix.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('theme', get_template_directory_uri() . '/assets/css/themes/xmodern.min.css', array(), wp_get_theme()->get('Version'), 'all');
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.min.css', array(), wp_get_theme()->get('Version'), 'all');
}

//Scripts
function loading_scripts()
{
    // wp_register_script( 'popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true  );
    // wp_register_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true  );

    wp_register_script('dashmix-js', get_template_directory_uri() . '/assets/js/dashmix.app.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('jquery-sparkline-js', get_template_directory_uri() . '/assets/js/lib/jquery.min.js', array(), wp_get_theme()->get('Version'), true);
    wp_register_script('sparkline-js', get_template_directory_uri() . '/assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('datatables-js', get_template_directory_uri() . '/assets/js/plugins/datatables/jquery.dataTables.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('datatables-bs5-js', get_template_directory_uri() . '/assets/js/plugins/datatables-bs5/js/dataTables.bootstrap5.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('datatables-responsive-js', get_template_directory_uri() . '/assets/js/plugins/datatables-responsive/js/dataTables.responsive.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('responsive-bs5-js', get_template_directory_uri() . '/assets/js/plugins/datatables-responsive-bs5/js/responsive.bootstrap5.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('buttons-js', get_template_directory_uri() . '/assets/js/plugins/datatables-buttons/dataTables.buttons.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('buttons-bs5-js', get_template_directory_uri() . '/assets/js/plugins/datatables-buttons-bs5/js/buttons.bootstrap5.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('jszip-js', get_template_directory_uri() . '/assets/js/plugins/datatables-buttons-jszip/jszip.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('pdfmake-js', get_template_directory_uri() . '/assets/js/plugins/datatables-buttons-pdfmake/pdfmake.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('vfs-js', get_template_directory_uri() . '/assets/js/plugins/datatables-buttons-pdfmake/vfs_fonts.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('print-js', get_template_directory_uri() . '/assets/js/plugins/datatables-buttons/buttons.print.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('buttons-html5-js', get_template_directory_uri() . '/assets/js/plugins/datatables-buttons/buttons.html5.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('tables-datatables-js', get_template_directory_uri() . '/assets/js/pages/be_tables_datatables.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('plugin-fullcalendar-js', get_template_directory_uri() . '/assets/js/plugins/fullcalendar/main.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('dashmix-fullcalendar-js', get_template_directory_uri() . '/assets/_js/pages/be_comp_calendar.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('phone-mask-js', get_template_directory_uri() . '/assets/js/lib/phone.mask.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('fontawesome-js', get_template_directory_uri() . '/vendor/fontawesome/all.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('sweetalert2-js', get_template_directory_uri() . '/vendor/sweetalert2/sweetalert2.min.js', array('jquery'), wp_get_theme()->get('Version'), true);
    wp_register_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), wp_get_theme()->get('Version'), true);

    // wp_enqueue_script( 'popper-js');
    // wp_enqueue_script( 'bootstrap-js');
    wp_enqueue_script('dashmix-js');
    wp_enqueue_script('jquery-sparkline-js');
    wp_enqueue_script('sparkline-js');
    wp_enqueue_script('datatables-js');
    wp_enqueue_script('datatables-bs5-js');
    wp_enqueue_script('datatables-responsive-js');
    wp_enqueue_script('responsive-bs5-js');
    wp_enqueue_script('buttons-js');
    wp_enqueue_script('buttons-bs5-js');
    wp_enqueue_script('jszip-js');
    wp_enqueue_script('pdfmake-js');
    wp_enqueue_script('vfs-js');
    wp_enqueue_script('print-js');
    wp_enqueue_script('buttons-html5-js');
    wp_enqueue_script('tables-datatables-js');
    wp_enqueue_script('plugin-fullcalendar-js');
    wp_enqueue_script('dashmix-fullcalendar-js');
    wp_enqueue_script('phone-mask-js');
    wp_enqueue_script('fontawesome-js');
    wp_enqueue_script('sweetalert2-js');
    wp_enqueue_script('main-js');
}

add_action('wp_enqueue_scripts', 'loading_styles');
add_action('wp_enqueue_scripts', 'loading_scripts');


/**
 * Register and enqueue a custom stylesheet in the WordPress admin to subscribers and redirect them to profile page.
 */
function wpdocs_enqueue_custom_admin_style()
{
    if (current_user_can('subscriber') || current_user_can('contributor') || current_user_can('author')) {

        if (current_user_can('subscriber') || current_user_can('contributor')) {
            wp_enqueue_style('custom_wp_admin_css', get_template_directory_uri() . '/style-admin-subs.min.css', false, wp_get_theme()->get('Version'), 'all');
        } elseif (current_user_can('author')) {
            wp_enqueue_style('custom_wp_admin_css', get_template_directory_uri() . '/style-admin-author.min.css', false, wp_get_theme()->get('Version'), 'all');
        }


        wp_register_script('admin-main-js', get_template_directory_uri() . '/assets/js/admin-main.js', array('jquery'), wp_get_theme()->get('Version'), true);
        wp_enqueue_script('admin-main-js');
        $admins = array(
            home_url('wp-admin', 'relative'),
            home_url('dashboard', 'relative'),
            home_url('admin', 'relative'),
            site_url('dashboard', 'relative'),
            site_url('admin', 'relative'),
        );
        if (in_array(untrailingslashit($_SERVER['REQUEST_URI']), $admins, true)) {
            wp_redirect(admin_url('profile.php'));
            exit;
        }
    }
}
add_action('admin_enqueue_scripts', 'wpdocs_enqueue_custom_admin_style');


/* Add native pagination.  */
function wp_boostrap_4_pagination()
{

    if (is_singular()) {
        return;
    }

    global $wp_query;

    /** Check number of pages **/
    if ($wp_query->max_num_pages <= 1) {
        return;
    }

    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max   = intval($wp_query->max_num_pages);

    /** Add current page to the array */
    if ($paged >= 1) {
        $links[] = $paged;
    }

    /** Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<nav aria-label="Page navigation"><ul class="pagination justify-content-center push">' . "\n";

    /** Previous Post Link */
    if (get_previous_posts_link()) {
        printf('<li class="page-item">%s</li>' . "\n", get_previous_posts_link('<i class="fa fa-angle-left"></i>'));
    }

    /** Link to first page, plus ellipses if necessary */
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';

        printf('<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');

        if (!in_array(2, $links)) {
            echo '<li class="page-empty">…</li>';
        }
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
        printf('<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }

    /** Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links)) {
            echo '<li class="page-empty">…</li>' . "\n";
        }

        $class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
        printf('<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }

    /** Next Post Link */
    if (get_next_posts_link()) {
        printf('<li class="page-item">%s</li>' . "\n", get_next_posts_link('<i class="fa fa-angle-right"></i>'));
    }

    echo '</ul></nav>' . "\n";
}

/**
 * @param WP_Query|null $wp_query
 * @param bool $echo
 * @param array $params
 *
 * @return string|null
 *
 * Using Bootstrap 4? see https://gist.github.com/mtx-z/f95af6cc6fb562eb1a1540ca715ed928
 *
 * Accepts a WP_Query instance to build pagination (for custom wp_query()),
 * or nothing to use the current global $wp_query (eg: taxonomy term page)
 * - Tested on WP 5.7.1
 * - Tested with Bootstrap 5.0 (https://getbootstrap.com/docs/5.0/components/pagination/)
 * - Tested on Sage 9.0.9
 *
 * INSTALLATION:
 * add this file content to your theme function.php or equivalent
 *
 * USAGE:
 *     <?php echo bootstrap_pagination(); ?> //uses global $wp_query
* or with custom WP_Query():
* <?php
 *      $query = new \WP_Query($args);
 *       ... while(have_posts()), $query->posts stuff ... endwhile() ...
 *       echo bootstrap_pagination($query);
 *     ?>
*/
function wp_boostrap_5_pagination(\WP_Query $wp_query = null, $echo = true, $params = [])
{
    if (null === $wp_query) {
        global $wp_query;
    }

    $add_args = [];

    //add query (GET) parameters to generated page URLs
    /*if (isset($_GET[ 'sort' ])) {
    $add_args[ 'sort' ] = (string)$_GET[ 'sort' ];
    }*/

    $pages = paginate_links(
        array_merge([
'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
'format' => '?paged=%#%',
'current' => max(1, get_query_var('paged')),
'total' => $wp_query->max_num_pages,
'type' => 'array',
'show_all' => false,
'end_size' => 3,
'mid_size' => 1,
'prev_next' => true,
'prev_text' => __('<i class="fa fa-angle-left"></i>'),
'next_text' => __('<i class="fa fa-angle-right"></i>'),
'add_args' => $add_args,
'add_fragment' => ''
], $params)
    );

    if (is_array($pages)) {
        //$current_page = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
        $pagination = '<nav aria-label="Page navigation">
  <ul class="pagination">';

        foreach ($pages as $page) {
            $pagination .= '<li class="page-item' . (strpos($page, 'current') !== false ? ' active' : '') . '"> ' .
              str_replace('page-numbers', 'page-link', $page) . '</li>';
        }

        $pagination .= '</ul>
</nav>';

        if ($echo) {
            echo $pagination;
        } else {
            return $pagination;
        }
    }

    return null;
}

/**
* Notes:
* AJAX:
* - When used with wp_ajax (generate pagination HTML from ajax) you'll need to provide base URL (or it'll be admin-ajax
URL)
* - Example for a term page: bootstrap_pagination( $query, false, ['base' => get_term_link($term) . '?paged=%#%'] )
*
* Images as next/prev:
* - You can use image as next/prev buttons
* - Example: 'prev_text' => '<img src="' . get_stylesheet_directory_uri() . '/assets/images/prev-arrow.svg">',
*
* Add query parameters to page URLs
* - If you need custom URL parameters on your page URLS, use the "add_args" attribute
* - Example (before paginate_links() call):
* $arg = [];
* if (isset($_GET[ 'sort' ])) {
* $args[ 'sort' ] = (string)$_GET[ 'sort' ];
* }
* ...
* 'add_args' => $args,
*/


/*
* Custom Attribute for links
*/

add_filter('next_posts_link_attributes', 'wp_boostrap_4_pagination_posts_link_attributes');
add_filter('previous_posts_link_attributes', 'wp_boostrap_4_pagination_posts_link_attributes');

function wp_boostrap_4_pagination_posts_link_attributes()
{
    return 'class="page-link"';
}

function base_setup()
{

    //Tradução
    //load_theme_textdomain( 'base_language', get_template_directory() . '/languages' );

    //Wordpress gerencia o título
    add_theme_support('title-tag');

    //Formatos de posts
    add_theme_support(
        'post-formats',
        array(
'video',
)
    );

    //Add custom field to menu - font awesome
    function menu_item_desc($item_id, $item)
    {
        $menu_item_desc = get_post_meta($item_id, '_menu_item_desc', true); ?>
<div style="clear: both;">
    <span
        class="fa-class"><?php _e("Classe Font Awesome", 'mt-area'); ?></span><br />
    <input type="hidden" class="nav-menu-id"
        value="<?php echo $item_id; ?>" />
    <div class="logged-input-holder">
        <input type="text"
            name="menu_item_desc[<?php echo $item_id; ?>]"
            id="menu-item-desc-<?php echo $item_id; ?>"
            value="<?php echo esc_attr($menu_item_desc); ?>" />
    </div>
    <span
        class="text-muted small"><?php _e('E.g.: fa-solid fa-link<br>Você pode checar todas as classes do Font-Awesome <a href="https://fontawesome.com/icons" target="_blank">aqui</a>', 'mt-area'); ?></span>
</div>
<?php }
    add_action('wp_nav_menu_item_custom_fields', 'menu_item_desc', 10, 2);

    //Save custom field in database
    function save_menu_item_desc($menu_id, $menu_item_db_id)
    {
        if (isset($_POST['menu_item_desc'][$menu_item_db_id])) {
            $sanitized_data = sanitize_text_field($_POST['menu_item_desc'][$menu_item_db_id]);
            update_post_meta($menu_item_db_id, '_menu_item_desc', $sanitized_data);
        } else {
            delete_post_meta($menu_item_db_id, '_menu_item_desc');
        }
    }
    add_action('wp_update_nav_menu_item', 'save_menu_item_desc', 10, 2);


    // bootstrap 5 wp_nav_menu walker
    class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
    {
        private $current_item;
        private $dropdown_menu_alignment_values = [
            'dropdown-menu-start',
            'dropdown-menu-end',
            'dropdown-menu-sm-start',
            'dropdown-menu-sm-end',
            'dropdown-menu-md-start',
            'dropdown-menu-md-end',
            'dropdown-menu-lg-start',
            'dropdown-menu-lg-end',
            'dropdown-menu-xl-start',
            'dropdown-menu-xl-end',
            'dropdown-menu-xxl-start',
            'dropdown-menu-xxl-end'
        ];

        public function start_lvl(&$output, $depth = 0, $args = null)
        {
            $dropdown_menu_class[] = '';
            foreach ($this->current_item->classes as $class) {
                if (in_array($class, $this->dropdown_menu_alignment_values)) {
                    $dropdown_menu_class[] = $class;
                }
            }
            $indent = str_repeat("\t", $depth);
            $submenu = ($depth > 0) ? ' sub-menu' : '';
            $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ", $dropdown_menu_class)) . " depth_$depth\">\n";
        }

        public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
        {
            $this->current_item = $item;

            $indent = ($depth) ? str_repeat("\t", $depth) : '';

            $li_attributes = '';
            $class_names = $value = '';

            $classes = empty($item->classes) ? array() : (array) $item->classes;

            $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
            $classes[] = 'nav-item';
            $classes[] = 'nav-item-' . $item->ID;
            if ($depth && $args->walker->has_children) {
                $classes[] = 'dropdown-menu dropdown-menu-end';
            }

            $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
            $class_names = ' class="' . esc_attr($class_names) . '"';

            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
            $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

            $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

            $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
            $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
            $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
            $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

            $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
            $nav_link_class = ($depth > 0) ? 'dropdown-item ' : 'nav-link nav-main-link ';
            $attributes .= ($args->walker->has_children) ? ' class="' . $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="' . $nav_link_class . $active_class . '"';

            $menu_item_desc = get_post_meta($item->ID, '_menu_item_desc', true);
            if (!empty($menu_item_desc)) {
                $menu_item_desc;
            } else {
                $menu_item_desc = 'fa fa-link';
            }

            $item_output = $args->before;
            $item_output .= '<a' . $attributes . '>';
            $item_output .= $args->link_before;
            $item_output .= '<i class="nav-main-link-icon ' . $menu_item_desc . '"></i>';
            $item_output .= '<span class="nav-main-link-name">' . apply_filters('the_title', $item->title, $item->ID) . '</span>';
            $item_output .= $args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;



            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }
    }
    // register a new menu
    register_nav_menu('main-menu', 'Main menu');
    register_nav_menu('quick-menu', 'Quick menu');
    register_nav_menu('events-menu', 'Eventos');
    register_nav_menu('content-menu', 'Conteúdo');

    //Thumbnails ou miniaturas
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1920, 9999);
    add_image_size('popular-posts-img', 100, 100);

    //Logo customizado
    $logo_width  = 300;
    $logo_height = 100;

    add_theme_support(
        'custom-logo',
        array(
            'height'               => $logo_height,
            'width'                => $logo_width,
            'flex-width'           => true,
            'flex-height'          => true,
            'unlink-homepage-logo' => true,
        )
    );

    // Add support for full and wide align images
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'base_setup');

// Add support for responsive embedded content.
add_theme_support('responsive-embeds');

// Add support for custom line height controls.
add_theme_support('custom-line-height');

// Add support for experimental link color control.
add_theme_support('experimental-link-color');

// Add support for experimental cover block spacing.
add_theme_support('custom-spacing');

//Hide admin bar if the user is NOT admin
add_action('after_setup_theme', 'remove_admin_bar');
function remove_admin_bar()
{
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}

//Remove block parts
add_action('after_setup_theme', 'add_block_template_part_support');

function add_block_template_part_support()
{
    remove_theme_support('block-templates');
    remove_theme_support('block-template-parts');
    remove_theme_support('wp-block-styles');
}

function fix_svg()
{
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
            width: 100% !important;
            height: auto !important;
        }
        </style>';
}
add_action('admin_head', 'fix_svg');

/* Creating option pages on ACF plugin */
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Ajustes', 'mt-area'),
            'menu_title'  => __('Ajustes', 'mt-area'),
            'icon_url'    => 'dashicons-admin-generic',
            'position'    => 58,
            'redirect'    => true,
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Meditação Coletiva Online', 'mt-area'),
            'menu_title'  => __('Meditação Coletiva Online', 'mt-area'),
            'parent_slug' => $parent['menu_slug'],
        ));

        //Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Meditação Coletiva Presencial', 'mt-area'),
            'menu_title'  => __('Meditação Coletiva Presencial', 'mt-area'),
            'parent_slug' => $parent['menu_slug'],
        ));

        //Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Calendário Védico', 'mt-area'),
            'menu_title'  => __('Calendário Védico', 'mt-area'),
            'parent_slug' => $parent['menu_slug'],
        ));
    }
}

/* Removing WP editor */
// add_action('init', 'remove_guttenberg_from_pages', 10);
// function remove_guttenberg_from_pages()
// {
//     remove_post_type_support('page', 'editor');
// }

function the_breadcrumb()
{
    echo '<nav aria-label="breadcrumb"><ol class="breadcrumb">';
    if (is_front_page()) {
        echo '<li class="breadcrumb-item">';
        _e('Painel', 'mt-area');
        echo "</li>";
    } elseif (!is_home()) {
        echo '<li class="breadcrumb-item"><a href="';
        echo get_option('home');
        echo '">';
        echo 'Painel';
        echo "</a></li>";
        if (is_category() || is_single() && !is_custom_post_type()) {
            echo '<li class="breadcrumb-item">';
            the_category(' </li><li class="breadcrumb-item"> ');
            if (is_single()) {
                echo "</li><li class='breadcrumb-item active'>";
                the_title();
                echo '</li>';
            }
        } elseif (is_custom_post_type()) {
            if (is_post_type_archive()) {
                echo '<li class="breadcrumb-item">';
                echo '<a href="';
                echo get_post_type_archive_link(get_post_type(get_the_ID()));
                echo '">';
                echo post_type_archive_title();
                echo '</a></li>';
            } elseif (is_singular()) {
                echo '<li class="breadcrumb-item">';
                echo '<a href="';
                echo get_post_type_archive_link(get_post_type(get_the_ID()));
                echo '">';
                $post_type_obj = get_post_type_object(get_post_type(get_the_ID()));
                echo $post_type_obj->labels->name;
                echo '</a></li>';
            }
            if (is_singular()) {
                echo "<li class='breadcrumb-item active'>";
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            echo '<li class="breadcrumb-item">';
            echo the_title();
            echo '</li>';
        }
    } elseif (is_tag()) {
        single_tag_title();
    } elseif (is_day()) {
        echo "<li class='breadcrumb-item'>Archive for ";
        the_time('F jS, Y');
        echo '</li>';
    } elseif (is_month()) {
        echo "<li class='breadcrumb-item'>Archive for ";
        the_time('F, Y');
        echo '</li>';
    } elseif (is_year()) {
        echo "<li class='breadcrumb-item'>Archive for ";
        the_time('Y');
        echo '</li>';
    } elseif (is_author()) {
        echo "<li class='breadcrumb-item'>Author Archive";
        echo '</li>';
    } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
        echo "<li>Blog Archives";
        echo '</li>';
    } elseif (is_search()) {
        echo "<li class='breadcrumb-item'>Search Results";
        echo '</li>';
    }
    echo '</ol></nav>';
}

//Excerpt size
function mytheme_custom_excerpt_length($length)
{
    return 35;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);

// wp_localize_script( 'twentyfifteen-script', 'ajax_posts', array(
//     'ajaxurl' => admin_url( 'admin-ajax.php' ),
//     'noposts' => __('No older posts found', 'twentyfifteen'),
// ));

//Page Slug

function get_the_slug()
{
    global $post;
    $slug = $post->post_name ?? '';

    if (!$slug) {
        $slug = basename(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH));
    }
    return $slug;
}

//Estimated Reading Time
function reading_time()
{
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $readingtime = ceil($word_count / 200);

    if ($readingtime == 1) {
        $timer = " minuto";
    } else {
        $timer = " minutos";
    }
    $totalreadingtime = $readingtime . $timer;

    return $totalreadingtime;
}

//Change WP Login Page
function wpb_login_logo()
{
    //Add bootstrap to login/register page
    wp_enqueue_style('style-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css', array(), wp_get_theme()->get('Version'), 'all');
    ?>
<style type="text/css">
    #login {
        padding: 2% 0 0 !important;
        width: 50% !important;
        min-width: 320px;
    }

    #login h1 a,
    .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri();
    ?>%pcs-comment-end#* //assets/media/mt/icon-arvore.png);
        height: 140px;
        width: 140px;
        background-size: 140px 140px;
        background-repeat: no-repeat;
        padding-bottom: 10px;
    }

    .login #login_error,
    .login .message,
    .login .success {
        border-radius: 7px;
    }

    .login h1 {
        background: #fff;
        margin-bottom: -30px;
        position: relative;
        z-index: 10;
        border-top-left-radius: 7px;
        border-top-right-radius: 7px;
        padding-top: 20px;
    }

    #lostpasswordform #wp-submit,
    #loginform #wp-submit {
        width: 100%;
        height: 35px;
        background-color: #ffc536;
        border: 1px solid #ffc536;
        font-weight: normal;
        font-size: 14px;
        line-height: 17px;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        letter-spacing: -0.015em;
        color: #FFFFFF;
        border-radius: 4px;
        margin-top: 10px;
        text-align: center;
        text-decoration: none;
        cursor: pointer;
        user-select: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    #lostpasswordform #wp-submit:hover,
    #loginform #wp-submit:hover {
        outline: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
        color: #ffc536;
        background-color: transparent;
    }

    body.wp-core-ui {
        background:
            /* url(<?php //echo get_stylesheet_directory_uri();
    ?>
            /assets/media/mt/bg-404.jpg), */ rgb(255, 197, 54, 1) !important;
    }

    .wp-core-ui .button-secondary .dashicons {
        color: #ffc536;
    }

    #lostpasswordform,
    #loginform {
        border: none;
        border-radius: 7px;
        box-shadow: 13px 11px 15px rgba(0, 0, 0, .04);
    }

    #lostpasswordform input,
    #loginform input {
        border: 1px solid #ffc536;
        border-radius: 0px;
    }

    #lostpasswordform input[type="checkbox"]:checked::before,
    #loginform input[type="checkbox"]:checked::before {
        margin: -0.250rem 0 0 -0.35rem;
    }

    #lostpasswordform #wp-submit {
        width: 160px;
    }

    .login #login_error,
    .login .message,
    .login .success {
        border-left: none !important;
    }

    .login .button.wp-hide-pw:focus {
        border-color: none !important;
        box-shadow: none !important;
    }

    #backtoblog {
        display: none;
    }

    .login .message {
        font-size: 20px;
        text-align: center;
        font-weight: bold;
    }

    #login #registerform {
        border-radius: 7px;
    }
</style>
<?php }
add_action('login_enqueue_scripts', 'wpb_login_logo');

function wpb_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'wpb_login_logo_url');

function wpb_login_logo_url_title()
{
    return 'Área do Meditante - Meditação Transcendental';
}
add_filter('login_headertext', 'wpb_login_logo_url_title');

//Disable Login language
add_filter('login_display_language_dropdown', '__return_false');

//Registration redirect
add_filter('registration_redirect', 'my_redirect_home');
function my_redirect_home($registration_redirect)
{
    return home_url('/obrigado-por-se-registrar');
}

/**
 * WordPress function for redirecting users on login based on user role
 */
function wpdocs_my_login_redirect($url, $request, $user)
{
    if ($user && is_object($user) && is_a($user, 'WP_User')) {
        if ($user->has_cap('administrator')) {
            $url = admin_url();
        } else {
            $url = home_url();
        }
    }
    return $url;
}

add_filter('login_redirect', 'wpdocs_my_login_redirect', 10, 3);


//Displays User Info
function display_user_info($param)
{

    $current_user = wp_get_current_user();

    if (!($current_user instanceof WP_User)) {
        return;
    }

    if ($param == 'role') {
        printf(esc_html((array) $current_user->roles));
    } elseif ($param == 'name') {
        if ($current_user->display_name) {
            printf(esc_html($current_user->display_name));
        } elseif ($current_user->user_firstname) {
            printf(esc_html($current_user->user_firstname));
        } elseif ($current_user->user_login) {
            printf(esc_html($current_user->user_login));
        }
    } elseif ($param == 'email') {
        printf(esc_html($current_user->user_email));
    }
    // elseif ( $param == 'lastname' ) {
    //     printf( esc_html( $current_user->user_lastname ) );
    // }
    elseif ($param == 'id') {
        printf(esc_html($current_user->ID));
    }
}

add_action('login_init', function () {
    ?>
<style>
    .login-header {
        color: #FFFFFF;
        text-align: center;
        padding: 5% 0 0 !important;
    }

    .login-header .login-header-h2 {
        font-family: 'Work Sans', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 3.125rem;
        line-height: 1.1;
        letter-spacing: -0.02em;
    }

    .login-header .login-header-p {
        font-family: 'Work Sans', sans-serif;
        font-style: normal;
        font-weight: 400;
        font-size: 2.5rem;
        line-height: 1.1;
        letter-spacing: -0.02em;
    }
</style>
<div class="login-header">
    <h2 class="login-header-h2">Bem-vindo à Comunidade MT Brasil.</h2>
    <p class="login-header-p">Área exclusiva aos praticantes da Meditação Transcendental.</p>
</div>
<?php

});

/*
* Disable comments
*/
// First, this will disable support for comments and trackbacks in post types
// function df_disable_comments_post_types_support() {
//     $post_types = get_post_types();
//     foreach ($post_types as $post_type) {
//        if(post_type_supports($post_type, 'comments')) {
//           remove_post_type_support($post_type, 'comments');
//           remove_post_type_support($post_type, 'trackbacks');
//        }
//     }
//  }
# https://keithgreer.uk/wordpress-code-completely-disable-comments-using-functions-php

//  add_action('admin_init', 'df_disable_comments_post_types_support');

// Then close any comments open comments on the front-end just in case
//  function df_disable_comments_status() {
//     return false;
//  }
//  add_filter('comments_open', 'df_disable_comments_status', 20, 2);
//  add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Finally, hide any existing comments that are on the site.
//  function df_disable_comments_hide_existing_comments($comments) {
//     $comments = array();
//     return $comments;
//  }
//  add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

/*
* Rename User roles - Change Capabilities
*/

/**
 * Edit capabilities from roles.
 * Call the function when your plugin/theme is activated.
 */
function contributor_set_capabilities()
{

    // Get the role object.
    $contributor = get_role('contributor');

    // A list of capabilities to remove from editors.
    $caps = array(
        'edit_posts',
        'delete_posts',
    );

    foreach ($caps as $cap) {

        // Remove the capability.
        $contributor->remove_cap($cap);
    }
}
add_action('init', 'contributor_set_capabilities');

function subscriber_set_capabilities()
{

    // Get the role object.
    $subscriber = get_role('subscriber');

    // A list of capabilities to remove from editors.
    $caps = array(
        'read'
    );

    foreach ($caps as $cap) {

        // Remove the capability.
        $subscriber->remove_cap($cap);
    }
}
add_action('init', 'subscriber_set_capabilities');

function author_set_capabilities()
{

    // Get the role object.
    $author = get_role('author');

    $caps_to_add = array(
        'list_users',
        'create_users',
        'promote_users'

    );

    foreach ($caps_to_add as $caps) {
        $author->add_cap($caps);
    }
}
add_action('init', 'author_set_capabilities');
function editor_set_capabilities()
{

    // Get the role object.
    $editor = get_role('editor');

    $caps_to_add = array(
        'list_users',
        'create_users',
        'edit_users',
        'remove_users',
        'promote_users'
    );

    foreach ($caps_to_add as $caps) {
        $editor->add_cap($caps);
    }
}
add_action('init', 'editor_set_capabilities');

/**
 * Customize role names - create new roles
 */

function change_role_name()
{
    global $wp_roles;

    if (!isset($wp_roles)) {
        $wp_roles = new WP_Roles();
    }

    //You can list all currently available roles like this...
    //$roles = $wp_roles->get_names();
    //print_r($roles);

    //You can replace "administrator" with any other role "editor", "author", "contributor" or "subscriber"...
    $wp_roles->roles['author']['name'] = 'Instrutor';
    $wp_roles->role_names['author'] = 'Instrutor';
    $wp_roles->roles['contributor']['name'] = 'Associado';
    $wp_roles->role_names['contributor'] = 'Associado';
    $wp_roles->roles['subscriber']['name'] = 'Cadastrado';
    $wp_roles->role_names['subscriber'] = 'Cadastrado';
    $wp_roles->roles['editor']['name'] = 'Equipe MT';
    $wp_roles->role_names['editor'] = 'Equipe MT';
}
add_action('init', 'change_role_name');

/**
 * Create custom roles
 * ! DO NOT REMOVE
 */
add_role('meditante', 'Meditante', array('read' => true));
add_role('colmeia', 'Colmeia', get_role('editor')->capabilities);
add_role('sidhas_meditante', 'Sidhas Meditante', get_role('meditante')->capabilities);
add_role('sidhas_associado', 'Sidhas Associado', get_role('contributor')->capabilities);




//Remove screen options to whom did not get admin role
function wpb_remove_screen_options()
{
    if (!current_user_can('manage_options')) {
        return false;
    }
    return true;
}
add_filter('screen_options_show_screen', 'wpb_remove_screen_options');

//Remove help tab
add_action('admin_head', 'mytheme_remove_help_tabs');
function mytheme_remove_help_tabs()
{
    // Verifique se é uma tela de administração antes de remover as abas de ajuda
    if (is_admin()) {
        $screen = get_current_screen();
        if ($screen) {
            $screen->remove_help_tabs();
        }
    }
}


//Remove all widgets from dashboard
add_action('wp_dashboard_setup', 'wpdocs_remove_dashboard_widgets');

/**
 * Remove all dashboard widgets
 */
function wpdocs_remove_dashboard_widgets()
{
    if (!current_user_can('delete_others_pages')) { // Only run if the user is an Author or lower.
        remove_meta_box('dashboard_right_now', 'dashboard', 'normal');   // Right Now
        remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal'); // Recent Comments
        remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');  // Incoming Links
        remove_meta_box('dashboard_plugins', 'dashboard', 'normal');   // Plugins
        remove_meta_box('dashboard_quick_press', 'dashboard', 'side');  // Quick Press
        remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');  // Recent Drafts
        remove_meta_box('dashboard_primary', 'dashboard', 'side');   // WordPress blog
        remove_meta_box('dashboard_secondary', 'dashboard', 'side');   // Other WordPress News
        // use 'dashboard-network' as the second parameter to remove widgets from a network dashboard.
    }
}
add_action('do_meta_boxes', 'wpdocs_remove_dashboard_widgets');

//Add active class to current menu item
add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item)
{
    if (in_array('current-menu-item', $classes)) {
        $classes[] = 'active ';
    }
    return $classes;
}

// Admin footer modification
function remove_footer_admin()
{
    echo '<span id="footer-thankyou">' . __('Desenvolvido por ', 'mt-area') . '<a href="https://www.colmeiaperformance.com.br" target="_blank\">Colmeia Performance</a></span>';
}

add_filter('admin_footer_text', 'remove_footer_admin');

// Função para verificar o horário atual em Brasília
function get_brasilia_current_time()
{
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $datetime = new DateTime('now', $timezone);
    return $datetime->format('H:i');
}

//Reorder menu admin items
/**
 * Activates the 'menu_order' filter and then hooks into 'menu_order'
 */
add_filter('custom_menu_order', function () {
    return true;
});
add_filter('menu_order', 'my_new_admin_menu_order');
/**
 * Filters WordPress' default menu order
 */
function my_new_admin_menu_order($menu_order)
{
    // define your new desired menu positions here
    // for example, move 'upload.php' to position #9 and built-in pages to position #1
    $new_positions = array(
        'edit.php?post_type=page' => 1,
        'edit.php' => 2,
        'upload.php' => 2,
        'edit-comments.php' => 12
    );
    // helper function to move an element inside an array
    function move_element(&$array, $a, $b)
    {
        $out = array_splice($array, $a, 1);
        array_splice($array, $b, 0, $out);
    }
    // traverse through the new positions and move
    // the items if found in the original menu_positions
    foreach ($new_positions as $value => $new_index) {
        if ($current_index = array_search($value, $menu_order)) {
            move_element($menu_order, $current_index, $new_index);
        }
    }
    return $menu_order;
};



//Check if it is a custom post type
/**
 * Check if a post is a custom post type.
 * @param  mixed $post Post object or ID
 * @return boolean
 */
function is_custom_post_type($post = null)
{
    $all_custom_post_types = get_post_types(array('_builtin' => false));

    // there are no custom post types
    if (empty($all_custom_post_types)) {
        return false;
    }

    $custom_types      = array_keys($all_custom_post_types);
    $current_post_type = get_post_type($post);

    // could not detect current type
    if (!$current_post_type) {
        return false;
    }

    return in_array($current_post_type, $custom_types);
}

// PHP program to sort array of dates

// user-defined comparison function
// based on timestamp
function compareByTimeStamp($date1, $date2)
{
    $time1 = DateTime::createFromFormat('d/m', $date1)->getTimestamp();
    $time2 = DateTime::createFromFormat('d/m', $date2)->getTimestamp();

    if ($time1 < $time2) {
        return -1;
    } elseif ($time1 > $time2) {
        return 1;
    } else {
        return 0;
    }
}

//Função para checar o usuário
function check_user()
{
    $user = wp_get_current_user();
    if (!$user->ID || in_array('subscriber', $user->roles) || in_array('contributor', $user->roles) || in_array('meditante', $user->roles)) {
        // user is not logged or is a subscriber, contributor or meditante
        return false;
    }
    return true;
}

//Mensagem para enviar ao usuário quando trocar a role
function user_role_update($user_id, $new_role)
{
    $site_url = get_bloginfo('wpurl');
    $user_info = get_userdata($user_id);
    $to = $user_info->user_email;
    $subject = "Cadastro Aprovado! " . $site_url . "";
    $message = "Olá " . $user_info->display_name . "! Seu cadastro foi aprovado no site " . $site_url . ". Parabéns! Agora você é um " . $new_role . ". <a href=\"https://comunidade.meditacaotranscendental.com.br\">Clique</a> aqui para fazer o login e acessar toda a nossa base de conhecimento.";
    wp_mail($to, $subject, $message);
}
add_action('set_user_role', 'user_role_update', 10, 2);

add_action('wp_logout', 'auto_redirect_after_logout');
function auto_redirect_after_logout()
{
    wp_safe_redirect(home_url());
    exit();
}

//Código para criar páginas necessárias para o tema funcionar 100%
function create_pages_in_wp_panel()
{
    $pages = array(
        array(
            'title' => 'Associar-se',
            'content' => '',
            'slug' => 'sign'
        ),
        array(
            'title' => 'Blog',
            'content' => '',
            'slug' => 'blog'
        ),
        array(
            'title' => 'Calendário',
            'content' => '',
            'slug' => 'calendario'
        ),
        array(
            'title' => 'Contato',
            'content' => '',
            'slug' => 'contato'
        ),
        array(
            'title' => 'Cursos',
            'content' => '',
            'slug' => 'cursos'
        ),
        array(
            'title' => 'Front Page',
            'content' => '',
            'slug' => 'front-page'
        ),
        array(
            'title' => 'Inscrições',
            'content' => '',
            'slug' => 'subscriptions'
        ),
        array(
            'title' => 'Livros',
            'content' => '',
            'slug' => 'livros'
        ),
        array(
            'title' => 'Login',
            'content' => '',
            'slug' => 'login'
        ),
        array(
            'title' => 'Meditação Coletiva Online',
            'content' => '',
            'slug' => 'meditacao-coletiva-online'
        ),
        array(
            'title' => 'Meditação Coletiva Presencial',
            'content' => '',
            'slug' => 'meditacao-coletiva-presencial'
        ),
        array(
            'title' => 'Meu Perfil',
            'content' => '',
            'slug' => 'profile'
        ),
        array(
            'title' => 'Obrigado por se registrar!',
            'content' => '',
            'slug' => 'obrigado-por-se-registrar'
        ),
        array(
            'title' => 'Pagamento',
            'content' => '',
            'slug' => 'checkout'
        ),
        array(
            'title' => 'Pagamentos',
            'content' => '',
            'slug' => 'payments'
        ),
    );

    foreach ($pages as $page) {
        $custom_slug = $page['slug'];
        $already_exist_page = get_page_by_path($custom_slug);

        if (!$already_exist_page) {
            $page_args = array(
                'post_title'    => $page['title'],
                'post_content'  => $page['content'],
                'post_status'   => 'publish',
                'post_type'     => 'page',
                'post_name'     => $custom_slug,
            );

            $page_id = wp_insert_post($page_args);
        }
    }
}

// Ação para chamar a função de criação de páginas
add_action('init', 'create_pages_in_wp_panel');

// Define as páginas corretas como a Página Inicial e a Página de Posts
function define_front_page_and_blog_through_slug()
{
    $front_page_slug = 'front-page';
    $blog_page_slug = 'blog';
    //Get their IDs
    $front_page_id = get_page_by_path($front_page_slug)->ID;
    $blog_page_id = get_page_by_path($blog_page_slug)->ID;

    if ($front_page_id && $blog_page_id) {
        //Define front page
        update_option('page_on_front', $front_page_id);
        update_option('show_on_front', 'page');
        //Define blog
        update_option('page_for_posts', $blog_page_id);
    }
}

// Ação para chamar a função de definir as páginas
add_action('after_setup_theme', 'define_front_page_and_blog_through_slug');
