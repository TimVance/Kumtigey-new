<?$APPLICATION->IncludeComponent(
	"datainlife:iblocksearch", 
	".default", 
	array(
		"CATALOG_FOLDER" => "/catalog/",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CONTAINER_ID" => "di-search",
		"EXT_FILTER" => "shopFilter",
		"INPUT_ID" => "di-search-input",
		"INPUT_SECTION_ID" => "di-search-section-id-input",
		"PRICE_CODE" => array(
			0 => "Розничная цена",
		),
		"PROPERTY_CODE" => array(
		),
		"RANDOM_ELEMENTS_COUNT" => "5",
		"RANDOM_ELEMENTS_PICTURE_FIELD" => "PREVIEW_PICTURE",
		"RANDOM_ELEMENTS_PICTURE_HEIGHT" => "100",
		"RANDOM_ELEMENTS_PICTURE_WIDTH" => "100",
		"RESULT_CONTAINER_ID" => "di-search-result",
		"SECTIONS_COUNT_TOP" => "6",
		"SECTION_ID" => "",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
