<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_content_multilevel", 
	array(
		"ROOT_MENU_TYPE" => "top_content_multilevel",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_USE_GROUPS" => "N",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MAX_LEVEL" => "4",
		"CHILD_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"DELAY" => "N",
		"ALLOW_MULTI_SELECT" => "N",
		"CACHE_SELECTED_ITEMS" => "N",
		"COMPONENT_TEMPLATE" => "top_content_multilevel",
		"COMPOSITE_FRAME_MODE" => "Y",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>