<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/projects.php', 'name' => 'Проекты'],['url' => '/project', 'name' => 'Креативный кластер «Домна»']]);
?>

<?php
$images = [
    '/images/project-img-4-1.png',
    '/images/project-img-4-2.png',
    '/images/project-img-4-3.png',
    '/images/project-img-4-4.png',
    '/images/project-img-4-5.png',
]
?>

<section class="core-container project-page first-block">
    <h2 class="site-header">Креативный кластер «Домна»</h2>
    <div class="popup-products_slider-section">
        <div class="popup-products_swiper" data-project-swiper>
            <div class="swiper-wrapper">
                <?php foreach ($images as $key => $image) { ?>
                    <div class="swiper-slide">
                        <div class="swiper-slide-item">
                            <a href="<?= $image ?>" data-fancybox="gallery" data-caption="image">
                                <img src="<?= $image ?>" alt="image">
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <div class="swiper-pagination" data-project-swiper-pagination></div>
            <div class="slider-section_btn-prev btn-slider-white" data-project-swiper-button-prev></div>
            <div class="slider-section_btn-next btn-slider-white" data-project-swiper-button-next></div>
        </div>
    </div>
</section>

<section class="core-container page-layout project-page" data-layout>
    <div class="page-layout_aside">
        <ul class="aside_menu" data-scroll-element>
            <li><a href="#project">О проекте</a></li>
            <li><a href="#aim">Цель</a></li>
            <li><a href="#task">Задачи</a></li>
        </ul>
    </div>
    <div class="page-layout_container" data-layout-content>
        <span class="site-header" id="project">О проекте</span>
        <div class="project-page_tags">
            <a class="project-page_tag" href="">Спортивные объекты</a>
            <a class="project-page_tag" href="">Системы фонового озвучивания</a>
            <a class="project-page_tag" href="">Механика для сцены</a>
        </div>
        <div class="project-page_description">
            Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
        </div>
        <div class="project-page_text-content">
            <div class="project-page_text_item">
                <span class="project-page_text_item_title" id="aim">Цель</span>
                Креативный кластер "Домна"
            </div>
            <div class="project-page_text_item">
                <span class="project-page_text_item_title">Заказчик</span>
                Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
                <br>
                <br>
                Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
            </div>
            <div class="project-page_text_item">
                <span class="project-page_text_item_title" id="task">Задачи</span>
                Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
                <br>
                <br>
                Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
                <br>
                <br>
                Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.
            </div>
        </div>
    </div>
</section>


<section class="core-container page-layout tags-block">
    <div class="page-layout_aside">
        <span class="site-block-title">Услуги</span>
    </div>
    <div class="page-layout_container">
        <span class="site-header">Услуги в проекте</span>
        <div class="project-page_tags">
            <a class="project-page_tag" href="">Спортивные объекты</a>
            <a class="project-page_tag" href="">Системы фонового озвучивания</a>
            <a class="project-page_tag" href="">Механика для сцены</a>
            <a class="project-page_tag" href="">Спортивные объекты</a>
            <a class="project-page_tag" href="">Системы фонового озвучивания</a>
            <a class="project-page_tag" href="">Механика для сцены</a>
            <a class="project-page_tag" href="">Спортивные объекты</a>
            <a class="project-page_tag" href="">Системы фонового озвучивания</a>
            <a class="project-page_tag" href="">Механика для сцены</a>
        </div>
    </div>
</section>


<?php
$response_data_reviews = [
    [
        'text' => '«Самая яркая цитата из отзыва»',
        'name' => 'ИП Иванов И. И.',
        'specialist' => 'Сфера деятельности',
        'image' => '/images/review-img-1.png',
    ],
    [
        'text' => '«Самая яркая цитата из отзыва»',
        'name' => 'ИП Иванов И. И.',
        'specialist' => 'Сфера деятельности',
        'image' => '/images/review-img-1.png',
    ],
    [
        'text' => '«Самая яркая цитата из отзыва»',
        'name' => 'ИП Иванов И. И.',
        'specialist' => 'Сфера деятельности',
        'image' => '/images/review-img-1.png',
    ],
]
?>

<section class="core-container page-layout block-review" data-wrapper-for-type-one-swiper>
    <div class="page-layout_aside">
        <span class="site-block-title">Рекомендации и отзывы</span>
        <div class="slider-section_btn-wrapper">
            <div class="slider-section_btn-prev btn-slider-white" data-type-one-swiper-button-prev></div>
            <div class="slider-section_btn-next btn-slider-white" data-type-one-swiper-button-next></div>
        </div>
    </div>
    <div class="page-layout_container">
        <span class="site-header">Рекомендации и отзывы</span>
        <div class="slider-section">
            <div class="slider-section_swiper" data-type-one-swiper>
                <div class="swiper-wrapper">
                    <?php foreach ($response_data_reviews as $item) { ?>
                        <div class="swiper-slide">
                            <a class="reviews_item" href="<?= $item['image'] ?>" target="_blank">
                                <div class="review_item_head">
                                    <img class="review_item_img" src="<?= $item['image'] ?>" alt="image">
                                    <span class="review_item_text"><?= $item['text'] ?></span>
                                </div>
                                <div class="review_item_footer">
                                    <span class="review_item_name"><?= $item['name'] ?></span>
                                    <span class="review_item_specialist"><?= $item['specialist'] ?></span>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-pagination" data-type-one-swipe-pagination></div>
        </div>
    </div>
</section>


<?php
$response_data_projects = [
    [
        'title' => 'Академия единоборств РМК',
        'tags' => ['Спортивные объекты','Системы фонового озвучивания','Механика для сцены',],
        'quantity' => 2,
        'images' => '/images/project-img-1-1.png',
    ],
    [
        'title' => 'Суворовское училище концертный зал',
        'tags' => ['Образовательные учреждения ','Механика для сцены ','Акустическая подготовка помещений ',],
        'quantity' => 2,
        'images' => '/images/project-img-2-1.png',
    ],
    [
        'title' => 'ШТАБ-квартира РМК',
        'tags' => ['Конференц-залы ','Выступления ','Презентации ',],
        'quantity' => 5,
        'images' => '/images/project-img-3-1.png',
    ],
    [
        'title' => 'Креативный кластер «Домна»',
        'tags' => ['Проекторы','конференц-залы','Конференции',],
        'quantity' => '',
        'images' => '/images/project-img-4-1.png',
    ],
]
?>

<section class="core-container page-layout block-projects" data-wrapper-for-type-one-swiper>
    <div class="page-layout_aside">
        <span class="site-block-title">Другие проекты</span>
        <div class="slider-section_btn-wrapper">
            <div class="slider-section_btn-prev btn-slider-white" data-type-one-swiper-button-prev></div>
            <div class="slider-section_btn-next btn-slider-white" data-type-one-swiper-button-next></div>
        </div>
    </div>
    <div class="page-layout_container">
        <span class="site-header">Выполненные проекты</span>
        <div class="slider-section">
            <div class="slider-section_swiper" data-type-one-swiper>
                <div class="swiper-wrapper">
                    <?php foreach ($response_data_projects as $item) { ?>
                        <div class="swiper-slide">
                            <div class="projects_item">
                                <div class="projects_img-wrapper">
                                    <img src="<?= $item['images'] ?>" alt="image">
                                    <?php if ($item['quantity']) { ?>
                                        <span><?= $item['quantity'] ?> проекта</span>
                                    <?php } ?>
                                </div>
                                <p class="projects_title"><?= $item['title'] ?></p>
                                <div class="projects_tags">
                                    <?php foreach ($item['tags'] as $item_tag) { ?>
                                        <span><?= $item_tag ?></span>
                                    <?php } ?>
                                </div>
                                <a class="projects_btn-detail btn-grey" href="/project.php">Подробнее</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-pagination" data-type-one-swipe-pagination></div>
        </div>
    </div>
</section>


<section class="core-container">
    <div class="min-consultation">
        <div class="min-consultation_person">
            <img class="min-consultation_person_img" src="images/consultation-person-img.png" alt="image">
            <span class="min-consultation_person_name">Нужна консультация?</span>
        </div>
        <button class="application-consultation_btn-submit btn-blue" type="submit" data-order-popup="order-a-call">Оставить заявку</button>
    </div>
</section>



<section class="core-container contacts">
    <p class="site-block-title" id="contacts">Контакты</p>
    <div class="contacts_content">
        <div class="contacts_data-wrapper">
            <a class="contacts_tel" href="tel:88005511013">8 800 55 11 013</a>
            <div class="contacts_messengers-wrapper">
                <a class="contacts_messengers" href="https://t.me/+79321178117">Написать в Telegram</a>
                <a class="contacts_messengers" href="https://wa.me/+79321178117">Написать в Whatsapp</a>
            </div>
            <a class="contacts_mail" href="mailto:info@energ-m.ru">info@energ-m.ru</a>
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


<section class="core-container faq">
    <span class="site-block-title" id="faq">Вопрос ответ</span>
    <div class="faq_content">
        <h2 class="feq_header site-header">FAQ</h2>
        <div class="collapse_items-wrapper" data-collapse-items-wrapper>
            <?php foreach ([1, 2, 3, 4, 5] as $item) { ?>
                <div class="collapse_item" data-collapse-item>
                    <div class="collapse_item_question" data-collapse-item-question>
                        Вопрос клиента, вопрос клиента, вопрос клиента?
                    </div>
                    <div class="collapse_item_answer" data-collapse-item-answer>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis consectetur dolore eveniet ex
                        incidunt maiores molestias omnis possimus quaerat qui!
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php require 'footer.php' ?>