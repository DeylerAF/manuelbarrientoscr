<?php
/* 
* Mostrar Menus de navegacion
*
* @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
*/
?>
<?php
//Variables
$header_id = 164;
$logo_navegation = get_field('logo_navegation', $header_id);
$url_logo_navegation = $logo_navegation['url'];
$alt_logo_navegation = $logo_navegation['alt'];
?>


<input type="checkbox" id="switch_navegation">
<nav id="navegation" class="row">
    <div id="logo" class="col-6 col-lg-2">
        <a href="<?php echo get_site_url() ?>" class="font_logo row" >
            <figure class="col-12">
                <img class="img-fluid" src="<?php echo $url_logo_navegation ?>" alt="Manuel Barrientos">
            </figure>
        </a>
    </div>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'primary_menu',
            'container_id' => 'menu_superior',
            'container_class' => 'col-12 col-lg-10',
            'menu_class' => 'row',
        )
    );
    ?>
    <div class="col-6 switch_navegation">
        <label for="switch_navegation">
            <span class="tres_puntos"></span>
            <span class="text_menu">Menú</span>
        </label>
    </div>
</nav>