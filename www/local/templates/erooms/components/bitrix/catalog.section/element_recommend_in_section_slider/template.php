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

<ul id="recommend_in_section--slider">

<?
foreach ($arResult['ITEMS'] as $item) {
	$uniqueId = $item['ID'].'_'.md5($this->randString().$component->getAction());
	$areaIds[$item['ID']] = $this->GetEditAreaId($uniqueId);
	$this->AddEditAction($uniqueId, $item['EDIT_LINK'], $elementEdit);
	$this->AddDeleteAction($uniqueId, $item['DELETE_LINK'], $elementDelete, $elementDeleteParams);

	?>

	<li class="slide">

	<?

		$rsSections = CIBlockSection::GetList(array(), array('IBLOCK_ID' => 2, '=CODE' => $arResult["ORIGINAL_PARAMETERS"]["SECTION_CODE"]));

		if ($arSection = $rsSections->Fetch()) {
			//echo "<pre>"; var_dump($arSection["CODE"]); echo "</pre>";
		}



		//echo "<pre>"; var_dump($item["MIN_PRICE"]["VALUE"]); echo "</pre>";

	?>



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

			<div class="item_category"><?= $arSection["NAME"]?></div>

			<div class="item_price">
				<div class="current_price">от&nbsp;<?= $item["MIN_PRICE"]["VALUE"]?>&nbsp;р.</div>

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
	</li>
<?}?>
</ul>