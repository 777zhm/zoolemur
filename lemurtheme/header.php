<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lemurtheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="container-fluid">
    <div class="row justify-content-center text-center">
        <div class="col-12">
            <div class="logotype_box">
                <a href="<?php echo get_site_url()?>"><img class="img img-fluid logotype" src="<?php echo get_template_directory_uri() ?>/assets/img/logo_header.png" alt="lemur_zoo_logo"></a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-3 col-sm-6">
            <div class="row">
                <div class="icon_box">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/time_icon.svg" alt="time_icon">
                </div>
                <div class="col contact_text">
                    <p><span class="span_appercase">Чекаємо вас</span><br>з 10:00 до 22:00</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="row">
                <div class="icon_box">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/location_icon.svg" alt="location_icon">
                </div>
                <div class="col contact_text">
                    <p><span class="span_appercase">ТЦ &laquo;Аркадія&raquo;</span><br>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/metro_icon.svg" alt="metro_icon" height="14">&nbsp;&laquo;Осокорки&raquo;<br><span class="span_lowerfont">Дніпровська наб., 33</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="row">
                <div class="icon_box">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/telephone_icon.svg" alt="telephone_icon">
                </div>
                <div class="col contact_text">
                    <a class="telephone_link_header" href="tel:+380-44-499-99-44">(044)499-99-44</a>
                    <div class="button_box">
                        <a href="<?php echo get_site_url()?>/price/" class="btn button_lemur_first" role="button">Придбати квиток</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <select name="language_box" id="language_box">
                <option value="ua">UA</option>
                <option value="ru">RU</option>
                <option value="en">EN</option>
            </select>
            <div class="social_box">
                <a href="https://www.instagram.com/lemur.zoopark/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram_icon.svg" alt="instagram_icon"></a>
                <a href="https://www.facebook.com/Lemur.zoopark/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook_icon.svg" alt="facebook_icon"></a>
                <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/youtube_icon.svg" alt="youtube_icon"></a>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-md navbar-dark bg-dark header_menu" role="navigation">
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-controls="navbar-ex1-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-ex1-collapse justify-content-center">
        <?php /* Primary navigation */
        wp_nav_menu( array(
                'menu' => 'top_menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'nav navbar-nav header_menu_list'
            ));?>
    </div>
</nav>

	<div id="content" class="site-content">
