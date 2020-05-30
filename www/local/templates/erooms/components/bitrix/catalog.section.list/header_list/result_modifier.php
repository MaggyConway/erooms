<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arViewModeList = array('LIST', 'LINE', 'TEXT', 'TILE');

$arDefaultParams = array(
	'VIEW_MODE' => 'LIST',
	'SHOW_PARENT_NAME' => 'Y',
	'HIDE_SECTION_NAME' => 'N'
);

$arParams = array_merge($arDefaultParams, $arParams);

if (!in_array($arParams['VIEW_MODE'], $arViewModeList))
	$arParams['VIEW_MODE'] = 'LIST';
if ('N' != $arParams['SHOW_PARENT_NAME'])
	$arParams['SHOW_PARENT_NAME'] = 'Y';
if ('Y' != $arParams['HIDE_SECTION_NAME'])
	$arParams['HIDE_SECTION_NAME'] = 'N';

$arResult['VIEW_MODE_LIST'] = $arViewModeList;

if (0 < $arResult['SECTIONS_COUNT'])
{
	if ('LIST' != $arParams['VIEW_MODE'])
	{
		$boolClear = false;
		$arNewSections = array();
		foreach ($arResult['SECTIONS'] as &$arOneSection)
		{
			if (1 < $arOneSection['RELATIVE_DEPTH_LEVEL'])
			{
				$boolClear = true;
				continue;
			}
			$arNewSections[] = $arOneSection;
		}
		unset($arOneSection);
		if ($boolClear)
		{
			$arResult['SECTIONS'] = $arNewSections;
			$arResult['SECTIONS_COUNT'] = count($arNewSections);
		}
		unset($arNewSections);
	}
}

if (0 < $arResult['SECTIONS_COUNT'])
{
	$boolPicture = false;
	$boolDescr = false;
	$arSelect = array('ID');
	$arMap = array();
	if ('LINE' == $arParams['VIEW_MODE'] || 'TILE' == $arParams['VIEW_MODE'])
	{
		reset($arResult['SECTIONS']);
		$arCurrent = current($arResult['SECTIONS']);
		if (!isset($arCurrent['PICTURE']))
		{
			$boolPicture = true;
			$arSelect[] = 'PICTURE';
		}
		if ('LINE' == $arParams['VIEW_MODE'] && !array_key_exists('DESCRIPTION', $arCurrent))
		{
			$boolDescr = true;
			$arSelect[] = 'DESCRIPTION';
			$arSelect[] = 'DESCRIPTION_TYPE';
		}
	}
	if ($boolPicture || $boolDescr)
	{
		foreach ($arResult['SECTIONS'] as $key => $arSection)
		{
			$arMap[$arSection['ID']] = $key;
		}
		$rsSections = CIBlockSection::GetList(array(), array('ID' => array_keys($arMap)), false, $arSelect);
		while ($arSection = $rsSections->GetNext())
		{
			if (!isset($arMap[$arSection['ID']]))
				continue;
			$key = $arMap[$arSection['ID']];
			if ($boolPicture)
			{
				$arSection['PICTURE'] = intval($arSection['PICTURE']);
				$arSection['PICTURE'] = (0 < $arSection['PICTURE'] ? CFile::GetFileArray($arSection['PICTURE']) : false);
				$arResult['SECTIONS'][$key]['PICTURE'] = $arSection['PICTURE'];
				$arResult['SECTIONS'][$key]['~PICTURE'] = $arSection['~PICTURE'];
			}
			if ($boolDescr)
			{
				$arResult['SECTIONS'][$key]['DESCRIPTION'] = $arSection['DESCRIPTION'];
				$arResult['SECTIONS'][$key]['~DESCRIPTION'] = $arSection['~DESCRIPTION'];
				$arResult['SECTIONS'][$key]['DESCRIPTION_TYPE'] = $arSection['DESCRIPTION_TYPE'];
				$arResult['SECTIONS'][$key]['~DESCRIPTION_TYPE'] = $arSection['~DESCRIPTION_TYPE'];
			}
		}
	}
}



foreach ($arResult['SECTIONS'] as $key => $arSection) {
// фильтрует по свойству раздела - показывать в меню в шапке сайта
	$arLooks = array(
		"VALUE"=>$arSection["UF_HEADER_LOOK"], 
		"NAME"=>$arSection["NAME"], 
		"ID"=>$arSection["ID"]);

	if($arLooks["VALUE"] !== "1") {
		unset($arResult['SECTIONS'][$key]);
	}
	//echo "<pre>"; var_dump($arLooks["VALUE"]); echo "</pre>";

}



//  свойства ICON_LIGHT и ICON_COLOR
  //if(CModule::IncludeModule('iblock')) {

  // 	$arSort= Array("ID"=>"ASC");
  // 	$arFilter = Array("IBLOCK_ID" => 7);
  // 	$arSelect = Array("ID", "NAME", "PROPERTY_SECTION");

  // 	// CIBlockElement::GetList - выводит все элементы из инфоблока с id=7 (инфоблок иконок с привязкой к разделу)
  // 	$res =  CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);

  // 	// из цикла while достаем отдельные объекты данных
  // 	while($ob = $res->GetNextElement()) {
  // 		$arFields = $ob->GetFields();


  // 		//$S_ID - section id
  // 		//$S_RES - section result
  // 		$S_ID = CIBlockSection::GetByID($arFields["PROPERTY_SECTION_VALUE"]);
		// if($S_RES = $S_ID->GetNext())

		//   //echo $S_RES['NAME'];

		// // формирую удобный массив со итоговыми данными
  // 		$arHeaderElementsBinds = array(
  // 			"HEADER_ELEMENT_NAME"=>$arFields["NAME"], 
  // 			"HEADER_ELEMENT_ID"=>$arFields["ID"], 
  // 			"CATALOG_SECTION_ID"=>$arFields["PROPERTY_SECTION_VALUE"],
  // 			"CATALOG_SECTION_NAME"=>$S_RES['NAME']
  // 		);



  // 		//echo "<pre>"; var_dump($arFields); echo "</pre>";


  // 		// достаю свойство-файл иконок

  // 		// белая иконка
  // 		$icon_props_light = CIBlockElement::GetProperty(
  // 			7, 
  // 			$arHeaderElementsBinds["HEADER_ELEMENT_ID"], 
  // 			array(), 
  // 			array("CODE"=>"ICON_LIGHT")
  // 		);
  // 		if($ar_props_light = $icon_props_light->Fetch())
  // 			$ICON_LIGHT_VAL = $ar_props_light["VALUE"];
  // 		else
  // 			$ICON_LIGHT_VAL = false;


		// // цветная иконка
  // 		$icon_props_color = CIBlockElement::GetProperty(
  // 			7, 
  // 			$arHeaderElementsBinds["HEADER_ELEMENT_ID"], 
  // 			array(), 
  // 			array("CODE"=>"ICON_COLOR")
  // 		);
  // 		if($ar_props_color = $icon_props_color->Fetch())
  // 			$ICON_COLOR_VAL = $ar_props_color["VALUE"];
  // 		else
  // 			$ICON_COLOR_VAL = false;


  // 		// получаю файловые пути
  // 		$ICON_LIGHT_VAL = CFile::GetPath($ICON_LIGHT_VAL);
  // 		$ICON_COLOR_VAL = CFile::GetPath($ICON_COLOR_VAL);

   		//echo "<pre>"; var_dump($arSection["NAME"]); echo "</pre>";
?>