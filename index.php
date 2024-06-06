<?php require 'head.php' ?>


<section class="core-container our-works">
    <h1 class="our-works_header site-header">проектирование <br> Оборудование <span>&bull;</span> монтаж </h1>
    <div class="our-works_item-wrapper">
        <div class="our-works_item">
            <span>Актовых залов</span>
            <img src="/images/our-works-image-1.png" alt="image">
        </div>
        <div class="our-works_item">
            <span>Конференц-залов</span>
            <img src="/images/our-works-image-2.png" alt="image">
        </div>
    </div>
</section>


<section class="core-container projects">
    <div class="projects_head">
        <span class="site-block-title">Кейсы</span>
        <div class="projects_header-wrapper">
            <h2 class="site-header" id="project">проекты</h2>
            <p class="projects_description">
                Мы спроектировали и установили передовое мультимедийное оборудование для ведущих компаний в сфере развлечений, банковскоми финансовом секторе, а также в производственной сфере.
            </p>
        </div>
    </div>
    <div class="projects_items-wrapper">
        <?php foreach ([1,2,3,4,5,6,7,8] as $item) { ?>
            <div class="projects_item">
                <div class="projects_img-wrapper">
                    <img src="/images/project-img-1.png" alt="image">
                    <span>2 проекта</span>
                </div>
                <p class="projects_title">Академия единоборств РМК</p>
                <div class="projects_tags">
                    <span>Спортивные объекты</span>
                    <span>Системы фонового озвучивания</span>
                    <span>Механика для сцены</span>
                </div>
                <button class="projects_btn-detail btn-grey" data-popup-products-open-button="<?= $item ?>">Подробнее</button>
            </div>
        <?php } ?>
    </div>
</section>

