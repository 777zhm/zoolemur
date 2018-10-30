<?php
/**
 *  Template name: Сторінка Ціни
 */
get_header(); ?>

    <section class="container">
        <div class="row">
            <div class="breadcrumbs_module">
                <p><a class="breadcrumbs_link" href="<?php echo get_site_url()?>">Головна</a><span class="breadcrumbs_separator"></span><a class="breadcrumbs_link breadcrumbs_link_disabled" href="#">Ціна квитка</a></p>
            </div>
        </div>
    </section>
    <section class="container price_full">
        <div class="row justify-content-center">
            <h2 class="section_heading">Ціна квитків</h2>
        </div>
        <div class="row">
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
                <tr>
                    <td class="text-left">Корм для тварин</td>
                    <td colspan="2">40 грн</td>
                </tr>
                </tbody>
            </table>
            <p class="table_legend">*за даними ВООЗ (всесвітньої організації охорони здоров'я) середній зріст дівчаток та хлопчиків у 8 років складає 127 см.</p>
            <p class="table_legend">**знижки та безкоштовні квитки для пільгових категорій населення обговорюються індивідуально та здійснюютьсяна основі необхідних документів.</p>
        </div>
    </section>
    <section class="container price_full_fencebg">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="wholesale_action_box">
                    <div class="row">
                        <div class="col-8 align-self-center align-items-end">
                            <p class="action_text text-right"><span class="action_text_colored">Єдина ціна</span> квитка до 11.11.2018 -</p>
                        </div>
                        <div class="label_action align-items-start">
                            <p class="label_action_price">150</p>
                            <span class="label_action_currency">грн</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="wholesale">
            <div class="col-md-7">
                <div class="wholesale_box">
                    <div class="row justify-content-center">
                        <div class="col-9"><h3 class="wholesale_heading">Придбати онлайн зі знижкою</h3>
                        </div>
                        <div class="">
                            <div class="label_discount">
                                <span class="label_discount_text text-center">5<sup>&#37;</sup></span>
                            </div>
                        </div>
                    </div>
                    <div class="row wholesale_button_box justify-content-center">
                        <a href="#" class="btn button_lemur_third" role="button">Придбати квитки</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12"><p class="wholesale_legend">Куплені квитки обміну та поверненню не підлягають</p></div>
        </div>
        <div class="row">
            <img class="img wholesale_bg_lemur ml-md-auto d-none d-md-block" src="<?php echo get_template_directory_uri() ?>/assets/img/wholesale_bg_lemur.png" alt="lemur_wholesale">
        </div>
        <div class="row discount">
            <div class="col-12">
                <h2 class="section_heading text-center">Пільги і знижки</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 discount_item cloud_1 text-center">
                    <p>Дітям від 0 до 3<br>років квиток</p>
                    <span>Безкоштовно*</span>
                </div>
                <div class="col-lg-4 col-md-6 discount_item cloud_2 text-center">
                    <p>Імениннику в День<br>Народження квиток</p>
                    <span>Безкоштовно*</span>
                </div>
                <div class="col-lg-4 col-md-6 discount_item cloud_3 text-center">
                    <p>Інвалідам 1 та 2<br>групи квиток</p>
                    <span>Знижка 50%*</span>
                </div>
                <div class="col-12 discount_legend_box">
                    <p class="discount_legend">*Всі знижки надаються за наявності відповідних документів.</p>
                    <p class="discount_legend">**Знижки іншим категоріям населення обговорюються в індивідуальному порядку</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center nice_day">
            <div class="col-12">
                <h2 class="section_heading text-center text_colored_orange">Гарного відпочинку!</h2>
            </div>
        </div>
    </section>

<?php get_footer();
