<?php
/**
 * @var CMain $APPLICATION
 */?>
<?php $APPLICATION->IncludeComponent(
    "bitrix:menu",
    "botmenu",
    Array(
        "ROOT_MENU_TYPE" => "bot",
        "MAX_LEVEL" => "1",
        "CHILD_MENU_TYPE" => "left",
        "USE_EXT" => "Y"
    )
);?>
<script src="./assets/js/vendor/inputmask.min.js"></script>
<script src="./assets/js/vendor/swiper-bundle.min.js"></script>
<script src="./assets/js/build.js"></script>
