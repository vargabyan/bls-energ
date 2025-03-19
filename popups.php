<section class="popup-wrapper" data-popup-wrapper="order-a-call">
    <form action="" class="popup-container" data-popup-container>
        <div class="popup_head">
            <button type="button" class="popup_btn-close" data-popup-btn-close>Закрыть</button>
            <h2 class="popup_header">
                Обратный звонок
                <span>Пожалуйста, заполните поля</span>
            </h2>
            <div class="popup_label-wrapper">
                <label class="popup_label">
                    Ваше Имя *
                    <input type="text" placeholder="Имя">
                </label>
                <label class="popup_label">
                    Номер телефона *
                    <input type="tel" placeholder="Телефон" pattern="[0-9]{12}">
                </label>
            </div>
        </div>
        <button class="popup_btn-submit" data-popup-btn-submit>Заказать звонок</button>
    </form>
    <div class="success-container" data-success-container>
        <h2 class="popup_header">
            Сообщение удачной <br>
            отправки формы
            <span>Мы свяжемся с вами через сколько-то минут</span>
        </h2>
        <button type="button" class="popup_btn-close" data-popup-btn-close>Закрыть</button>
    </div>
</section>


<section class="popup-wrapper" data-popup-wrapper="order-leave-a-request">
    <form action="" class="popup-container" data-popup-container>
        <div class="popup_head">
            <button type="button" class="popup_btn-close" data-popup-btn-close>Закрыть</button>
            <h2 class="popup_header">
                Заявка
                <span>Пожалуйста, заполните поля</span>
            </h2>
            <div class="popup_label-wrapper">
                <label class="popup_label">
                    Ваше Имя *
                    <input type="text" placeholder="Имя">
                </label>
                <label class="popup_label">
                    Номер телефона *
                    <input type="tel" placeholder="Телефон" pattern="[0-9]{12}">
                </label>
                <label class="popup_label">
                    Сообщение (не обязательно)
                    <textarea name="" id="" cols="30" rows="10" placeholder="Кратко опишите ваш проект"></textarea>
                </label>
                <label class="popup_label popup_file-upload_label">
                    Прикрепить файл
                    <input type="file">
                    <span></span>
                </label>
            </div>
        </div>
        <button class="popup_btn-submit" data-popup-btn-submit>Заказать звонок</button>
    </form>
    <div class="success-container" data-success-container>
        <h2 class="popup_header">
            Сообщение удачной <br>
            отправки формы
            <span>Мы свяжемся с вами через сколько-то минут</span>
        </h2>
        <button type="button" class="popup_btn-close" data-popup-btn-close>Закрыть</button>
    </div>
</section>


<section class="popup-wrapper" data-popup-wrapper="application-for-selection-of-equipment">
    <form action="" class="popup-container" data-popup-container>
        <div class="popup_head">
            <button type="button" class="popup_btn-close" data-popup-btn-close>Закрыть</button>
            <h2 class="popup_header">
                Заявка на подбор оборудования
                <span>Пожалуйста, заполните поля</span>
            </h2>
            <div class="popup_label-wrapper">
                <label class="popup_label">
                    Ваше Имя *
                    <input type="text" placeholder="Имя">
                </label>
                <label class="popup_label">
                    Номер телефона *
                    <input type="tel" placeholder="Телефон" pattern="[0-9]{12}">
                </label>
            </div>
        </div>
        <button class="popup_btn-submit" data-popup-btn-submit>Заказать звонок</button>
    </form>
    <div class="success-container" data-success-container>
        <h2 class="popup_header">
            Сообщение удачной <br>
            отправки формы
            <span>Мы свяжемся с вами через сколько-то минут</span>
        </h2>
        <button type="button" class="popup_btn-close" data-popup-btn-close>Закрыть</button>
    </div>
</section>


<section class="popup-video-wrapper active" data-popup-video-wrapper>
    <button class="popup-video_btn-close" data-popup-video-btn-close></button>
    <div class="popup-video" data-popup-video>
        <span class="popup-video_btn-fullscreen active" data-vide-btn-fullscreen></span>
        <div id="player" class="video"></div>
    </div>
</section>


<?php
$response_data_cities = [
    'Екатеринбург',
    'Нижний Тагил',
    'Первоуральск',
    'Полевской',
    'Серов',
    'Сысерть',
    'Тобольск',
    'Тюмень',
    'Екатеринбург',
    'Нижний Тагил',
    'Первоуральск',
    'Полевской',
    'Серов',
    'Сысерть',
    'Тобольск',
    'Тюмень',
    'Серов',
    'Сысерть',
    'Тобольск',
    'Тюмень',
]
?>


<section class="popup-wrapper" data-popup-wrapper data-popup-select-city>
    <div class="popup-container popup-select-city active" data-popup-container>
        <button class="popup_btn-close" data-popup-btn-close></button>
        <h2 class="popup_header">
            Найдите свой город:
        </h2>
        <label class="popup_label-input-search">
            <input type="text" placeholder="поиск" data-popup-select-search-input>
        </label>
        <form class="popup_form-select" action="">
            <?php foreach ($response_data_cities as $item) { ?>
                <label class="popup_form-select_label" data-popup-select-input>
                    <?= $item ?>
                    <input type="radio" value="<?= $item ?>" name="city">
                </label>
            <?php } ?>
            <span class="popup_search_not-found" data-popup-search-not-found>не найдено</span>
        </form>
    </div>
</section>


<section class="popup-wrapper active" data-popup-wrapper data-ask-city>
    <div class="popup-container popup-ask-city active" data-popup-container>
        <button class="popup_btn-close" data-popup-btn-close></button>
        <div class="popup_header">
            Ваш город:
            <span>Екатеринбург?</span>
        </div>
        <div class="popup-ask-city_btn-wrapper">
            <button class="popup-ask-city_btn btn-white" data-ask-city-btn-no>Нет</button>
            <button class="popup-ask-city_btn btn-dark" data-ask-city-btn-yes>Да</button>
        </div>
    </div>
</section>
