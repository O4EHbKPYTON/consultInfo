<?php
/**
 * @var CMain $APPLICATION
 */?>
<?$APPLICATION->IncludeComponent(
    "bitrix:menu",
    "topmenu",
    Array(
        "ROOT_MENU_TYPE" => "top",
        "MAX_LEVEL" => "1",
        "CHILD_MENU_TYPE" => "left",
        "USE_EXT" => "Y"
    )
);?>