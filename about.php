<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/about.php', 'name' => 'О компании']]);
?>

<section class="core-container about-page">
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
        <img class="about_img" src="/images/core-image-about-page.png" alt="image">
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