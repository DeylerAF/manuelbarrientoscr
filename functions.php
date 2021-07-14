<?php
//Post Type personalizado "recomendaciones"
function manuelbarrientoscr_register_recomendaciones()
{
    $labels = array(
        'name'                  => _x('Recomendaciones', 'Post type general name', 'manuelbarrientoscr'),
        'singular_name'         => _x('Recomendacion', 'Post type singular name', 'manuelbarrientoscr'),
        'menu_name'             => _x('Recomendaciones', 'Admin Menu text', 'manuelbarrientoscr'),
        'name_admin_bar'        => _x('Recomendacion', 'Add New on Toolbar', 'manuelbarrientoscr'),
        'add_new'               => __('Add New', 'manuelbarrientoscr'),
        'add_new_item'          => __('Add New recomendacion', 'manuelbarrientoscr'),
        'new_item'              => __('New recomendacion', 'manuelbarrientoscr'),
        'edit_item'             => __('Edit recomendacion', 'manuelbarrientoscr'),
        'view_item'             => __('View recomendacion', 'manuelbarrientoscr'),
        'all_items'             => __('All recomendaciones', 'manuelbarrientoscr'),
        'search_items'          => __('Search recomendaciones', 'manuelbarrientoscr'),
        'parent_item_colon'     => __('Parent recomendaciones:', 'manuelbarrientoscr'),
        'not_found'             => __('No recomendaciones found.', 'manuelbarrientoscr'),
        'not_found_in_trash'    => __('No recomendaciones found in Trash.', 'manuelbarrientoscr'),
        'featured_image'        => _x('Recomendacion Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'archives'              => _x('Recomendacion archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'manuelbarrientoscr'),
        'insert_into_item'      => _x('Insert into recomendacion', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'manuelbarrientoscr'),
        'uploaded_to_this_item' => _x('Uploaded to this recomendacion', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'manuelbarrientoscr'),
        'filter_items_list'     => _x('Filter recomendaciones list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list_navigation' => _x('Recomendaciones list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list'            => _x('Recomendaciones list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'manuelbarrientoscr'),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Recomendacion custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'recomendacion'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array('category', 'post_tag'),
        'show_in_rest'       => true
    );

    register_post_type('Recomendacion', $args);
}
add_action('init', 'manuelbarrientoscr_register_recomendaciones');
/* *** */

//Post Type personalizado "skills"
function manuelbarrientoscr_register_skills()
{
    $labels = array(
        'name'                  => _x('Skills', 'Post type general name', 'manuelbarrientoscr'),
        'singular_name'         => _x('Skill', 'Post type singular name', 'manuelbarrientoscr'),
        'menu_name'             => _x('Skills', 'Admin Menu text', 'manuelbarrientoscr'),
        'name_admin_bar'        => _x('Skill', 'Add New on Toolbar', 'manuelbarrientoscr'),
        'add_new'               => __('Add New', 'manuelbarrientoscr'),
        'add_new_item'          => __('Add New skill', 'manuelbarrientoscr'),
        'new_item'              => __('New skill', 'manuelbarrientoscr'),
        'edit_item'             => __('Edit skill', 'manuelbarrientoscr'),
        'view_item'             => __('View skill', 'manuelbarrientoscr'),
        'all_items'             => __('All skills', 'manuelbarrientoscr'),
        'search_items'          => __('Search skills', 'manuelbarrientoscr'),
        'parent_item_colon'     => __('Parent skills:', 'manuelbarrientoscr'),
        'not_found'             => __('No skills found.', 'manuelbarrientoscr'),
        'not_found_in_trash'    => __('No skills found in Trash.', 'manuelbarrientoscr'),
        'featured_image'        => _x('Skill Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'archives'              => _x('Skill archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'manuelbarrientoscr'),
        'insert_into_item'      => _x('Insert into skill', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'manuelbarrientoscr'),
        'uploaded_to_this_item' => _x('Uploaded to this skill', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'manuelbarrientoscr'),
        'filter_items_list'     => _x('Filter skills list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list_navigation' => _x('Skills list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list'            => _x('Skills list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'manuelbarrientoscr'),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Skill custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'skill'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array('category', 'post_tag'),
        'show_in_rest'       => true
    );

    register_post_type('Skill', $args);
}
add_action('init', 'manuelbarrientoscr_register_skills');
/* *** */

//Post Type personalizado "testimonios"
function manuelbarrientoscr_register_testimonios()
{
    $labels = array(
        'name'                  => _x('Testimonios', 'Post type general name', 'manuelbarrientoscr'),
        'singular_name'         => _x('Testimonio', 'Post type singular name', 'manuelbarrientoscr'),
        'menu_name'             => _x('Testimonios', 'Admin Menu text', 'manuelbarrientoscr'),
        'name_admin_bar'        => _x('Testimonio', 'Add New on Toolbar', 'manuelbarrientoscr'),
        'add_new'               => __('Add New', 'manuelbarrientoscr'),
        'add_new_item'          => __('Add New testimonio', 'manuelbarrientoscr'),
        'new_item'              => __('New testimonio', 'manuelbarrientoscr'),
        'edit_item'             => __('Edit testimonio', 'manuelbarrientoscr'),
        'view_item'             => __('View testimonio', 'manuelbarrientoscr'),
        'all_items'             => __('All testimonios', 'manuelbarrientoscr'),
        'search_items'          => __('Search testimonios', 'manuelbarrientoscr'),
        'parent_item_colon'     => __('Parent testimonios:', 'manuelbarrientoscr'),
        'not_found'             => __('No testimonios found.', 'manuelbarrientoscr'),
        'not_found_in_trash'    => __('No testimonios found in Trash.', 'manuelbarrientoscr'),
        'featured_image'        => _x('Testimonio Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'archives'              => _x('Testimonio archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'manuelbarrientoscr'),
        'insert_into_item'      => _x('Insert into testimonio', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'manuelbarrientoscr'),
        'uploaded_to_this_item' => _x('Uploaded to this testimonio', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'manuelbarrientoscr'),
        'filter_items_list'     => _x('Filter testimonios list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list_navigation' => _x('Testimonios list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list'            => _x('Testimonios list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'manuelbarrientoscr'),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Testimonio custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'testimonio'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array('category', 'post_tag'),
        'show_in_rest'       => true
    );

    register_post_type('Testimonio', $args);
}
add_action('init', 'manuelbarrientoscr_register_testimonios');
/* *** */

//Post Type personalizado "libros"
function manuelbarrientoscr_register_libros()
{
    $labels = array(
        'name'                  => _x('Libros', 'Post type general name', 'manuelbarrientoscr'),
        'singular_name'         => _x('Libro', 'Post type singular name', 'manuelbarrientoscr'),
        'menu_name'             => _x('Libros', 'Admin Menu text', 'manuelbarrientoscr'),
        'name_admin_bar'        => _x('Libro', 'Add New on Toolbar', 'manuelbarrientoscr'),
        'add_new'               => __('Add New', 'manuelbarrientoscr'),
        'add_new_item'          => __('Add New libro', 'manuelbarrientoscr'),
        'new_item'              => __('New libro', 'manuelbarrientoscr'),
        'edit_item'             => __('Edit libro', 'manuelbarrientoscr'),
        'view_item'             => __('View libro', 'manuelbarrientoscr'),
        'all_items'             => __('All libros', 'manuelbarrientoscr'),
        'search_items'          => __('Search libros', 'manuelbarrientoscr'),
        'parent_item_colon'     => __('Parent libros:', 'manuelbarrientoscr'),
        'not_found'             => __('No libros found.', 'manuelbarrientoscr'),
        'not_found_in_trash'    => __('No libros found in Trash.', 'manuelbarrientoscr'),
        'featured_image'        => _x('Libro Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'archives'              => _x('Libro archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'manuelbarrientoscr'),
        'insert_into_item'      => _x('Insert into libro', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'manuelbarrientoscr'),
        'uploaded_to_this_item' => _x('Uploaded to this libro', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'manuelbarrientoscr'),
        'filter_items_list'     => _x('Filter libros list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list_navigation' => _x('Libros list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list'            => _x('Libros list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'manuelbarrientoscr'),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Libro custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'libro'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array('category', 'post_tag'),
        'show_in_rest'       => true
    );

    register_post_type('Libro', $args);
}
add_action('init', 'manuelbarrientoscr_register_libros');
/* *** */

//Post Type personalizado "letras"
function manuelbarrientoscr_register_letras()
{
    $labels = array(
        'name'                  => _x('Letras', 'Post type general name', 'manuelbarrientoscr'),
        'singular_name'         => _x('Letra', 'Post type singular name', 'manuelbarrientoscr'),
        'menu_name'             => _x('Letras', 'Admin Menu text', 'manuelbarrientoscr'),
        'name_admin_bar'        => _x('Letra', 'Add New on Toolbar', 'manuelbarrientoscr'),
        'add_new'               => __('Add New', 'manuelbarrientoscr'),
        'add_new_item'          => __('Add New letra', 'manuelbarrientoscr'),
        'new_item'              => __('New letra', 'manuelbarrientoscr'),
        'edit_item'             => __('Edit letra', 'manuelbarrientoscr'),
        'view_item'             => __('View letra', 'manuelbarrientoscr'),
        'all_items'             => __('All letras', 'manuelbarrientoscr'),
        'search_items'          => __('Search letras', 'manuelbarrientoscr'),
        'parent_item_colon'     => __('Parent letras:', 'manuelbarrientoscr'),
        'not_found'             => __('No letras found.', 'manuelbarrientoscr'),
        'not_found_in_trash'    => __('No letras found in Trash.', 'manuelbarrientoscr'),
        'featured_image'        => _x('Letra Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'archives'              => _x('Letra archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'manuelbarrientoscr'),
        'insert_into_item'      => _x('Insert into letra', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'manuelbarrientoscr'),
        'uploaded_to_this_item' => _x('Uploaded to this letra', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'manuelbarrientoscr'),
        'filter_items_list'     => _x('Filter letras list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list_navigation' => _x('Letras list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list'            => _x('Letras list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'manuelbarrientoscr'),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'Letra custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'letra'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array('category', 'post_tag'),
        'show_in_rest'       => true
    );

    register_post_type('Letra', $args);
}
add_action('init', 'manuelbarrientoscr_register_letras');
/* *** */

//Post Type personalizado "generales"
function manuelbarrientoscr_register_generales()
{
    $labels = array(
        'name'                  => _x('Generales', 'Post type general name', 'manuelbarrientoscr'),
        'singular_name'         => _x('General', 'Post type singular name', 'manuelbarrientoscr'),
        'menu_name'             => _x('Generales', 'Admin Menu text', 'manuelbarrientoscr'),
        'name_admin_bar'        => _x('General', 'Add New on Toolbar', 'manuelbarrientoscr'),
        'add_new'               => __('Add New', 'manuelbarrientoscr'),
        'add_new_item'          => __('Add New general', 'manuelbarrientoscr'),
        'new_item'              => __('New general', 'manuelbarrientoscr'),
        'edit_item'             => __('Edit general', 'manuelbarrientoscr'),
        'view_item'             => __('View general', 'manuelbarrientoscr'),
        'all_items'             => __('All generales', 'manuelbarrientoscr'),
        'search_items'          => __('Search generales', 'manuelbarrientoscr'),
        'parent_item_colon'     => __('Parent generales:', 'manuelbarrientoscr'),
        'not_found'             => __('No generales found.', 'manuelbarrientoscr'),
        'not_found_in_trash'    => __('No generales found in Trash.', 'manuelbarrientoscr'),
        'featured_image'        => _x('General Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'manuelbarrientoscr'),
        'archives'              => _x('General archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'manuelbarrientoscr'),
        'insert_into_item'      => _x('Insert into general', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'manuelbarrientoscr'),
        'uploaded_to_this_item' => _x('Uploaded to this general', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'manuelbarrientoscr'),
        'filter_items_list'     => _x('Filter generales list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list_navigation' => _x('Generales list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'manuelbarrientoscr'),
        'items_list'            => _x('Generales list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'manuelbarrientoscr'),
    );
    $args = array(
        'labels'             => $labels,
        'description'        => 'General custom post type.',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'general'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 20,
        'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        'taxonomies'         => array('category', 'post_tag'),
        'show_in_rest'       => true
    );

    register_post_type('General', $args);
}
add_action('init', 'manuelbarrientoscr_register_generales');
/* *** */


//Soporte del tema
add_theme_support('menus');

/* 
* Resgistro de Menus
*
* @link https://developer.wordpress.org/reference/functions/register_nav_menus/
*/
if (
    !function_exists('manuelbarrientoscr_register_nav_menu')
) {
    function manuelbarrientoscr_register_nav_menu()
    {
        register_nav_menus(array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'footer_menu'  => __('Footer Menu', 'text_domain'),
        ));
    }
    add_action('after_setup_theme', 'manuelbarrientoscr_register_nav_menu', 0);
}

// Agregar scripts al proyecto 
if (!function_exists('manuelbarrientoscr_scripts')) {
    function manuelbarrientoscr_scripts()
    {
        // JQUERY
        wp_enqueue_script("jquery");
        // FUNCTIONS
        wp_enqueue_script('functions', get_template_directory_uri() . '/assets/js/functions.js', null, null, 'all');
    }
    add_action('wp_enqueue_scripts', 'manuelbarrientoscr_scripts');
}
// ---***--- //
// Agregar styles al proyecto 
if (!function_exists('manuelbarrientoscr_styles')) {
    function manuelbarrientoscr_styles()
    {
        // STYLE
        wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', null, null, 'all');
        wp_enqueue_style('navegation', get_template_directory_uri() . '/assets/css/navegation.css', null, null, 'all');
        wp_enqueue_style('contacto', get_template_directory_uri() . '/assets/css/contacto.css', null, null, 'all');
        wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css', null, null, 'all');
        wp_enqueue_style('slick', get_template_directory_uri() . '/assets/slick/slick.css', null, null, 'all');
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/assets/slick/slick-theme.css', null, null, 'all');
        wp_enqueue_style('inicio', get_template_directory_uri() . '/assets/css/inicio.css', null, null, 'all');
        wp_enqueue_style('acerca-de-mi', get_template_directory_uri() . '/assets/css/acerca-de-mi.css', null, null, 'all');
        wp_enqueue_style('libros', get_template_directory_uri() . '/assets/css/libros.css', null, null, 'all');
        wp_enqueue_style('letras-felices', get_template_directory_uri() . '/assets/css/letras-felices.css', null, null, 'all');
        wp_enqueue_style('contactame', get_template_directory_uri() . '/assets/css/contactame.css', null, null, 'all');

        
    }
    add_action('wp_head', 'manuelbarrientoscr_styles');
}
    // ---***--- //
