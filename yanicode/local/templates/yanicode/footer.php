<?php
/**
 * @var CMain $APPLICATION
 */?>
<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "botmenu",
    Array(
        "ROOT_MENU_TYPE" => "bot",
        "MAX_LEVEL" => "1",
        "CHILD_MENU_TYPE" => "left",
        "USE_EXT" => "Y"
    )
);?>

