<?php
/**
 *  Template name: Сторінка Заходи
 */
get_header(); ?>

    <section class="container">
        <div class="row">
            <div class="breadcrumbs_module">
                <p><a class="breadcrumbs_link" href="<?php echo get_site_url()?>">Головна</a><span class="breadcrumbs_separator"></span><a class="breadcrumbs_link breadcrumbs_link_disabled" href="#">Заходи</a></p>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row justify-content-center">
            <h2 class="section_heading">Заходи</h2>
        </div>
        <div class="row">
        <div class="col-md-8">
            <div class="service_box">
            <h3>Дні Народження</h3>
                <p>В сімейному зоопарку Лемур створені всі умови, щоб організувати дитині дійсно незабутній День Народження! Відзначайте його яскраво, весело, а головне в компанії мешканців зоопарку.
                </p>
            </div>
        </div>
            <div class="service_box_img_1">
                <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/birthday.png" alt="birthday">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service_incl_features">
                    <h3 class="text-left">До Ваших послуг</h3>
                </div>
                <div class="col-md-4 col-sm-6"><img src="<?php echo get_template_directory_uri() ?>/assets/img/service1.png" alt="service1">
                    <h4>Робота професійних аніматорів</h4>
                </div>
                <div class="col-md-4 col-sm-6"><img src="<?php echo get_template_directory_uri() ?>/assets/img/service2.png" alt="service2">
                    <h4>Екскурсія-гра по зоопарку</h4>
                </div>
                <div class="col-md-4 col-sm-6"><img src="<?php echo get_template_directory_uri() ?>/assets/img/service3.png" alt="service3">
                    <h4>Тематичне оформлення святкового столу</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="service_box">
                    <h3>Відкриті уроки біології</h3>
                    <p>Сімейний зоопарк «Лемур» проводить відкриті уроки біології та зоології для дорослих і дітей. Наші досвідчені фахівці розкажуть про захоплюючому світі наших вихованців, проведуть екскурсію і дадуть відповідь на всі питання.
                    </p>
                </div>
            </div>
            <div class="service_box_img_2">
                <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/biology_lessons.png" alt="biology_lessons">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="service_box_img_3">
                    <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/aquagrim.png" alt="aquagrim">
                </div>
                <div class="service_box">
                    <h3>Аквагрим</h3>
                    <p>Діти в захваті від аквагриму, адже за декілька хвилин наш профессійний художник перетворює малечу на милих звірят, що допоможе якнайшвидше стати другом для мешканців сімейного зоопарку Лемур.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="service_box">
                    <h3>Квести</h3>
                    <p>Запрошуємо вас в захоплюючий світ пригод, в який ви можете зануритися, завдяки квестам Сімейногго зоопарку Лемур.
                    </p>
                </div>
            </div>
            <div class="service_box_img_4">
                <img class="img img-fluid" src="<?php echo get_template_directory_uri() ?>/assets/img/quests.png" alt="quests">
            </div>
        </div>
    </section>
    <section class="container">
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


<?php get_footer();
