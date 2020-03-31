<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<? $this->setFrameMode( true ); ?>
<?if( !empty( $arResult ) ){?>
	<ul class="menu top menu_top_block catalogfirst visible_on_ready">
		<?foreach( $arResult as $key => $arItem ){
			if(isset($arItem["PARAMS"]["NOT_VISIBLE"]) && $arItem["PARAMS"]["NOT_VISIBLE"]=="Y")
				continue;?>
			<li class="<?=($arItem["SELECTED"] ? "current" : "");?> <?=($arItem['PARAMS']['CLASS'] ? $arItem['PARAMS']['CLASS'] : "");?> <?=($arItem["CHILD"] ? "has-child" : "");?>">
				<a class="<?=($arItem["CHILD"] ? "icons_fa parent" : "");?>" href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a>
				<?if($arItem["CHILD"]){?>
					<ul class="dropdown">
						<?foreach($arItem["CHILD"] as $arChildItem){?>
							<li class="<?=($arChildItem["CHILD"] ? "has-child" : "");?> <?if($arChildItem["SELECTED"]){?> current <?}?>">
								<a class="<?=($arChildItem["CHILD"] ? "icons_fa parent" : "");?>" href="<?=$arChildItem["LINK"];?>"><?=$arChildItem["TEXT"];?></a>
								<?if($arChildItem["CHILD"]){?>
									<ul class="dropdown">
										<?foreach($arChildItem["CHILD"] as $arChildItem1){?>
											<li class="menu_item1 <?if($arChildItem1["SELECTED"]){?> current <?}?>">
												<a href="<?=$arChildItem1["LINK"];?>"><span class="text"><?=$arChildItem1["TEXT"];?></span></a>
											</li>
										<?}?>
									</ul>
								<?}?>
							</li>
						<?}?>
					</ul>
				<?}?>
			</li>
		<?}?>
		<li class="more">
			<a href="javascript:;" rel="nofollow"></a>
			<ul class="dropdown"></ul>
		</li>
	</ul>
	<div class="mobile_menu_wrapper">
		<ul class="mobile_menu">
			<?foreach( $arResult as $key => $arItem ){?>
				<li class="icons_fa <?=($arItem["CHILD"] ? "has-child" : "");?> <?=($arItem["SELECTED"] ? "current" : "");?>">
					<a class="dark_link <?=($arItem["CHILD"] ? "parent" : "");?>" href="<?=$arItem["LINK"]?>" ><?=$arItem["TEXT"]?></a>
					<?if($arItem["CHILD"]){?>
						<ul class="dropdown">
							<?foreach($arItem["CHILD"] as $arChildItem){?>
								<li class="full <?if($arChildItem["SELECTED"]){?> current <?}?>">
									<a class="icons_fa <?=($arChildItem["CHILD"] ? "parent" : "");?>" href="<?=($arChildItem["SECTION_PAGE_URL"] ? $arChildItem["SECTION_PAGE_URL"] : $arChildItem["LINK"] );?>"><?=($arChildItem["NAME"] ? $arChildItem["NAME"] : $arChildItem["TEXT"] );?></a>
								</li>
							<?}?>
						</ul>
					<?}?>
				</li>
			<?}?>
            <li>
                <div class="mobile-search-wrapper">
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
                </div>
            </li>
		</ul>
	</div>
<?}?>