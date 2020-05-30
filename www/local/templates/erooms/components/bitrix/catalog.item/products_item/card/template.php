<!-- КАРТОЧКА ТОВАРА В СПИСКЕ ТОВАРОВ -->

<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>
<?
	//echo '<pre>'; var_dump($arParams['SKU_PROPS']); echo '</pre>' ;
?>



<div class="product_item">
	<ul class="item_stickers">

		<? foreach ($item['PROPERTIES']['STICKER']['VALUE_ENUM'] as $key => $value) { ?>
			<li><?= $item['PROPERTIES']['STICKER']['VALUE_ENUM'][$key] ?></li>
		<?}?>

	</ul>

	<a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$productTitle?>">
		<div class="item_image" style="background: url(<?= $item["PREVIEW_PICTURE"]["SRC"] ?>) no-repeat center center;"></div>
		<div class="item-wrapper"></div>
		<div class="item-title"><?=$productTitle?></div>
	</a>

	<? if($item["PROPERTIES"]["CATEGORY"]["VALUE_ENUM"] !== NULL) { ?>
		<div class="item_category"><?= $item["PROPERTIES"]["CATEGORY"]["VALUE_ENUM"]?></div>
	<? } ?>

	<div class="item_price">

		<div class="current_price"><?= $price["PRINT_BASE_PRICE"]?></div>

		<? if(!empty($item["PROPERTIES"]["OLD_PRICE"]["VALUE"])) { ?>
			<div class="old_price"><?= $item["PROPERTIES"]["OLD_PRICE"]["VALUE"]?> р.</div>
		<? } ?>
	</div>

	<?
	if (!empty($arParams['PRODUCT_BLOCKS_ORDER']))
	{
		foreach ($arParams['PRODUCT_BLOCKS_ORDER'] as $blockName)
		{
			switch ($blockName)
			{
				case 'buttons':?>

					<div class="btns" data-entity="buttons-block" id="<?=$itemIds['BASKET_ACTIONS']?>">
						<a class="to_busket" href="<?=$item['DETAIL_PAGE_URL']?>">
							<?=$arParams['MESS_BTN_DETAIL']?>
						</a>
						<div class="buy_now" title="Купить в один клик!"></div>
					</div>
				<?
					break;
			}
		}
	}?>
</div>