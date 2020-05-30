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

<div class="swiper-container main_news-list">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <? foreach ($arResult["ITEMS"] as $arItem): ?>
            <?
            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            ?>

            <div class="swiper-slide">
                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="main_new">
                    <div class="main_new-wrap">
                        <div class="main_new-img">
                            <img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>"
                                 alt="<?= $arItem["PREVIEW_PICTURE"]["TITLE"] ?>">
                        </div>
                        <div class="main_new-info flex align-items-center">
                            <div class="main_new-views flex align-items-center">
                                <span>2</span>
                                <svg width="15" height="9" viewBox="0 0 15 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.5 0.0292969C4.63409 0.0292969 2.03513 1.59726 0.117367 4.14406C-0.0391224 4.35271 -0.0391224 4.64421 0.117367 4.85286C2.03513 7.40272 4.63409 8.97069 7.5 8.97069C10.3659 8.97069 12.9649 7.40272 14.8826 4.85593C15.0391 4.64728 15.0391 4.35578 14.8826 4.14712C12.9649 1.59726 10.3659 0.0292969 7.5 0.0292969ZM7.70558 7.6482C5.80316 7.76787 4.23213 6.1999 4.35179 4.29441C4.44998 2.72337 5.72338 1.44998 7.29442 1.35179C9.19684 1.23212 10.7679 2.80009 10.6482 4.70558C10.5469 6.27354 9.27355 7.54694 7.70558 7.6482ZM7.61046 6.19376C6.58561 6.2582 5.73872 5.41438 5.80623 4.38953C5.85839 3.54264 6.54572 2.85839 7.39261 2.80315C8.41746 2.73872 9.26435 3.58253 9.19684 4.60739C9.14161 5.45734 8.45428 6.1416 7.61046 6.19376Z" fill="#7B7B7B"/>
                                </svg>

                            </div>
                            <div class="main_new-date"><?= $arItem["PROPERTIES"]["DATE"]["VALUE"] ?></div>
                        </div>
                        <div class="main_new-title"><? echo $arItem["NAME"] ?></div>

                    </div>
                </a>
            </div>
        <? endforeach; ?>
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>
</div>

<script>

</script>