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
<ul id="home_slider">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <? //echo '<pre>'; var_dump($arItem["PROPERTIES"]["CATEGORY"]["VALUE"]); echo "</pre>"; ?>   
        <li><div class="wrapper">
            <div class="info">
                <div class="name"><?=$arItem["NAME"] ?></div>
                <p class="preview_txt"><?=$arItem["PREVIEW_TEXT"]?></p>
                <a href="<?=$arItem["PROPERTIES"]["SECTION_LINK"]["VALUE"]?>" class="btn">Перейти в раздел</a>
            </div>
            <div class="photo" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat center center;">
                <div class="props">
                    <div class="category"><?=$arItem["PROPERTIES"]["CATEGORY"]["VALUE"]?></div>
                    <div class="model"><?=$arItem["PROPERTIES"]["MODEL"]["VALUE"]?></div>
                    <div class="price"><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?></div>
                </div>
            </div>
        </div></li>
    <? endforeach; ?>
</ul>