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
$this->setFrameMode(true);?>

<section class="companies">
    <ul>
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <? //echo '<pre>'; var_dump($arItem["PROPERTIES"]["LINK"]["VALUE"]); echo "</pre>"; ?>   
            
            <li>
                <a href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>">
                    <img class="photo" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" />
                </a>
            </li>
        <? endforeach; ?>
    </ul>
</section>