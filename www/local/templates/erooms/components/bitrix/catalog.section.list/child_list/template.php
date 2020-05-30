<!-- CHILD LIST -->
<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

//echo($arParams["CURRENT_SECTION_ID"]); //ID текущего раздела

// echo "<pre>"; var_dump($arResult); echo "</pre>";
?>

<ul class="child_sitemap_ul">

	<?
		$itemsSection = GetIBlockSectionList(2, $arParams["CURRENT_SECTION_ID"], Array("SORT"=>"ASC"));
		while($arItem = $itemsSection->GetNext()) { 
			//echo "<pre>"; var_dump($arItem["SECTION_PAGE_URL"]); echo "</pre>";
	?>
	<li><a href="<?=$arItem["SECTION_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></li>
	<?}?>
</ul>