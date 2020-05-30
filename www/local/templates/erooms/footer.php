<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
?>


<footer>
	<div class="footer_top"><div class="wrapper">

			<div>
				<a href="/" class="logo"></a>
				<div class="column_title">НАВИГАЦИЯ</div>
				<div class="default_menu">
					

					<?$APPLICATION->IncludeComponent(
				        "bitrix:menu", 
				        "footer_menu", 
				        array(
				            "ALLOW_MULTI_SELECT" => "N",
				            "CHILD_MENU_TYPE" => "sub-menu",
				            "DELAY" => "N",
				            "MAX_LEVEL" => "1",
				            "MENU_CACHE_GET_VARS" => array(
				            ),
				            "MENU_CACHE_TIME" => "0",
				            "MENU_CACHE_TYPE" => "N",
				            "MENU_CACHE_USE_GROUPS" => "Y",
				            "ROOT_MENU_TYPE" => "footer",
				            "USE_EXT" => "N",
				            "COMPONENT_TEMPLATE" => "footer_menu"
				        ),
				        false
				    );?>
				</div>
			</div>
			<div>
				<a href="/catalog/" class="column_title">КАТАЛОГ</a>

				<div class="sections">
					<?$APPLICATION->IncludeComponent(
						"bitrix:catalog.section.list", 
						"outer_categories_list", 
						array(
							"ADD_SECTIONS_CHAIN" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "0",
							"CACHE_TYPE" => "N",
							"COUNT_ELEMENTS" => "Y",
							"FILTER_NAME" => "sectionsFilter",
							"IBLOCK_ID" => "2",
							"IBLOCK_TYPE" => "catalog",
							"SECTION_CODE" => "",
							"SECTION_FIELDS" => array(
								0 => "NAME",
								1 => "",
							),
							"SECTION_ID" => $_REQUEST["SECTION_ID"],
							"SECTION_URL" => "",
							"SECTION_USER_FIELDS" => array(
								0 => "",
								1 => "",
							),
							"SHOW_PARENT_NAME" => "Y",
							"TOP_DEPTH" => "1",
							"VIEW_MODE" => "LIST",
							"COMPONENT_TEMPLATE" => "outer_categories_list"
						),
						false
					);?>
				</div>

				<div class="pay">
					<a href="/pay-and-delivery/" class="column_title">СПОСОБЫ ОПЛАТЫ:</a>
					<a href="/pay-and-delivery/" class="brends"></a>
				</div>
			</div>
			<div class="third">
				<div class="column_title">КОНТАКТЫ</div>

				<div class="info">
					<div class="phones">
						<a href="tel:88009000000">8 800 900 00-00</a>
						<a href="tel:89455557310">8 945 555 73-10</a>
					</div>
					<div class="worktime">
						<p>без выходных</p>
						<p>с 9:00 до 20:00 по Мск</p>
					</div>
				</div>
				<div class="email">
					<a href="mailto:info@erooms.ru">info@erooms.ru</a>
					<div class="inst_icon"></div>
				</div>
				<div class="btn first">Заказать звонок</div>
				<div class="btn">Задать вопрос</div>
			</div>


		</div>

		<div class="footer_bottom"><div class="wrapper">
			<div>Сайт создан <a href="https://asmart-group.ru/" target="_blank">IT-company Asmart</a></div>
			<div>www.<a href="www.erooms.ru" target="_blank">erooms.ru</a></div>
			<div>
				<p>&copy; ООО &laquo;БЕНТОСИБИРЬ&raquo;</p>
				<p>Все авторские права защищены.</p>
			</div>
		</div></div>
	</div>

	<div class="under_blue_line"></div>
</footer>

<script src="/local/templates/erooms/dist/slick-1.8.1/slick/slick.min.js"></script>
<script src="/local/templates/erooms/js/app.js"></script>
</body>
</html>