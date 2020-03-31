<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>

<?if( !empty( $arResult ) ){
	global $TEMPLATE_OPTIONS;?>
	<div class="menu_top_block catalog_block">
		<ul class="menu dropdown">
			<?foreach( $arResult as $key => $arItem ){?>
				<li class="full <?=($arItem["CHILD"] ? "has-child" : "");?> <?=($arItem["SELECTED"] ? "current" : "");?> m_<?=strtolower($TEMPLATE_OPTIONS["MENU_POSITION"]["CURRENT_VALUE"]);?>">
					<a class="test icons_fa <?=($arItem["CHILD"] ? "parent" : "");?>" href="<?=$arItem["SECTION_PAGE_URL"]?>" >
						<?/*echo "<pre>";
						print_r($arItem);
						echo "</pre>";*/?>
						<img src="<?=$arItem["IMAGESTEST"]["src"];?>" alt="<?/*=$arChildItem["NAME"];*/?>" /><?=$arItem["NAME"]?></a>
					<?if($arItem["CHILD"]){?>
						<ul class="dropdown">
							<?foreach($arItem["CHILD"] as $arChildItem){?>
								<li class="<?=($arChildItem["CHILD"] ? "has-childs" : "");?> <?if($arChildItem["SELECTED"]){?> current <?}?>">
									<?if($arChildItem["IMAGES"]){?>
										<span class="image"><a href="<?=$arChildItem["SECTION_PAGE_URL"];?>"><img src="<?=$arChildItem["IMAGES"]["src"];?>" alt="<?=$arChildItem["NAME"];?>" /></a></span>
									<?}?>
									<a class="section" href="<?=$arChildItem["SECTION_PAGE_URL"];?>">
																		<?
																		//$arFilter = Array("IBLOCK_ID"=>$arChildItem["IBLOCK_ID"], "IBLOCK_SECTION_ID"=>$arChildItem["ID"], ">CATALOG_QUANTITY"=>'0', "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y");
																		//echo "<pre>"; print_r($arFilter); echo "</pre>";
																		//$res = CIBlockElement::GetList(Array(), $arFilter, array("IBLOCK_SECTION_ID"), false, Array("CATALOG_GROUP_*", "name"));
																		//$count = $res->GetNextElement()->GetFields()['CNT'];
																		//echo "<pre>"; print_r($res->GetNextElement()); echo "</pre>"; 
	//while($ob = $res->GetNextElement())
	//{
	// $arFields = $ob->GetFields();
	//	$arFields["PROPERTIES"] = $ob->GetProperties();	//echo "<pre>"; print_r($arFields); echo "</pre>"; 
	//}
?>
<?// exit ?>
										<span><?=$arChildItem["NAME"];?></span> <?=$arChildItem["COUNT_GOODS"]?"<span class='count'>(".$arChildItem["COUNT_GOODS"].")</span>":""; ?></a>
									<?if($arChildItem["CHILD"]){?>
										<ul class="dropdown">
											<?foreach($arChildItem["CHILD"] as $arChildItem1){?>
												<li class="menu_item <?if($arChildItem1["SELECTED"]){?> current <?}?>">
													<a class="parent1 section1" href="<?=$arChildItem1["SECTION_PAGE_URL"];?>"><span><?=$arChildItem1["NAME"];?></span> <?=$arChildItem1["COUNT_GOODS"]?"<span class='count'>(".$arChildItem1["COUNT_GOODS"].")</span>":""; ?></a>
												</li>
											<?}?>
										</ul>
									<?}?>
									<div class="clearfix"></div>
								</li>
							<?}?>
						</ul>
					<?}?>
				</li>
			<?}?>
		</ul>
	</div>
<?}?>