<?if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();?>
<?
global $TEMPLATE_OPTIONS;
$IsViewedTypeLocal = $TEMPLATE_OPTIONS['VIEWED_TYPE']['CURRENT_VALUE'] === 'LOCAL';
$arViewedIDs=COptimus::getViewedProducts((int)CSaleBasket::GetBasketUserID(false), SITE_ID);
if($arViewedIDs){?>
	<?Bitrix\Main\Page\Frame::getInstance()->startDynamicWithID("viewed-block");?>
	<div class="wrapper_inner">
		<div class="similar_products_wrapp">
			<?if(!$IsViewedTypeLocal):?>
				<?$GLOBALS['arrFilterViewed'] = array( "ID" => $arViewedIDs );?>
				<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"catalog_viewed", 
	array(
		"IBLOCK_TYPE" => "aspro_optimus_catalog",
		"IBLOCK_ID" => "14",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilterViewed",
		"INCLUDE_SUBSECTIONS" => "N",
		"SHOW_ALL_WO_SECTION" => "Y",
		"HIDE_NOT_AVAILABLE" => "Y",
		"PAGE_ELEMENT_COUNT" => "8",
		"LINE_ELEMENT_COUNT" => "4",
		"PROPERTY_CODE" => array(
			0 => "BRAND",
			1 => "",
		),
		"OFFERS_LIMIT" => "0",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"BASKET_URL" => "/basket/",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "Y",
		"CACHE_TYPE" => "Y",
		"CACHE_TIME" => "3600000",
		"CACHE_GROUPS" => "N",
		"CACHE_FILTER" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "Y",
		"DISPLAY_COMPARE" => "Y",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"PRICE_CODE" => array(
			0 => "Розничная цена",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_PROPERTIES" => array(
			0 => "BRAND",
		),
		"USE_PRODUCT_QUANTITY" => "N",
		"CONVERT_CURRENCY" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"DISCOUNT_PRICE_CODE" => "",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SHOW_ADD_FAVORITES" => "Y",
		"SECTION_NAME_FILTER" => "",
		"SECTION_SLIDER_FILTER" => "21",
		"COMPONENT_TEMPLATE" => "catalog_viewed",
		"OFFERS_FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"OFFERS_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"OFFERS_SORT_FIELD" => "sort",
		"OFFERS_SORT_ORDER" => "asc",
		"OFFERS_SORT_FIELD2" => "id",
		"OFFERS_SORT_ORDER2" => "desc",
		"SHOW_MEASURE" => "N",
		"OFFERS_CART_PROPERTIES" => array(
		),
		"DISPLAY_WISH_BUTTONS" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"SEF_MODE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"TITLE_BLOCK" => GetMessage("VIEWED_BEFORE"),
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"COMPARE_PATH" => "",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"CUSTOM_FILTER" => "",
		"HIDE_NOT_AVAILABLE_OFFERS" => "Y",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"CURRENCY_ID" => "RUB",
		"COMPATIBLE_MODE" => "Y"
	),
	false
);?>
	<div class="home-recommendation">
		<div class="title_block">Полезная информация</div>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"home_page_recommendations", 
			array(
				"DISPLAY_DATE" => "N",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"AJAX_MODE" => "Y",
				"IBLOCK_TYPE" => "aspro_optimus_content",
				"IBLOCK_ID" => "17",
				"NEWS_COUNT" => "2",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_ORDER1" => "DESC",
				"SORT_BY2" => "SORT",
				"SORT_ORDER2" => "ASC",
				"FILTER_NAME" => "",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"PROPERTY_CODE" => array(
					0 => "",
					1 => "DESCRIPTION",
					2 => "",
				),
				"CHECK_DATES" => "Y",
				"DETAIL_URL" => "",
				"PREVIEW_TRUNCATE_LEN" => "",
				"ACTIVE_DATE_FORMAT" => "d-m-Y",
				"SET_TITLE" => "N",
				"SET_BROWSER_TITLE" => "N",
				"SET_META_KEYWORDS" => "N",
				"SET_META_DESCRIPTION" => "N",
				"SET_LAST_MODIFIED" => "Y",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"ADD_SECTIONS_CHAIN" => "Y",
				"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
				"PARENT_SECTION" => "",
				"PARENT_SECTION_CODE" => "",
				"INCLUDE_SUBSECTIONS" => "N",
				"CACHE_TYPE" => "A",
				"CACHE_TIME" => "3600",
				"CACHE_FILTER" => "Y",
				"CACHE_GROUPS" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"DISPLAY_BOTTOM_PAGER" => "N",
				"PAGER_TITLE" => "Новости",
				"PAGER_SHOW_ALWAYS" => "N",
				"PAGER_TEMPLATE" => "",
				"PAGER_DESC_NUMBERING" => "N",
				"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
				"PAGER_SHOW_ALL" => "Y",
				"PAGER_BASE_LINK_ENABLE" => "Y",
				"SET_STATUS_404" => "Y",
				"SHOW_404" => "Y",
				"MESSAGE_404" => "",
				"PAGER_BASE_LINK" => "",
				"PAGER_PARAMS_NAME" => "arrPager",
				"AJAX_OPTION_JUMP" => "N",
				"AJAX_OPTION_STYLE" => "Y",
				"AJAX_OPTION_HISTORY" => "N",
				"AJAX_OPTION_ADDITIONAL" => "",
				"COMPONENT_TEMPLATE" => "home_page_recommendations",
				"STRICT_SECTION_CHECK" => "N",
				"COMPOSITE_FRAME_MODE" => "A",
				"COMPOSITE_FRAME_TYPE" => "AUTO",
				"FILE_404" => ""
			),
			false
		);?>

		</div>

			<?else:?>
				<?$APPLICATION->IncludeComponent(
					"aspro:catalog.viewed.optimus",
					"main",
					array(
						"TITLE_BLOCK" => GetMessage('VIEWED_BEFORE'),
						"SHOW_MEASURE" => "Y",
					),
					false
				);?>
			<?endif;?>
		</div>
	</div>
	<?Bitrix\Main\Page\Frame::getInstance()->finishDynamicWithID("viewed-block", "");?>
<?}?>