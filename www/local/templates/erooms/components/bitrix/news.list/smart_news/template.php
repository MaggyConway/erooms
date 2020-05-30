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
<div class="wrapper">
<section class="smart_news">

    <h1><span>УМНЫЕ</span> НОВОСТИ</h1>

<div class="smart_news_grid">
    
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
    <? //echo '<pre>'; var_dump($arItem["SHOW_COUNTER"]); echo "</pre>"; ?>   
        
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="item">
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

<?=$arResult["NAV_STRING"]?>

</section></div>