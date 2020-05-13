<?
$catalog_id=\Bitrix\Main\Config\Option::get("aspro.optimus", "CATALOG_IBLOCK_ID", COptimusCache::$arIBlocks[SITE_ID]['aspro_optimus_catalog']['aspro_optimus_catalog'][0]);
$arSections = COptimusCache::CIBlockSection_GetList(array('SORT' => 'ASC', 'ID' => 'ASC', 'CACHE' => array('TAG' => COptimusCache::GetIBlockCacheTag($catalog_id), 'GROUP' => array('ID'))), array('IBLOCK_ID' => $catalog_id, 'ACTIVE' => 'Y', 'GLOBAL_ACTIVE' => 'Y', 'ACTIVE_DATE' => 'Y', '<DEPTH_LEVEL' =>\Bitrix\Main\Config\Option::get("aspro.optimus", "MAX_DEPTH_MENU", 2)), false, array("ID", "NAME", "PICTURE",  "PARAMS", "DETAIL_PICTURE", "LEFT_MARGIN", "RIGHT_MARGIN", "DEPTH_LEVEL", "SECTION_PAGE_URL", "IBLOCK_SECTION_ID", "CATALOG_GROUP_*"));

if($arSections){
	$arResult = array();
	$cur_page = $GLOBALS['APPLICATION']->GetCurPage(true);
	$cur_page_no_index = $GLOBALS['APPLICATION']->GetCurPage(false);


	/*echo "<pre>";
	print_r($arSections);
	echo "</pre>";*/


	/*** Мой запрос к бд, что бы получить количество товаров в наличии в категории **/
	$arFilter = Array("IBLOCK_ID"=>$catalog_id,  ">CATALOG_QUANTITY"=>'0', "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
	$res = CIBlockElement::GetList(Array(), $arFilter, array("IBLOCK_SECTION_ID"), false, Array("CATALOG_GROUP_*", "name"));
	while($ob = $res->GetNextElement())
	{
	 	$arFields = $ob->GetFields();
		$arSections[$arFields['IBLOCK_SECTION_ID']]['COUNT_GOODS'] = $arFields['CNT'];
		//echo "<pre>"; print_r($arFields); echo "</pre>"; 
	}
	/*******************/


	foreach($arSections as $ID => $arSection){
		/*echo "<pre>";
		print_r($arSection);
		echo "</pre>";*/

		$arSections[$ID]['SELECTED'] = CMenu::IsItemSelected($arSection['SECTION_PAGE_URL'], $cur_page, $cur_page_no_index);
		if($arSection['PICTURE']){
			$img=CFile::ResizeImageGet($arSection['PICTURE'], Array('width'=>50, 'height'=>50), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			$arSections[$ID]['IMAGES']=$img;
		}
		if($arSection['DETAIL_PICTURE']){
			$imgtest=CFile::ResizeImageGet($arSection['DETAIL_PICTURE'], Array('width'=>50, 'height'=>50), BX_RESIZE_IMAGE_PROPORTIONAL, true);
			$arSections[$ID]['IMAGESTEST']=$imgtest;
		}
		if($arSection['IBLOCK_SECTION_ID']){
			if(!isset($arSections[$arSection['IBLOCK_SECTION_ID']]['CHILD'])){
				$arSections[$arSection['IBLOCK_SECTION_ID']]['CHILD'] = array();
			}
			$arSections[$arSection['IBLOCK_SECTION_ID']]['CHILD'][] = &$arSections[$arSection['ID']];
		}

		if($arSection['DEPTH_LEVEL'] == 1){
			$arResult[] = &$arSections[$arSection['ID']];
		}
	}
}?>