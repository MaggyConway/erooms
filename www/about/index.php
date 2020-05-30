<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О компании");
?><div class="wrapper">
 <section class="about">
	<div class="about__image">
		<div class="banner">
		</div>
		<div class="background">
		</div>
	</div>
	<h1>EROOMS</h1>
	 <? $APPLICATION->IncludeFile(
            SITE_DIR . "/include/about_text.php",
            Array(),
            Array("MODE" => "php", "SHOW_BORDER" => true)
        ); ?> </section>
</div>
 <section class="contacts">
<div class="wrapper">
	<div class="requisites">
		<div class="copyright">
			 © ООО «БЕНТОСИБИРЬ»
		</div>
		<ul class="data">
			<li>БИК: 00550011</li>
			<li>ИНН: 1116677733</li>
			<li>КПП: 3338888999933</li>
			<li>Р/С: 111100000111110000</li>
			<li>ЮРИДИЧЕСКИЙ АДРЕС: 0000 г.Москва, ул.Ленина, д.6 корп.1</li>
		</ul>
		<div class="btn">
			 Скачать реквизиты
		</div>
		<ul class="contact_us">
			<li>ПОЧТА ДЛЯ СВЯЗИ: <a href="mailto:info@erooms.ru">info@erooms.ru</a></li>
			<li>ТЕЛЕФОН: <a href="tel:88000000000">8 (800) 000-00-00</a></li>
		</ul>
	</div>
	<div class="subscription">
		<div class="letter">
			 Если у&nbsp;вас есть предложение по&nbsp;улучшению нашей работы или вы&nbsp;столкнулись с&nbsp;проблемой при заказе товара, обязательно <a href="mailto:info@erooms.ru">напишите</a> нам на&nbsp;почту.
		</div>
		<div class="subscribe">
			<p>ОФОРМИТЕ ПОДПИСКУ,</p>
			<p>
				 чтобы всегда быть в&nbsp;курсе новинок и&nbsp;распродаж
			</p>
			<form action="">
				<div class="placeholder">
					<span>Ваш</span> Email
				</div>
				<input type="email"> <button type="submit"><br>
				</button>
			</form>
		</div>
	</div>
</div>
 </section>
<? /* $APPLICATION->IncludeComponent(
	"bitrix:menu",
	"main_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "main",
		"USE_EXT" => "N"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"footer_menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "footer_catalog",
		"USE_EXT" => "N"
	)
); */  ?>




<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>