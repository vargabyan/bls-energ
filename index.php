<?php require 'head.php' ?>


<section class="core-container our-works">
    <h1 class="our-works_header site-header">проектирование <br> Оборудование <span>&bull;</span> монтаж </h1>
    <div class="our-works_item-wrapper">
        <div class="our-works_item">
            <span>Актовых залов</span>
            <img src="/images/project-img-7-1.png" alt="image">
        </div>
        <div class="our-works_item">
            <span>Конференц-залов</span>
            <img src="/images/our-works-image-2.png" alt="image">
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
    [
        'title' => 'ЛЕкционный зал ГБОУ «ЧОМЛИ»',
        'tags' => ['Образовательные учреждения','проекторы','звуковое оборудование',],
        'quantity' => '',
        'images' => '/images/project-img-5-1.png',
    ],
    [
        'title' => 'Суворовское училище: Студия видео- и аудиозаписи',
        'tags' => ['Образовательные учреждения ','звуковое оборудование ','Акустическая подготовка помещений ',],
        'quantity' => 2,
        'images' => '/images/project-img-6-1.png',
    ],
    [
        'title' => 'Серов: Актовый зал школы №21',
        'tags' => ['акустические системы','Механика для сцены','СветовЫЕ приборы ',],
        'quantity' => '',
        'images' => '/images/project-img-7-1.png',
    ],
    [
        'title' => 'Офис компании «Золотое Яблоко»',
        'tags' => ['Переговорные комнаты','Запись и трансляция','Видеоконференцсвязь',],
        'quantity' => '',
        'images' => '/images/project-img-8-1.png',
    ],
]
?>

<section class="core-container projects">
        <span class="site-block-title">Кейсы</span>
        <div class="projects_header-wrapper">
            <h2 class="site-header" id="project">проекты</h2>
            <p class="projects_description">
                Мы спроектировали и установили передовое мультимедийное оборудование для ведущих компаний в сфере развлечений, банковскоми финансовом секторе, а также в производственной сфере.
            </p>
            <div class="projects_items-wrapper">
                <?php foreach ($response_data_projects as $item) { ?>
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
                <?php } ?>
            </div>
            <a class="project_btn-show-more" href="/projects.php">Смотреть все проекты</a>
        </div>
</section>


<?php
$Response_data_services = [
    [
        'title' => 'Оснащение конференц-зала ',
        'image' => '/images/services-image-1.png',
        'text' => 'Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.',
    ],
    [
        'title' => 'Оснащение конференц-зала ',
        'image' => '/images/services-image-1.png',
        'text' => 'Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.',
    ],
    [
        'title' => 'Оснащение конференц-зала ',
        'image' => '/images/services-image-1.png',
        'text' => 'Обеспечение объекта качественным звуком с организацией 5 зон озвучивания, возможность передачи объявлений с ресепшен. Организации двух переговорных комнат с возможностью подключения к удаленным клиентам и проведения видеоконференций.',
    ],
]
?>

