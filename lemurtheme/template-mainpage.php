<?php
/**
 *  Template name: Головна сторінка
 */
get_header(); ?>

<!--    <main role="main" class="container-fluid slider_section">-->
<!--        <div class="row slider_box">-->
<!--            <div class="col-md-6 offset-md-6">-->
<!--                <h2 class="slider_heading"><span class="slider_text_uppercase">Новий сімейний</span><br>зоопарк &ldquo;Лемур&rdquo;</h2>-->
<!--                <div class="row">-->
<!--                    <p class="line_through align-self-center"><span class="slider_price">190</span></p>-->
<!--                        <div class="label_round align-items-start">-->
<!--                            <p class="label_slider_price">150</p>-->
<!--                            <span class="label_slider_currency">грн</span>-->
<!--                        </div>-->
<!--                    <p class="label_comment align-self-center">-->
<!--                        <span class="label_comment_big">до 11.11.2018 <sup class="asterisk">&#10033;</sup></span><br>-->
<!--                        <span class="label_comment_small">у зв&#39;язку з відкриттям</span>-->
<!--                    </p>-->
<!--                </div>-->
<!--                <div class="row">-->
<!--                    <p class="slider_selling_text">Подаруй щастя своїй дитині!</p>-->
<!--                </div>-->
<!--                <div class="slider_button_box">-->
<!--                    <a href="--><?php //echo get_site_url()?><!--/price/" class="btn button_lemur_third" role="button">Придбати квитки</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </main>-->

    <section id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mainslide1-min.jpg" alt="зоопарк Лемур">
                <div class="carousel-caption">
                    <div class="row justify-content-end">
                        <div class="col-md-8 text-center">
                            <h2 class="slider_heading slide_1_heading"><span class="slider_text_uppercase">Новий сімейний</span><br>зоопарк &ldquo;Лемур&rdquo;</h2>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-8">
                            <div class="row justify-content-center">
                                <p class="line_through align-self-center"><span class="slider_price">190</span></p>
                                <div class="label_round align-items-start">
                                    <p class="label_slider_price">150</p>
                                    <span class="label_slider_currency">грн</span>
                                </div>
                                <p class="label_comment align-self-center">
                                    <span class="label_comment_big">до 11.11.2018 <sup class="asterisk">&#10033;</sup></span><br>
                                    <span class="label_comment_small">у зв&#39;язку з відкриттям</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-8 text-center">
                            <p class="slider_selling_text">Подаруй щастя своїй дитині!</p>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-8 slider_button_box text-right">
                            <a href="<?php echo get_site_url()?>/price/" class="btn button_lemur_third" role="button">Придбати квитки</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mainslide2-min.jpg" alt="Відкритий урок">
                <div class="carousel-caption">
                    <div class="row justify-content-end">
                        <div class="col-md-8 text-center">
                            <h2 class="slider_heading slide_2_heading">Відкритий урок</h2>
                            <p class="slide_2_text">Дізнайся більше про природу!</p>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-8 slider_button_box text-right">
                            <a href="<?php echo get_site_url()?>/price/" class="btn button_lemur_second" role="button">Детальніше <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mainslide3-min.jpg" alt="День народження">
                <div class="carousel-caption">
                    <div class="row justify-content-end">
                        <div class="col-md-8 text-center">
                            <h2 class="slide_3_heading">Твій день народження</h2>
                            <p class="slide_3_text">Разом з усіма друзями</p>
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-md-8 slider_button_box text-right">
                            <a href="<?php echo get_site_url()?>/price/" class="btn button_lemur_second" role="button">Детальніше <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </section>


    <section class="container animals" id="animals">
        <div class="row justify-content-center">
            <h2 class="section_heading">Наші мешканці</h2>
        </div>
        <div class="row animals_row justify-content-center text-center">
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-end">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal1.png">
                    <h2>Лемур Бурий</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-end">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal2.png">
                    <h2>Єнот Полоскун</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-end">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end trick_margin3" src="<?php echo get_template_directory_uri() ?>/assets/img/animal3.png">
                    <h2>Носуха</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-end">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal4.png">
                    <h2>Їжачок</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-end">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end trick_margin5" src="<?php echo get_template_directory_uri() ?>/assets/img/animal5.png">
                    <h2>Сурікат</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-end">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal6.png">
                    <h2>Білка Дегу</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-end">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal7.png">
                    <h2>Кроль-Велетень</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-end">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal8.png">
                    <h2>Міні Овечка</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal9.png">
                    <h2>Мініпіг</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal10.png">
                    <h2>Лемур Катта</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal11.png">
                    <h2>Бенгальська Кішка</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal12.png">
                    <h2>Морська Свинка</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal13.png">
                    <h2>Декоративний кролик</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal14.png">
                    <h2>Камерунська Коза</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal15.png">
                    <h2>Черепаха Сухопутна</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/animal16.png">
                    <h2>Бородата Агама</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal17.png">
                    <h2>Королівський Пітон</h2>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-start" src="<?php echo get_template_directory_uri() ?>/assets/img/animal18.png">
                    <h2>Шиншила</h2>
                </div>

            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 align-self-start">
                <div class="animal_item">
                    <img class="img img-fluid align-self-end" src="<?php echo get_template_directory_uri() ?>/assets/img/animal19.png">
                    <h2>Червоновуха черепаха</h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="animals_button_box ml-auto">
                <a href="<?php echo get_site_url()?>/animals/" class="btn button_lemur_second" role="button">Всі мешканці <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_arrow.svg" alt=""></a>
            </div>
        </div>
    </section>
    <section class="container features" id="features">
        <div class="row justify-content-center">
            <h2 class="section_heading">Наші переваги</h2>
        </div>
        <div class="row features_row text-center">
            <div class="col-md-4 col-sm-6 align-self-end">
                <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/feature1.png">
                <p class="feature_text">Чисто та без запаху</p>
            </div>
            <div class="col-md-4 col-sm-6 align-self-end">
                <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/feature2.png">
                <p class="feature_text">Тварини привиті та під наглядом ветеринара</p>
            </div>
            <div class="col-md-4 col-sm-6 align-self-end">
                <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/feature3.png">
                <p class="feature_text">Ручні звірі</p>
            </div>
            <div class="col-md-4 col-sm-6 align-self-end">
                <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/feature4.png">
                <p class="feature_text">Безкоштовна ігрова зона</p>
            </div>
            <div class="col-md-4 col-sm-6 align-self-end">
                <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/feature5.png">
                <p class="feature_text">Зручне місце розташування</p>
            </div>
            <div class="col-md-4 col-sm-6 align-self-end">
                <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/feature6.png">
                <p class="feature_text">Привітний персонал</p>
            </div>
        </div>
    </section>
    <section class="container-fluid price" id="price">
        <div class="row justify-content-center">
            <h2 class="section_heading">Ціна квитків</h2>
        </div>
        <div class="row ml-md-5 mr-md-5">
            <table class="table table-responsive-sm table-hover text-center table_text">
                <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Будні</th>
                    <th scope="col">Вихідні</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-left">Вхід для дітей до 3-х років<br><span class="table_text_small">(за наявності cвідоцтва про народження)</span></td>
                    <td class="teble_text_colored">Безкоштовно</td>
                    <td class="teble_text_colored">Безкоштовно</td>
                </tr>
                <tr>
                    <td class="text-left">Вхід для дітей від 3-х до 8-ми років<br><span class="table_text_small">(до 127 см)</span></td>
                    <td valign="bottom">150 грн</td>
                    <td>170 грн</td>
                </tr>
                <tr>
                    <td class="text-left">Дорослі та діти від 8-ми років</td>
                    <td>170 грн</td>
                    <td>190 грн</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="row justify-content-center">
            <div class="col-11 text-right">
                <a href="<?php echo get_site_url()?>/price/" class="btn button_lemur_second" role="button">Детальніше <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_arrow.svg" alt=""></a>
            </div>
        </div>
        <div class="row" id="wholesale">
            <div class="col-md-7 ml-md-5">
                <div class="wholesale_box">
                    <div class="row justify-content-center">
                        <div class="col-9"><h3 class="wholesale_heading">Купи квиток на сайті та отримай знижку</h3></div>
                        <div class="">
                            <div class="label_discount ">
                                <span class="label_discount_text text-center">5<sup>&#37;</sup></span>
                            </div>
                        </div>
                    </div>
                    <div class="row wholesale_button_box justify-content-center">
                        <a href="<?php echo get_site_url()?>/price/" class="btn button_lemur_third" role="button">Придбати квитки</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <img class="img wholesale_bg_lemur ml-md-auto d-none d-md-block" src="<?php echo get_template_directory_uri() ?>/assets/img/wholesale_bg_lemur.png" alt="lemur_wholesale">
        </div>
    </section>
    <section class="container sale" id="sale">
        <div class="row justify-content-center">
            <h2 class="section_heading">Акції</h2>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="sale_item sale_item_1">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale1.png" alt="" class="img img-fluid">
                    <h3 class="sale_item_heading">Купуй квиток на сайті</h3>
                    <p class="sale_text">отримай знижку 5% </p>
                    <a href="<?php echo get_site_url()?>/price/" class="btn button_lemur_third" role="button">Придбати квитки</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sale_item sale_item_2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale2.png" alt="" class="img img-fluid">
                    <h3 class="sale_item_heading">Подарунковий квиток</h3>
                    <p class="sale_text">для найрідніших</p>
                    <a href="<?php echo get_site_url()?>/price/" class="btn button_lemur_third" role="button">Придбати квитки</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sale_item sale_item_3">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale3.png" alt="" class="img img-fluid">
                    <h3 class="sale_item_heading">Безкошктовний квиток</h3>
                    <p class="sale_text">в День Народження</p>
                    <a href="<?php echo get_site_url()?>/price/" class="btn button_lemur_third" role="button">Придбати квитки</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container activity" id="activity">
        <div class="row justify-content-center">
            <h2 class="section_heading">Заходи</h2>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-lg-3 col-md-4">
                <div class="activity_item activity_item_1">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/activity1.png" alt="" class="img img-fluid">
                    <h3 class="activity_item_heading">Аквагрим</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="activity_item activity_item_2">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/activity2.png" alt="" class="img img-fluid">
                    <h3 class="activity_item_heading">Дитячі квести</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="activity_item activity_item_3">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/activity3.png" alt="" class="img img-fluid">
                    <h3 class="activity_item_heading">День Народження</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="activity_item activity_item_4">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/activity4.png" alt="" class="img img-fluid">
                    <h3 class="activity_item_heading">Відкритий урок</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-right">
                <a href="<?php echo get_site_url()?>/activity/" class="btn button_lemur_second" role="button">Детальніше <img src="<?php echo get_template_directory_uri() ?>/assets/img/btn_arrow.svg" alt=""></a>
            </div>
        </div>
    </section>
    <section class="container-fluid aboutus" id="aboutus">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="text-center">
                            <h2 class="section_heading aboutus_section_heading">Сімейний зоопак &laquo;Лемур&raquo;</h2>
                            <h3 class="aboutus_section_subheadining">Великий вибір ручних тварин для розвитку турботи про природу у дітей</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="aboutus_text_box">
                            <ul class="aboutus_list">
                                <li>Сімейний контактний зоопарк в Києві &laquo;Лемур&raquo; отримайте море позитивних емоцій від спілкування з ручними тваринами! </li>
                                <li>Київський сімейний зоопарк «Лемур» робить світ живої природи доступним дорослим і дітям. Допомогає знайомитись та заводити дружбу з ручними екзотичними та домашніми тваринами, дізнаватись про їх характер, особливості. </li>
                                <li>Тепер в місті Київ можна погладити, погодувати, обійняти та зробити селфі з лемуром, енотом, носухою, овечкой, мініпігом, кроликом та багатьма іншими. Тактильне спілкування з тваринами пояснює важливість дбайливого ставлення до навколишнього світу та розширює кругозір дітей.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-left ">
                    <div class="aboutus_bg_rabbit d-none d-lg-block">
                        <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/aboutus_bg_rabbit.png" alt="bg_rabbit">
                    </div>
                </div>

                <div class="col-12">
                    <div class="aboutus_bg_enot text-right d-none d-lg-block">
                        <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/aboutus_bg_enot.png" alt="bg_enot">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container social_blog" id="social_blog">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="section_heading text-center">Ми в соціальних мережах</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="row justify-content-center blog_social_heading_box">
                    <a href="https://www.facebook.com/Lemur.zoopark/" target="_blank"><img class="blog_social_icon" src="<?php echo get_template_directory_uri() ?>/assets/img/facebook_icon.svg" alt="facebook_icon"></a>
                    <h3 class="blog_social_text align-self-end">Facebook</h3>
                </div>
                <div class="row social_blog_row justify-content-center">
                    <div class="col-6">
                        <a href="https://www.facebook.com/Lemur.zoopark/posts/313556476124933:0" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/fblemur1.jpg" alt="" class="img img-fluid">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://www.facebook.com/Lemur.zoopark/posts/313556292791618:0" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/fblemur2.jpg" alt="fbpostimage2" class="img img-fluid">
                        </a>
                    </div>
                </div>
                <div class="row social_blog_row justify-content-center">
                    <div class="col-6">
                        <a href="https://www.facebook.com/Lemur.zoopark/posts/310513653095882:0" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/fblemur3.jpg" alt="" class="img img-fluid">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://www.facebook.com/Lemur.zoopark/posts/310513653095882:0" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/fblemur4.jpg" alt="fbpostimage2" class="img img-fluid">
                        </a>
                    </div>
                </div>
                <div class="row social_blog_row justify-content-center">
                    <div class="col-6">
                        <a href="https://www.facebook.com/Lemur.zoopark/posts/310513653095882:0" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/fblemur5.jpg" alt="" class="img img-fluid">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://www.facebook.com/Lemur.zoopark/posts/298824564264791" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/fblemur6.jpg" alt="fbpostimage2" class="img img-fluid">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row blog_social_heading_box justify-content-center">
                    <a href="https://www.instagram.com/lemur.zoopark/" target="_blank"><img class="blog_social_icon" src="<?php echo get_template_directory_uri() ?>/assets/img/instagram_icon.svg" alt="instagram_icon"></a>
                    <h3 class="blog_social_text align-self-end">Instagram</h3>
                </div>
                <div class="row social_blog_row justify-content-center">
                    <div class="col-6">
                        <a href="https://www.instagram.com/p/BpbhZtrBree/?utm_source=ig_web_copy_link" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/instalemur1.jpg" alt="instapostimage" class="img img-fluid">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://www.instagram.com/p/BoMNBfVl_i8/?utm_source=ig_web_copy_link" target="_blank">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/instalemur2.jpg" alt="instapostimage" class="img img-fluid">
                        </a>
                    </div>
                </div>
                <div class="row social_blog_row justify-content-center">
                    <div class="col-6">
                        <a href="https://www.instagram.com/p/BpMlVt4l90A/?utm_source=ig_web_copy_link" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/instalemur3.jpg" alt="instapostimage" class="img img-fluid">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://www.instagram.com/p/BpbintQBD_C/?utm_source=ig_web_copy_link" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/instalemur4.jpg" alt="instapostimage" class="img img-fluid">
                        </a>
                    </div>
                </div>
                <div class="row social_blog_row justify-content-center">
                    <div class="col-6">
                        <a href="https://www.instagram.com/p/BpbiIJvh72w/?utm_source=ig_web_copy_link" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/instalemur5.jpg" alt="instapostimage" class="img img-fluid">
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="https://www.instagram.com/p/BoMNVdtlD5Y/?utm_source=ig_web_copy_link" target="_blank">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/instalemur6.jpg" alt="instapostimage" class="img img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container contact image_box" id="contact">
        <div class="row">
            <div class="col-lg-9">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/map.png" alt="" class="img-fluid">
            </div>
            <div class="col-lg-3 align-self-center contact_box">
                <div class="row">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/location_icon.svg" alt="">
                    </div>
                    <div class="col contact_box_text">
                        <p>ТЦ &laquo;Аркадія&raquo;<br>метро &laquo;Осокорки&raquo;</p>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/time_icon.svg" alt="">
                    </div>
                    <div class="col contact_box_text">
                        <p>Щоденно<br>з 10:00 до 22:00</p>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/telephone_icon.svg" alt="">
                    </div>
                    <div class="col">
                        <a class="telephone_link_map" href="tel:+380-44-499-99-44">(044) 499 99 44</a><br>
                        <a class="telephone_link_map" href="tel:+380-50-280-00-04">(050) 280 00 04</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <img class="img contact_bg_nosuha" src="<?php echo get_template_directory_uri() ?>/assets/img/map_bg_nosuha.png" alt="bg_nosuha">
        </div>
    </section>

<?php get_footer();
