<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
<!DOCTYPE html>
<html>
	<head>
        <script src="/local/templates/erooms/js/jquery-3.4.1.min.js"></script>
        <?$APPLICATION->ShowHead();?>

		<title><?$APPLICATION->ShowTitle(false)?></title>
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="/local/templates/erooms/dist/slick-1.8.1/slick/slick-theme.css">
        <link rel="stylesheet" href="/local/templates/erooms/dist/slick-1.8.1/slick/slick.css">
        
        <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . "/css/app.css"); ?>

    </head>
	<body>
		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

    <header>
        <div class="header__top">
            <div class="wrapper">
                <ul class="header__top__categories-links">
                    <li><a href="/about/">О компании</a></li>
                    <li><a href="/pay-and-delivery/">Оплата и доставка</a></li>
                    <li><a href="/warranty-and-return/">Гарантия и возврат</a></li>
                </ul>
                
                <?$APPLICATION->IncludeComponent(
                    "bitrix:search.title",
                    "main",
                    Array(
                        "CATEGORY_0" => array("iblock_catalog","iblock_content"),
                        "CATEGORY_0_TITLE" => "",
                        "CATEGORY_0_iblock_catalog" => array("2"),
                        "CATEGORY_0_iblock_content" => array("1"),
                        "CHECK_DATES" => "N",
                        "CONTAINER_ID" => "title-search",
                        "CONVERT_CURRENCY" => "N",
                        "INPUT_ID" => "title-search-input",
                        "NUM_CATEGORIES" => "1",
                        "ORDER" => "rank",
                        "PAGE" => "#SITE_DIR#search/index.php",
                        "PREVIEW_HEIGHT" => "75",
                        "PREVIEW_TRUNCATE_LEN" => "",
                        "PREVIEW_WIDTH" => "75",
                        "PRICE_CODE" => array("BASE"),
                        "PRICE_VAT_INCLUDE" => "N",
                        "SHOW_INPUT" => "Y",
                        "SHOW_OTHERS" => "N",
                        "SHOW_PREVIEW" => "Y",
                        "TEMPLATE_THEME" => "blue",
                        "TOP_COUNT" => "5",
                        "USE_LANGUAGE_GUESS" => "Y"
                    )
                );?>

                <ul class="header__top__auth-links">
                    <li><a href="">Вход</a></li>
                    <span>/</span>
                    <li><a href="">Регистрация</a></li>
                </ul>
            </div>
        </div>
        <div class="header__content">
            <div class="wrapper">
                <a href="/" class="header__content__logo"></a>
                <div class="header__content__contact-info">
                    <a href="tel:88009000000" class="phone">8 800 900 00-00</a>
                    <a href="mailto:info@eroomsk.ru" class="email">info@eroomsk.ru</a>
                    



                    <?$APPLICATION->IncludeComponent(
                        "bitrix:sale.basket.basket.line",
                        "main",
                        Array(
                            "HIDE_ON_BASKET_PAGES" => "Y",
                            "PATH_TO_AUTHORIZE" => SITE_DIR."/login/",
                            "PATH_TO_BASKET" => SITE_DIR."/cart/",
                            "PATH_TO_ORDER" => "",
                            "PATH_TO_PERSONAL" => SITE_DIR."/personal/",
                            "PATH_TO_PROFILE" => SITE_DIR."/personal/",
                            "PATH_TO_REGISTER" => SITE_DIR."/registr/",
                            "POSITION_FIXED" => "N",
                            "SHOW_AUTHOR" => "N",
                            "SHOW_DELAY" => "N",
                            "SHOW_EMPTY_VALUES" => "Y",
                            "SHOW_IMAGE" => "Y",
                            "SHOW_NOTAVAIL" => "N",
                            "SHOW_NUM_PRODUCTS" => "Y",
                            "SHOW_PERSONAL_LINK" => "Y",
                            "SHOW_PRICE" => "Y",
                            "SHOW_PRODUCTS" => "Y",
                            "SHOW_REGISTRATION" => "N",
                            "SHOW_SUMMARY" => "Y",
                            "SHOW_TOTAL_PRICE" => "Y"
                        )
                    );?>
                </div>
            </div>
        </div>
        <div class="header__menu">
            <div class="wrapper">
                <?
                // global $sectionsFilter;
                // $sectionsFilter = array("IBLOCK_ID" => 2, "UF_LOOK" => "Y");

                $APPLICATION->IncludeComponent(
                    "bitrix:catalog.section.list",
                    "header_list",
                    Array(
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "CACHE_FILTER" => "N",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "0",
                        "CACHE_TYPE" => "N",
                        "COUNT_ELEMENTS" => "N",
                        "FILTER_NAME" => "",
                        "IBLOCK_ID" => "2",
                        "IBLOCK_TYPE" => "catalog",
                        "SECTION_CODE" => "",
                        "SECTION_FIELDS" => array("", ""),
                        "SECTION_ID" => $_REQUEST["SECTION_ID"],
                        "SECTION_URL" => "",
                        "SECTION_USER_FIELDS" => array("UF_HEADER_LOOK", ""),
                        "SHOW_PARENT_NAME" => "Y",
                        "TOP_DEPTH" => "1",
                        "VIEW_MODE" => "LIST"
                    )
                );?>
            </div>
        </div>


        <div class="wrapper">
            <?$APPLICATION->IncludeComponent(
                "bitrix:breadcrumb",
                "main",
                Array(
                    "PATH" => "",
                    "SITE_ID" => "s1",
                    "START_FROM" => "0"
                )
            );?>
        </div>
    </header>
	
						