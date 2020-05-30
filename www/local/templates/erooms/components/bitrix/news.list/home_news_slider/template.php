<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
<!-- .read_more -->

<div id="home_news__slider">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
    <? //echo '<pre>'; var_dump($arItem["SHOW_COUNTER"]); echo "</pre>"; ?>   
        
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="home_news__item">
            <div class="photo-wrap"><div class="photo" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat center center;"></div>
            </div>
            <div class="info">
                <div class="views"><?=$arItem["SHOW_COUNTER"]?></div>
                <div class="date"><?=$arItem["PROPERTIES"]["DATE"]["VALUE"]?>г.</div>
            </div>
            <div class="name"><?=$arItem["NAME"] ?></div>
        </a>
    <? endforeach; ?>
</div>