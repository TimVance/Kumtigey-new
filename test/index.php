<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>
<?$APPLICATION->SetTitle("test");?>

<?php

use Bitrix\Sale;

$basket = Sale\Basket::loadItemsForFUser(Sale\Fuser::getId(), Bitrix\Main\Context::getCurrent()->getSite());
$basketItems = $basket->getBasketItems();

$ids = array();

// Find Bosch Products
foreach ($basketItems as $item) {

     $brand = CIBlockElement::GetProperty(
             14,
             $item->getProductId(),
             array("sort" => "asc"),
             Array("CODE"=>"TORGOVAYA_MARKA")
     );
    $arBrand = $brand->GetNext();
    if($arBrand["VALUE"] == "BOSCH") {
        $ids[] = $item->getProductId();
    }
}

// Change prices
if(!empty($ids[1])) {
    foreach ($basketItems as $item) {

        $id = $item->getProductId();
        $customPrice = 0;

        if($ids[0] == $id) {
            $customPrice = round($item->getBasePrice() - $item->getBasePrice() * 0.05);
        }
        elseif ($ids[1] == $id) {
            $customPrice = round($item->getBasePrice() - $item->getBasePrice() * 0.1);
        }
        elseif ($ids[2] == $id) {
            $customPrice = round($item->getBasePrice() - $item->getBasePrice() * 0.15);
        }

        if (!empty($customPrice)) {
            $item->setFields([
                'PRICE' => $customPrice,
                "CUSTOM_PRICE" => 'Y',
            ]);
        }

    }

    $basket->save();
}



?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>