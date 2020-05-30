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
<ul id="compilation_slider">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <? //echo '<pre>'; var_dump($arItem["PROPERTIES"]["CATEGORY"]["VALUE"]); echo "</pre>"; ?>   
        <li><div class="wrapper">
            <div class="photo" style="background: url(<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>) no-repeat center center;">
            </div>
            <div class="info">
                <div class="name"><?=$arItem["NAME"] ?></div>
                <p class="preview_txt"><?=$arItem["PREVIEW_TEXT"]?></p>
                <a href="<?=$arItem["PROPERTIES"]["COMPILATION_PATH"]["VALUE"]?>" class="btn" target="_blank">
                    Открыть подборку
                </a>
            </div>
        </div></li>
    <? endforeach; ?>
</ul>