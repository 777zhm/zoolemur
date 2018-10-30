<?php
/**
 *  Template name: Сторінка Контакти
 */
get_header(); ?>

    <section class="container">
        <div class="row">
            <div class="breadcrumbs_module">
                <p><a class="breadcrumbs_link" href="<?php echo get_site_url()?>">Головна</a><span class="breadcrumbs_separator"></span><a class="breadcrumbs_link breadcrumbs_link_disabled" href="#">Контакти</a></p>
            </div>
        </div>
    </section>
    <section class="container contacts_full" id="contacts_full">
        <div class="row justify-content-center">
            <h2 class="section_heading">Контакти</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="col-12">
                    <h4 class="contacts_full_heading">Адреса:</h4>
                    <p class="contacts_full_text">Дніпровська набережна, 33<br>метро “Осокорки”</p>
                </div>
                <div class="col-12">
                    <h4 class="contacts_full_heading">Телефон:</h4>
                    <p class="contacts_full_text"><a href="tel:+380-44-499-99-44">044 499 99 44</a><br><a href="tel:+380-50-280-00-04">050 280 00 04</a></p>
                </div>
                <div class="col-12">
                    <h4 class="contacts_full_heading">Адреса:</h4>
                    <p class="contacts_full_text">lemur.zoopark@gmail.com</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-12">
                    <h4 class="contacts_full_heading">Організація Дня Народження та квестів</h4>
                    <p class="contacts_full_text"><a href="tel:+380-67-770-27-75">067 770 27 75</a></p>
                </div>
                <div class="col-12">
                    <h4 class="contacts_full_heading">Замовлення групових відвідувань</h4>
                    <p class="contacts_full_text"><a href="tel:+380-67-771-49-33">067 771 49 33</a></p>
                </div>
                <div class="col-12">
                    <h4 class="contacts_full_heading">Відділ маркетингу</h4>
                    <p class="contacts_full_text"><a href="tel:+380-67-550-55-69">067 550 55 69</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="container contacts_full_map">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/map.png" alt="map_lemur_zoopark" class="img img-fluid">
            </div>
        </div>
    </section>

<?php get_footer();
