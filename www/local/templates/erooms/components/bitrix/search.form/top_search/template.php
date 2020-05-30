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
$this->setFrameMode(true);?>
<div class="search-form">
<form action="<?=$arResult["FORM_ACTION"]?>" class="flex justify-content-end align-items-center">
    <div class="search-form-input">
        <?if($arParams["USE_SUGGEST"] === "Y"):?>
            <?$APPLICATION->IncludeComponent(
                "bitrix:search.suggest.input",
                "",
                array(
                    "NAME" => "q",
                    "VALUE" => "",
                    "INPUT_SIZE" => 15,
                    "DROPDOWN_SIZE" => 10,
                ),
                $component, array("HIDE_ICONS" => "Y")
            );?>
        <?else:?>
            <input placeholder="Поиск" type="text" name="q" value="" size="15" maxlength="50" />
        <?endif;?>
    </div>
    <div class="search-form-btn">
        <button name="s" type="submit" value="">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.4888 14.5735L11.6808 10.6129C12.6599 9.44901 13.1964 7.98455 13.1964 6.45999C13.1964 2.89801 10.2983 0 6.73636 0C3.17438 0 0.276367 2.89801 0.276367 6.45999C0.276367 10.022 3.17438 12.92 6.73636 12.92C8.07358 12.92 9.34788 12.5167 10.4374 11.751L14.2743 15.7416C14.4347 15.9082 14.6504 16 14.8816 16C15.1004 16 15.3079 15.9166 15.4655 15.7649C15.8003 15.4428 15.811 14.9085 15.4888 14.5735ZM6.73636 1.68522C9.36923 1.68522 11.5111 3.82713 11.5111 6.45999C11.5111 9.09286 9.36923 11.2348 6.73636 11.2348C4.10349 11.2348 1.96158 9.09286 1.96158 6.45999C1.96158 3.82713 4.10349 1.68522 6.73636 1.68522Z" fill="white"/>
            </svg>

        </button>
    </div>


</form>
</div>