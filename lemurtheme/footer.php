<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lemurtheme
 */

?>

	</div><!-- #content -->

<footer class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <?php /* Primary navigation */
            wp_nav_menu( array(
                'menu' => 'top_menu',
                'depth' => 2,
                'container' => false,
                'menu_class' => 'footer_menu_list'
            ));?>
        </div>
    </div>
    <div class="row contact_info_footer justify-content-center">
        <div class="col-md-10">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/time_icon.svg" alt="">
                        </div>
                        <div class="col">
                            <p>Щоденно<br>з 10:00 до 22:00</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/location_icon.svg" alt="">
                        </div>
                        <div class="col">
                            <p>ТЦ &laquo;Аркадія&raquo;<br>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/metro_icon.svg" alt="metro_icon" height="14">&nbsp;&laquo;Осокорки&raquo;<br>Дніпровська наб., 33
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/telephone_icon.svg" alt="">
                        </div>
                        <div class="col">
                            <a class="telephone_link_footer" href="tel:+380-44-499-99-44">(044) 499-99-44</a>
                        </div>
                    </div>
                    <div class="row social_box ml-md-4">
                        <a href="https://www.instagram.com/lemur.zoopark/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/instagram_icon.svg" alt="instagram_icon" height="36"></a>
                        <a href="https://www.facebook.com/Lemur.zoopark/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/assets/img/facebook_icon.svg" alt="facebook_icon" height="36"></a>
                        <a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/img/youtube_icon.svg" alt="youtube_icon" height="36"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<section class="container-fluid">
    <div class="row footer_lemur">
        <div class="logo_footer ml-auto">
            <a href="<?php echo get_site_url()?>"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_footer.png" alt="lemur_zoo_logo"></a>
        </div>
    </div>
    <div class="row justify-content-center">
        <p>Контактний зоопарк “Лемур” &copy; 2018 Всі права захищені</p>
    </div>
</section>

<?php wp_footer(); ?>

</body>
</html>
