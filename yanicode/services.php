<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?>

<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "default",
    Array(
        "IBLOCK_TYPE" => "services",
        "IBLOCK_ID" => "1",
        "NEWS_COUNT" => "20",
        "SORT_BY1" => "SORT",
        "SORT_ORDER1" => "ASC",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER2" => "DESC",
        "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT"),
        "PROPERTY_CODE" => array(),
        "DETAIL_URL" => "/services/#ELEMENT_CODE#/",
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600"
    )
);?>


<?php require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

</body>

</html>