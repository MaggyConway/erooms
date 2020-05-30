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
?>

<div class="top_menu">
		<ul>
			<li class="all_catalog">Весь каталог<span></span></li>

<?
// $arSectionItem = '';
		
		
// $arSectionItem .= '<li><a href="'.$arSection["SECTION_PAGE_URL"].'" class="top_link">'.$arHeaderElementsBinds["HEADER_ELEMENT_NAME"].'<span class="icon_light" style="background: url('.$ICON_LIGHT_VAL.') no-repeat center center;"></span>'.'<span class="icon_color" style="background: url('.$ICON_COLOR_VAL.') no-repeat center center;"></span></a></li>';

// echo $arSectionItem;



		// тут можно удобно посмотреть все результаты трудов
  		//$ICON_VALS = array("ICON_LIGHT_VAL"=>$ICON_LIGHT_VAL, "ICON_COLOR_VAL"=>$ICON_COLOR_VAL);
  		// echo "<pre>"; var_dump($ICON_VALS); echo "</pre>";
  	

  //}
// unset($arSectionItem);
//} //end while


//echo "<pre>"; var_dump($arLooks); echo "</pre>";

foreach ($arResult['SECTIONS'] as $arSection) {
?>

<li>
  <a href="<?=$arSection["SECTION_PAGE_URL"]?>" class="top_link"><?=$arSection["NAME"]?>
    <span class="icon_light" style="background: url('.$ICON_LIGHT_VAL.') no-repeat center center;"></span>
    <span class="icon_color" style="background: url('.$ICON_COLOR_VAL.') no-repeat center center;"></span>
  </a>
</li>

<?}// end foreach?>
</ul>
</div>