<section class="services-and-product-wrapper">
    <div class="core-container services">
        <div class="services-and-product_head">
            <span class="site-block-title" id="services">Услуги</span>
            <div class="services-and-product_header-wrapper">
                <h2 class="services-and-product_header site-header">услуги</h2>
                <span class="animation_dot"></span>
                <div class="slider-section_btn-wrapper">
                    <div class="slider-section_btn-prev btn-slider-dark" data-services-swiper-button-prev></div>
                    <div class="slider-section_btn-next btn-slider-dark" data-services-swiper-button-next></div>
                </div>
            </div>
        </div>
        <div class="slider-section">
            <div class="slider-section_swiper" data-services-swiper>
                <div class="swiper-wrapper">
                    <?php foreach ($Response_data_services as $item) { ?>
                        <div class="swiper-slide">
                            <div class="services_item" >
                                <div class="services_item_content">
                                    <span class="services_item_title"><?= $item['title'] ?></span>
                                    <p class="services_item_description"><?= $item['text'] ?></p>
                                    <a class="services_item_btn" href="/service.php">Подробнее</a>
                                </div>
                                <div class="services_item_img-wrapper">
                                    <img src="<?= $item['image'] ?>" alt="image">
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="swiper-pagination" data-services-swipe-pagination></div>
        </div>
        <a class="services-and-product-wrapper_btn-show-more" href="/services.php">Смотреть все Услуги</a>
    </div>


    <?php
    $response_data_we_have = [
        [
            'title' => 'медиафасады',
            'image' => '/images/we-have-image-1.png',
            'text' => [
            'Чтобы приобрести медиафасад не стоит гнаться за первой моделью по выгодной цене. Наша компания предлагает медиафасады в Екатеринбурге, работоспособность которых проверена временем и различными погодными условиями',
            'Так, для гарантии сухости электроники внутри конструкций проверяется степень герметичности каждого элемента, ведь медиафасады предназначены для работы в уличных условиях, где может быть и мороз, и проливной дождь. Для надежной контактности светодиодов, используется высококачественная проволока припоя. Также инженерами нашей компании разработаны специализированные разъемы IP65, которые обеспечивают плотную взаимосвязь между всеми составными элементами медиафасада.',
            ],
            'tags' => [
                '/images/official-product-distributors-2.png',
                '/images/official-product-distributors-6.png',
                '/images/official-product-distributors-7.png',
            ]
        ],
        [
            'title' => 'проекторы',
            'image' => '/images/we-have-image-2.png',
            'text' => [
            'Компания «ENERG MEDIA» предлагает качественные мультимедийные проекторы для проведения на современном уровне презентаций, обучающих курсов, уроков, лекций, рекламных компаний.',
            'Применение современного проекционного оборудования позволяет представить информацию в форме, удобной для ее одновременного показа большому числу участников мероприятия. В отличие от старой проекционной аппаратуры, современные проекторы способны представить на большом экране практически любую визуальную информацию: рисунки, текст, видеофильмы, презентации, слайды, компьютерные файлы.',
            ],
            'tags' => [
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
        ],
        [
            'title' => 'звуковое оборудование',
            'image' => '/images/we-have-image-3.png',
            'text' => [
            'Инсталляция звукового оборудования, проводимая нашими мастерами, обладает следующими преимуществами: раскрывает характеристики, заложенные производителем; продлевает срок эксплуатации техники; сохраняет отделку интерьера; упрощает обслуживание аудиосистемы в будущем; все запланированные работы выполняются в оговоренные сроки с гарантией качества.',
            'После завершения работы и передачи объекта, наш персонал ознакомит вас с правилами эксплуатации акустической системы и выдаст подробные инструкции.',
            ],
            'tags' => [
                '/images/official-product-distributors-1.png',
                '/images/official-product-distributors-2.png',
                '/images/official-product-distributors-8.png',
                '/images/official-product-distributors-3.png',
                '/images/official-product-distributors-4.png',
                '/images/official-product-distributors-5.png',
                '/images/official-product-distributors-6.png',
                '/images/official-product-distributors-7.png',
            ]
        ],
        [
            'title' => 'мультимедиа оборудование',
            'image' => '/images/we-have-image-4.png',
            'text' => [
            'Специалисты компании «ENERG MEDIA» более 13 лет выполняют профессиональный монтаж и пусконаладочные работы сетевого и мультимедийного оборудования. Весь цикл оснащения, от проектирования до внедрения и обслуживания, осуществляется под ключ силами штатных специалистов.',
            'Оснащаем профессиональным мультимедийным оборудованием объекты любых типов: кинозалы, концертные площадки, конференц-залы и переговорные комнаты, учебные учреждения, предприятия системы общепита (кафе, рестораны), магазины, торговые центры, фитнес-залы.',
            ],
            'tags' => [
                '/images/official-product-distributors-1.png',
                '/images/official-product-distributors-3.png',
                '/images/official-product-distributors-4.png',
                '/images/official-product-distributors-6.png',
                '/images/official-product-distributors-7.png',
                '/images/official-product-distributors-8.png',
            ]
        ],
        [
            'title' => 'запись и трансляция',
            'image' => '/images/we-have-image-5.png',
            'text' => [
            'Организация видеотрансляций и веб-конференций - удобный способ донести информацию до широкой аудитории и альтернатива мероприятиям, которые невозможно провести "вживую".',
            'Мы предлагаем высококачественное оборудование от надежных производителей и грамотную консультацию опытных специалистов. У нас низкая цена настройки видеонаблюдения в сочетании с высоким качеством работы.',
            ],
            'tags' => [
                '/images/official-product-distributors-1.png',
                '/images/official-product-distributors-2.png',
                '/images/official-product-distributors-3.png',
                '/images/official-product-distributors-5.png',
                '/images/official-product-distributors-6.png',
                '/images/official-product-distributors-9.png',
            ]
        ],
        [
            'title' => 'интерактивные панели',
            'image' => '/images/we-have-image-6.png',
            'text' => [
            'Интерактивная панель - сенсорный ЖК-экран, похожий на обычный телевизор, применяется в школах, детских садах, библиотеках и других образовательных учреждениях для передачи визуальной и звуковой информации. С ее помощью проводятся уроки, конференции, семинары, собрания и другие мероприятия. 
<br> Компания «ENERG MEDIA» поставляет интерактивные панели  разнообразные модели под любые потребности. Мы гарантируем высокое качество товаров и оперативную доставку по России.',
            ],
            'tags' => [
                '/images/official-product-distributors-1.png',
                '/images/official-product-distributors-4.png',
                '/images/official-product-distributors-5.png',
                '/images/official-product-distributors-6.png',
                '/images/official-product-distributors-9.png',
            ]
        ],
        [
            'title' => 'светодиодные экраны',
            'image' => '/images/we-have-image-7.png',
            'text' => [
            'Компания "ENERG MEDIA" предоставляет услуги по поставке, установке и подключению светодиодных конструкций любой сложности. В нашей команде трудятся специалисты с высоким уровнем квалификации.',
            'Весь процесс монтажа светодиодных экранов разделен на несколько этапов: подготовка, установка, подключение и настройка конструкции, а также пуско-наладочные работы.',
            ],
            'tags' => [
                '/images/official-product-distributors-2.png',
                '/images/official-product-distributors-3.png',
                '/images/official-product-distributors-4.png',
            ]
        ],
        [
            'title' => 'digital singage',
            'image' => '/images/we-have-image-8.png',
            'text' => [
            'Digital Signage – не просто технология, это мощный инструмент для роста и развития вашего бизнеса. Компания «ENERG MEDIA» предлагает полный спектр услуг по оснащению, монтажу и техническому обслуживанию систем Digital Signage.',
            'Наша команда профессионалов поможет вам выбрать оптимальное решение, соответствующее вашим бизнес-потребностям и бюджету. Выбирайте профессионалов, выбирайте «ENERG MEDIA» для реализации вашего проекта в области Digital Signage!',
            ],
            'tags' => [
                '/images/official-product-distributors-1.png',
                '/images/official-product-distributors-2.png',
                '/images/official-product-distributors-3.png',
                '/images/official-product-distributors-4.png',
                '/images/official-product-distributors-5.png',
            ]
        ],
    ];
    ?>

    <div class="core-container we-have">
        <div class="services-and-product_head">
            <span class="site-block-title" id="we-working">Проекты</span>
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


<?php foreach ($response_data_we_have as $key => $item) { ?>
<section class="popup-wrapper" data-popup-wrapper data-popup-wrapper-we-have="<?= $key ?>">
    <div class="popup-container popup-we-have" data-popup-container>
        <button type="button" class="popup_btn-close" data-popup-btn-close>Закрыть</button>
        <div class="popup-we-have_img-wrapper">
            <img src="<?= $item['image'] ?>" alt="image">
        </div>
        <div class="popup-we-have_content-wrapper">
            <span class="popup-we-have_header"><?= $item['title'] ?></span>
            <?php foreach ($item['text'] as $item_text) { ?>
                <p><?= $item_text ?></p>
            <?php } ?>
        </div>
        <div class="popup-we-have_footer">
            <?php foreach ($item['tags'] as $item_tag) { ?>
                <img src="<?= $item_tag ?>" alt="img">
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
    <span class="site-block-title">Продукция</span>
    <div class="official-product-distributors_content">
        <h2 class="official-product-distributors_header site-header">Официальные представители продукции</h2>
        <div class="official-product-distributors_items">
            <?php foreach ($response_data_official_product_distributors as $key => $item) { ?>
                <div class="official-product-distributors_item">
                    <span>0<?= $key ?></span>
                    <img class="official-product-distributors_img" src="<?= $item ?>" alt="image">
                </div>
            <?php } ?>
        </div>
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
        <a class="we-working_tel" href="tel:+79049810111">8 800 55 11 013</a>
        <ul class="we-working_messengers">
            <li><a href="https://t.me/+79321178117">Написать в Telegram</a></li>
            <li><a href="https://wa.me/+79321178117">Написать в Whatsapp</a></li>
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
                <span>с 2017</span>
                <p>
                    года на рынке
                </p>
            </div>
            <div class="about_achievement_item">
                <span>>100</span>
                <p>
                    реализованных <br> проектов
                </p>
            </div>
            <div class="about_achievement_item">
                <span>>5</span>
                <p>
                    уникальных <br> сложных проектов
                </p>
            </div>
        </div>
    </div>
</section>


<section class="core-container application-consultation">
    <div class="application-consultation_container">
        <div class="application-consultation_header-wrapper">
            <h2 class="application-consultation_header site-header">Заявка на консультацию</h2>
            <span class="application-consultation_subtitle">Наши специалисты проконсультируют вас <br> по интересующему вопросу</span>
        </div>
        <ul class="application-consultation_messengers">
            <li><a href="https://t.me/+79321178117">Написать в Telegram</a></li>
            <li><a href="https://wa.me/+79321178117">Написать в Whatsapp</a></li>
        </ul>
        <form class="application-consultation_form" action="">
            <label class="application-consultation_label">Ваше Имя *<input type="text" placeholder="Имя"></label>
            <label class="application-consultation_label">Номер телефона *<input type="tel" placeholder="+7 (999) 999-99-99"></label>
            <button class="application-consultation_btn-submit btn-blue" type="submit">Оставить заявку</button>
        </form>
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