<?php foreach ([1,2,3,4,5,6,7,8] as $item) { ?>
<section class="popup-products-wrapper" data-popup-products="<?= $item ?>">
    <div class="popup-products">
        <button class="popup-products_btn-close" data-popup-products-btn-close></button>
        <div class="popup-products_content">
            <h2 class="site-header">Креативный кластер «Домна»</h2>
            <div class="popup-products_tags-wrapper">
                <span>Спортивные объекты</span>
                <span>Системы фонового озвучивания</span>
                <span>Механика для сцены</span>
            </div>
            <div class="popup-products_text-wrapper">
                <p>
                    Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
                </p>
                <p>
                    Цель
                    Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
                </p>
                <p>
                    Задачи
                    Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
                </p>
            </div>
            <form action="" class="popup-products_form">
                <h2 class="popup-products_header">
                    Хочу так же
                </h2>
                <div class="popup-products_label-wrapper">
                    <label class="popup-products_label">
                        Ваше Имя *
                        <input type="text" placeholder="Имя">
                    </label>
                    <label class="popup-products_label">
                        Номер телефона *
                        <input type="tel" placeholder="Телефон" pattern="[0-9]{12}">
                    </label>
                    <button type="submit" class="popup-products_btn-submit btn-blue">Оставить заявку</button>
                </div>
                <p class="popup-products_subtitle">
                    Нажимая «Оставить заявку», я соглашаюсь с политикой обработки
                    <a href="/policy.php">персональных данных</a>
                </p>
            </form>
        </div>
        <div class="popup-products_slider-section">
            <div class="popup-products_swiper" data-popup-products-swiper>
                <div class="swiper-wrapper">
                    <?php foreach ([1,2,3,4,5] as $item_slider) { ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-item">
                                <a href="/images/project-img-1.png" data-fancybox="gallery-<?= $item ?>" data-caption="image">
                                    <img src="/images/project-img-1.png" alt="image">
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="swiper-pagination" data-popup-products-swiper-pagination></div>
                <div class="popup-products_slider_btn-prev" data-popup-products-swiper-button-prev></div>
                <div class="popup-products_slider_btn-next" data-popup-products-swiper-button-next></div>
            </div>
            <div class="popup-products_swiper" data-popup-products-gallery-swiper>
                <div class="swiper-wrapper">
                    <?php foreach ([1,2,3,4,5] as $item_galery_slider) { ?>
                        <div class="swiper-slide">
                            <div class="swiper-slide-item">
                                <img src="/images/project-img-1.png" alt="image">
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>



<section class="services-and-product-wrapper">
    <div class="core-container services">
        <div class="services-and-product_head">
            <span class="site-block-title" id="services">Услуги</span>
            <div class="services-and-product_header-wrapper">
                <h2 class="services-and-product_header site-header">услуги</h2>
                <span class="animation_dot"></span>
            </div>
        </div>
        <div class="slider-section">
            <div class="slider-section_swiper" data-services-swiper>
                <div class="swiper-wrapper">
                    <?php foreach ([1,2,3,] as $item) { ?>
                        <div class="swiper-slide">
                            <div class="services_item">
                                <div class="services_item_content">
                                    <span class="services_item_title">Комплектация объектов под ключ</span>
                                    <p class="services_item_description">
                                        Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
                                    </p>
                                    <a class="services_item_btn" href="">Подробнее</a>
                                </div>
                                <div class="services_item_img-wrapper">
                                    <img src="/images/services-image-1.png" alt="image">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="slider-section_btn-wrapper">
                <div class="slider-section_btn-prev" data-services-swiper-button-prev></div>
                <div class="slider-section_btn-next" data-services-swiper-button-next></div>
            </div>
        </div>
    </div>


    <?php
    $response_data_we_have = [
        [
            'title' => 'медиафасады',
            'image' => '/images/we-have-image-1.png',
        ],
        [
            'title' => 'проекторы',
            'image' => '/images/we-have-image-2.png',
        ],
        [
            'title' => 'Звуковое оборудование',
            'image' => '/images/we-have-image-3.png',
        ],
        [
            'title' => 'Мультимедиа оборудование',
            'image' => '/images/we-have-image-4.png',
        ],
        [
            'title' => 'запись и трансляция',
            'image' => '/images/we-have-image-5.png',
        ],
        [
            'title' => 'интерактивные панели',
            'image' => '/images/we-have-image-6.png',
        ],
        [
            'title' => 'светодиодные экраны',
            'image' => '/images/we-have-image-7.png',
        ],
        [
            'title' => 'digital singage',
            'image' => '/images/we-have-image-8.png',
        ],
    ];
    ?>

    <div class="core-container we-have">
        <div class="services-and-product_head">
            <span class="site-block-title">Проекты</span>
            <div class="services-and-product_header-wrapper">
                <h2 class="services-and-product_header site-header">Чем оснащаем</h2>
                <span class="animation_dot"></span>
            </div>
        </div>
        <div class="slider-section we-have-slider-mobile">
            <div class="slider-section_swiper" data-we-have-swiper>
                <div class="swiper-wrapper">
                    <?php foreach ($response_data_we_have as $key => $item) { ?>
                        <div class="swiper-slide">
                            <div class="we-have_slider_item">
                                <div class="we-have_item">
                                    <div class="we-have_item_img-wrapper">
                                        <img src="<?= $item['image'] ?>" alt="image">
                                    </div>
                                    <div class="we-have_item_content">
                                        <span class="we-have_item_title"><?= $item['title'] ?></span>
                                        <button class="we-have_item_btn" data-open-popup-we-have="<?= $key ?>">Подробнее</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="we-have_items-wrapper">
            <?php foreach ($response_data_we_have as $key => $item) { ?>
                <div class="we-have_item">
                    <div class="we-have_item_img-wrapper">
                        <img src="<?= $item['image'] ?>" alt="image">
                    </div>
                    <div class="we-have_item_content">
                        <span class="we-have_item_title"><?= $item['title'] ?></span>
                        <button  class="we-have_item_btn" data-open-popup-we-have="<?= $key ?>">Подробнее</button>
                    </div>
                </div>
            <?php } ?>
            <div class="we-have_detail">
                <span class="we-have_detail_title">Подберем оборудование</span>
                <p class="we-have_detail_text">Которое отвечает вашим запросам и действительно нужно на вашем проекте</p>
                <button class="we-have_detail_btn" data-order-popup="application-for-selection-of-equipment">Подобрать</button>
            </div>
        </div>
    </div>
</section>


<?php foreach ([1,2,3,4,5,6,7,8] as $key => $popup_) { ?>
<section class="popup-wrapper" data-popup-wrapper data-popup-wrapper-we-have="<?= $key ?>">
    <div class="popup-container popup-we-have" data-popup-container>
        <button type="button" class="popup_btn-close" data-popup-btn-close>Закрыть</button>
        <div class="popup-we-have_img-wrapper">
            <img src="/images/we-have-image-2.png" alt="image">
        </div>
        <div class="popup-we-have_content-wrapper">
            <span class="popup-we-have_header">проекторы</span>
            <p>
                Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
            </p>
            <p>
                Цель
                Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
            </p>
        </div>
        <div class="popup-we-have_footer">
            <img src="/images/popup-we-have-img-1.png" alt="img">
            <?php foreach ([1,2,3,4] as $item) { ?>
                <img src="/images/popup-we-have-img-2.png" alt="img">
            <?php } ?>
        </div>
    </div>
</section>
<?php } ?>


<?php
$response_data_official_product_distributors = [
    '/images/official-product-distributors-1.png',
    '/images/official-product-distributors-2.png',
    '/images/official-product-distributors-3.png',
    '/images/official-product-distributors-4.png',
    '/images/official-product-distributors-5.png',
    '/images/official-product-distributors-6.png',
    '/images/official-product-distributors-7.png',
    '/images/official-product-distributors-8.png',
    '/images/official-product-distributors-9.png',
]
?>

<section class="core-container official-product-distributors">
    <h2 class="official-product-distributors_header site-header">Официальные дистрибьюторы продукции</h2>
    <div class="official-product-distributors_content">
        <?php foreach ($response_data_official_product_distributors as $item) { ?>
            <img class="official-product-distributors_img" src="<?= $item ?>" alt="image">
        <?php } ?>
    </div>
</section>


<section class="core-container we-working">
    <div class="we-working_head">
        <span class="site-block-title" id="we-working ">Как работаем</span>
        <div class="we-working_content">
            <h2 class="we-working_header site-header">Как взаимодействуем</h2>
            <div class="we-working_description-wrapper">
                <ul class="we-working_description">
                    <li>Производим оценку потребности клиента</li>
                    <li>Предлагаем несколько путей решения бизнес задачи</li>
                    <li>Приступаем к проектированию выбранного варианта</li>
                    <li>Готовим варианты закупок по согласованному решению</li>
                    <li>Осуществляем поставку оборудования</li>
                    <li>Готовим площадку к монтажу,  производим скрытый монтаж кабельной продукции</li>
                    <li>Производим монтаж и пусконаладочные работы</li>
                    <li>Сопровождаем проект на протяжении всего гарантийного и постгарантийного периода</li>
                </ul>
                <div class="we-working_specialist-wrapper">
                    <span class="we-working_specialist_title">В проекте всегда участвуют</span>
                    <div class="we-working_specialist_items-wrapper">
                        <div class="we-working_specialist_item">
                            <img src="/images/specialist-image-1.png" alt="image">
                            <span>Руководитель проекта</span>
                        </div>
                        <div class="we-working_specialist_item">
                            <img src="/images/specialist-image-2.png" alt="image">
                            <span>Сервисный инженер</span>
                        </div>
                        <div class="we-working_specialist_item">
                            <img src="/images/specialist-image-3.png" alt="image">
                            <span>Инженер проекта</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="we-working_contacts">
        <a class="we-working_tel" href="tel:+7(904)981-01-11">+7 (904) 981-01-11</a>
        <ul class="we-working_messengers">
            <li><a href="">Написать в Telegram</a></li>
            <li><a href="">Написать в Whatsapp</a></li>
        </ul>
    </div>
</section>


<section class="core-container about">
    <span class="site-block-title" id="about">О компании</span>
    <div class="about-content">
        <div class="about_description">
            <h2 class="about-header site-header">О компании</h2>
            <span class="about_subtitle">
                Компания «Энерджи Медиа» основана в 2017 г. <br> Опыт специалистов компании с 2010 года
            </span>
            <div class="about_text">
                <p>
                    Команда компании – это специалисты в области IT технологий и аудиовизуального комплекса. Так же имеем компетенции в сфере систем безопасности и систем освещения.
                </p>
                 <p>
                    К разработке каждого решения компания приходит через проектирование. Штат проектировщиков компании позволяет в кратчайшие сроки создать технически грамотное решение, а инженерная команда, в связке с собственными монтажными бригадами, качественно реализует данные решения.
                 </p>
                <p>
                    У нашей компании высокий уровень взаимодействия с производителями и поставщиками, что показывает лучший порядок цен на оборудование, а наличие собственных монтажных бригад позволяет снизить стоимость монтажных работ.
                </p>
            </div>
        </div>
        <img class="about_img" src="/images/about-image-1.png" alt="image">
        <div class="about_achievement">
            <div class="about_achievement_item">
                <span>13 лет</span>
                <p>
                    опыта в реализации <br> мультимедиа проектов
                </p>
            </div>
            <div class="about_achievement_item">
                <span>500+</span>
                <p>
                    реализованных <br> проектов
                </p>
            </div>
            <div class="about_achievement_item">
                <span>12+</span>
                <p>
                    уникальных <br> сложных проектов
                </p>
            </div>
        </div>
    </div>
</section>


<section class="application-consultation">
    <section class="core-container application-consultation_container">
        <h2 class="application-consultation_header site-header">Заявка на консультацию</h2>
        <div class="application-consultation_content">
            <span class="application-consultation_subtitle">Наши специалисты проконсультируют вас по интересующему вопросу</span>
            <ul class="application-consultation_messengers">
                <li><a href="">Написать в Telegram</a></li>
                <li><a href="">Написать в Whatsapp</a></li>
            </ul>
            <form class="application-consultation_form" action="">
                <label class="application-consultation_label">Ваше Имя *<input type="text" placeholder="Имя"></label>
                <label class="application-consultation_label">Номер телефона *<input type="tel" placeholder="+7 (999) 999-99-99"></label>
                <button class="application-consultation_btn-submit btn-blue" type="submit">Оставить заявку</button>
            </form>
        </div>
    </section>
</section>


<section class="core-container contacts">
    <p class="site-block-title" id="contacts">Контакты</p>
    <div class="contacts_content">
        <div class="contacts_data-wrapper">
            <a class="contacts_tel" href="tel:88005511013">8 800 55 11 013</a>
            <div class="contacts_messengers-wrapper">
                <a class="contacts_messengers" href="">Написать в Telegram</a>
                <a class="contacts_messengers" href="">Написать в Whatsapp</a>
            </div>
            <a class="contacts_mail" href="mailto:info@energmedia.ru">info@energmedia.ru</a>
            <p class="contacts_address">
                <span>Юридический и фактический адрес</span>
                Екатеринбург, Малышева 51, <br> БЦ Высоцкий
            </p>
        </div>
        <div class="contacts_card">
            <img class="contacts_card_img-bg" src="/images/border-image-3.png" alt="icon">
            <img class="contacts_card_img-bg-mobile" src="/images/border-image-4.png" alt="icon">
            <ul class="contacts_card_items">
                <li><span>Наименование</span>ООО “ЭНЕРДЖИ МЕДИА”</li>
                <li><span>ОГРН</span>40690290969039305</li>
                <li><span>ИНН</span>6685141032</li>
                <li><span>КПП</span>668501001</li>
            </ul>
            <a class="contacts_card_btn-download btn-invisible" href="">Скачать карточку</a>
        </div>
    </div>
</section>


<?php require 'footer.php' ?>