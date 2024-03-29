<?if('Y' == $arParams['USE_FILTER']):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:catalog.smart.filter",
		($arParams["AJAX_FILTER_CATALOG"]=="Y" ? "main_ajax" : "main"),
		Array(
			"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
			"IBLOCK_ID" => $arParams["IBLOCK_ID"],
			"SECTION_ID" => (isset($arSection["ID"]) ? $arSection["ID"] : ''),
			"FILTER_NAME" => $arParams["FILTER_NAME"],
			"PRICE_CODE" => $arParams["FILTER_PRICE_CODE"],
			"CACHE_TYPE" => $arParams["CACHE_TYPE"],
			"CACHE_TIME" => $arParams["CACHE_TIME"],
			"CACHE_NOTES" => "",
			"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
			"SAVE_IN_SESSION" => "N",
			"XML_EXPORT" => "Y",
			"SECTION_TITLE" => "NAME",
			"SECTION_DESCRIPTION" => "DESCRIPTION",
			"SHOW_HINTS" => $arParams["SHOW_HINTS"],
			'CONVERT_CURRENCY' => $arParams['CONVERT_CURRENCY'],
			'CURRENCY_ID' => $arParams['CURRENCY_ID'],
			"INSTANT_RELOAD" => "Y",
			"VIEW_MODE" => strtolower($TEMPLATE_OPTIONS["TYPE_VIEW_FILTER"]["CURRENT_VALUE"]),
			"SEF_MODE" => (strlen($arResult["URL_TEMPLATES"]["smart_filter"]) ? "Y" : "N"),
			"SEF_RULE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["smart_filter"],
			"SMART_FILTER_PATH" => $arResult["VARIABLES"]["SMART_FILTER_PATH"],
			"HIDE_NOT_AVAILABLE" => $arParams["HIDE_NOT_AVAILABLE"],
		),
		$component);

//sotbit seometa component start
$APPLICATION->IncludeComponent(	
  "sotbit:seo.meta",
  ".default",	
  Array(	
    "FILTER_NAME" => $arParams["FILTER_NAME"],	
    "SECTION_ID" => (isset($arSection["ID"]) ? $arSection["ID"] : ''),	
    "CACHE_TYPE" => $arParams["CACHE_TYPE"],	
    "CACHE_TIME" => $arParams["CACHE_TIME"],	
  )	
);	
//sotbit seometa component end

	?>
<?endif;?>