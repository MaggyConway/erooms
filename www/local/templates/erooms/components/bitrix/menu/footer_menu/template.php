<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="footer_menu">
    <?if (!empty($arResult)):?>
        <ul>
            <?
            foreach($arResult as $arItem):
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <?if($arItem["SELECTED"]):?>
                <li><a href="<?=$arItem["LINK"]?>" class="selected top_link"><?=$arItem["TEXT"]?></a></li>
            <?else:?>
                <li><a  class="top_link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
            <?endif?>

            <?endforeach?>
        </ul>
    <?endif?>
</div>

