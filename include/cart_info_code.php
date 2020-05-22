<?php

use Bitrix\Sale;

$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());
$basketItems = $basket->getBasketItems();

// Find Bosch Products
foreach ($basketItems as $item) {
    $brand = CIBlockElement::GetProperty(
        14,
        $item->getProductId(),
        array("sort" => "asc"),
        Array("CODE"=>"TORGOVAYA_MARKA")
    );
    $arBrand = $brand->GetNext();
    if($arBrand["VALUE"] == "STIHL" || $arBrand["VALUE"] == "VIKING") {
        $APPLICATION->IncludeComponent("bitrix:main.include", ".default",
            array(
                "COMPONENT_TEMPLATE" => ".default",
                "PATH" => SITE_DIR."include/cart_info_text.php",
                "AREA_FILE_SHOW" => "file",
                "AREA_FILE_SUFFIX" => "",
                "AREA_FILE_RECURSIVE" => "Y",
                "EDIT_TEMPLATE" => "standard.php"
            ),
            false
        );
        break;
    }
}