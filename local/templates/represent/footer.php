<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<footer>
    <div class="wrap">
        <div class="logo_menu">
            <a href="/">
                <img class="logo_footer" src="<?= SITE_TEMPLATE_PATH ?>/img/logo_footer.svg">
            </a>

            <div class="footer-menu">
               <?$APPLICATION->IncludeComponent("bitrix:menu", "menu_bottom", Array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                            "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                            "DELAY" => "N", // Откладывать выполнение шаблона меню
                            "MAX_LEVEL" => "1", // Уровень вложенности меню
                            "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                                0 => "",
                            ),
                            "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                            "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                            "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                            "ROOT_MENU_TYPE" => "top",  // Тип меню для первого уровня
                            "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                        false
                    );
                ?>
            </div>
        </div>

        <div class="phone_hourse">
        <?php $phone = $GLOBALS['contacts']['PHONE']['VALUE']; ?>
            <a class="phone" href="tel:<?= $phone; ?>">
                <?= $phone ?>
            </a>
            <p class="hourse">
                <?= $GLOBALS['contacts']['WORK_TIME']['VALUE']; ?>
            </p>
        </div>
    </div>
</footer>

<!-- Попап -->
<div style="display: none;" id="popup-order">
    <form id="popup_form">
        <h2 class="title">
            Оставить заявку
        </h2>
        <p class="sub_title">
            Заполните простую заявку на сайте и наш менеджер свяжется с вами ближайшее время
        </p>

        <input placeholder="Ваше имя" type="text" name="name">
        <input placeholder="Телефон*" type="text" name="phone" class="phone all-input">
        <input type="hidden" id="popup_delimeter" name="delimiter">
        <input type="hidden" id="service_name" name="service">

        <button class="popup_butt" id="send_order_popup">
            Оставить заявку
        </button>

        <div class="polite">
            Нажимая кнопку “отправить” вы соглашаетесь
            с условиями <a href="#">Политики Конфиденциальности</a>
        </div>      
    </form>

    <div class="success hide">
        <h2 class="title">
            Спасибо!
        </h2>
        <p class="sub_title">
            Ваша заявка принята в обработку
        </p>
        <button class="popup_butt" id="succes_popup">
            Готово
        </button>
    </div>
</div>
<!-- Попап -->

<script type="text/javascript" src="<?= SITE_TEMPLATE_PATH.'/js/main.js' ?>"></script>

<?php
    $page = $APPLICATION->GetCurPage();
    $check_main_page = ($page == '/'); 
?>

<?php if($check_main_page): ?>
<script type="text/javascript" src="<?= SITE_TEMPLATE_PATH.'/js/main_page.js' ?>"></script>
<?php endif; ?>

</body>
</html> 