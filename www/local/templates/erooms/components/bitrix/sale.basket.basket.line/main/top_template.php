<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
/**
 * @global array $arParams
 * @global CUser $USER
 * @global CMain $APPLICATION
 * @global string $cartId
 */
$compositeStub = (isset($arResult['COMPOSITE_STUB']) && $arResult['COMPOSITE_STUB'] == 'Y');



//echo "<pre>"; var_dump($arResult); echo "</pre>";

?>

<a href="/cart/" class="basket">
    <span class="sticker"><?=$arResult["NUM_PRODUCTS"]?></span>
    <span class="label">В корзине:</span>
    <span class="quantity"><?=$arResult["NUM_PRODUCTS"]?>&nbsp;<?=$arResult["PRODUCT(S)"]?></span>&nbsp;<span class="price">(<?=$arResult["TOTAL_PRICE"]?>)</span>
</a>