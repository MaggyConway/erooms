<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 *
 *  _________________________________________________________________________
 * |	Attention!
 * |	The following comments are for system use
 * |	and are required for the component to work correctly in ajax mode:
 * |	<!-- items-container -->
 * |	<!-- pagination-container -->
 * |	<!-- component-end -->
 */

$this->setFrameMode(true);?>


<div class="pop_home_tabs_grid">

<?
foreach ($arResult['ITEMS'] as $item) {	?>

	<div class="pop_home_tabs__item" id="<?=$this->GetEditAreaId($item['ID']);?>">
		<a href="<?=$item["DETAIL_PAGE_URL"]?>">
		<?//echo '<pre>'; var_dump($item['PROPERTIES']['STICKER']['VALUE_ENUM']); echo '</pre>';?>

			<ul class="item_stickers">
				<? foreach ($item['PROPERTIES']['STICKER']['VALUE_ENUM'] as $key => $value) { ?>
					<li><?= $item['PROPERTIES']['STICKER']['VALUE_ENUM'][$key] ?></li>
				<?}?>
			</ul>

			<a href="<?=$item['DETAIL_PAGE_URL']?>" title="<?=$item['NAME']?>">
				<div class="item_image" style="background: url(<?= $item["PREVIEW_PICTURE"]["SRC"] ?>) no-repeat center center;"></div>
				<div class="item-wrapper"></div>
				<div class="item-title"><?=$item['NAME']?></div>
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
		</a>
	</div>
<?}?>
</div>

<?=$arResult['NAV_STRING']?>
