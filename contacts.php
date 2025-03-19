<?php require 'head.php' ?>

<?php
require 'breadcrumb.php';
breadcrumb([['url' => '/contacts.php', 'name' => 'Контакты']]);
?>

<section class="core-container contacts page-contacts">
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