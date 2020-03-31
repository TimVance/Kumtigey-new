<?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top_catalogfixed", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CACHE_SELECTED_ITEMS" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600000",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top_catalog",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "top_catalogfixed",
		"COMPOSITE_FRAME_MODE" => "Y",
		"COMPOSITE_FRAME_TYPE" => "AUTO"
	),
	false
);?>