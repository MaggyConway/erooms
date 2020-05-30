<div class="top-header">
    <div class="container">
<!--        <img src="/local/templates/erooms/imgs/top-logo.png" alt="">-->
        <div class="row justify-content-between align-items-center no-gutters">
            <div class="col-5">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "top_menu", Array(
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                    "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                ); ?>
            </div>
            <div class="col-5">
                <div class="top_search">
                    <? $APPLICATION->IncludeComponent("bitrix:search.form", "top_search", Array(
                        "PAGE" => "#SITE_DIR#search/index.php",    // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                        "USE_SUGGEST" => "N",    // Показывать подсказку с поисковыми фразами
                    ),
                        false
                    ); ?>
                </div>
            </div>
            <div class="col">
                <div class="top_auth">
                    <a class="top_link" href="/auth">Вход</a><span> / </span><a class="top_link" href="/registratsiya">Регистрация</a>
                </div>
            </div>
        </div>
    </div>
</div>