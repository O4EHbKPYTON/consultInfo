<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>
<main class="website-workarea">
    <section class="banner banner_before54" style="background-image: url('./assets/images/banner_services.jpg');">
        <div class="banner-wrapper">
            <div class="container">
                <div class="banner__content">
                    <p><b class="text_gold">НАША МИССИЯ: </b>создаем и внедряем<br />
                        инновационные ценностные<br />
                        предложения и концепции, влияющие на<br />
                        формирование рынка потребительских<br />
                        предпочтений и способствующие<br />
                        достижению бизнес-целей</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="stages">
                <div class="stages__item">
                    <div class="stages__step">01</div>
                    <div class="stages__desc-step">АУДИТ</div>
                </div>
                <div class="stages__item">
                    <div class="stages__step">02</div>
                    <div class="stages__desc-step">СТРАТЕГИЯ</div>
                </div>
                <div class="stages__item">
                    <div class="stages__step">03</div>
                    <div class="stages__desc-step">КОНЦЕПЦИЯ</div>
                </div>
                <div class="stages__item">
                    <div class="stages__step">04</div>
                    <div class="stages__desc-step">ДИЗАЙН</div>
                </div>
                <div class="stages__item">
                    <div class="stages__step">05</div>
                    <div class="stages__desc-step">КОММУНИКАЦИИ</div>
                </div>
            </div>
        </div>
    </section>

    <?php $APPLICATION->IncludeComponent(
        "bitrix:news.list",
        "default/template.php",
        Array(
            "IBLOCK_TYPE" => "services",
            "IBLOCK_ID" => "1",
            "NEWS_COUNT" => "20",
            "SORT_BY1" => "SORT",
            "SORT_ORDER1" => "ASC",
            "SORT_BY2" => "ACTIVE_FROM",
            "SORT_ORDER2" => "DESC",
            "FIELD_CODE" => array("ID", "NAME", "PREVIEW_TEXT"),
            "DETAIL_URL" => "/services/#ELEMENT_CODE#/",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "COMPONENT_TEMPLATE" => "template.php"
        )
    );?>


</main>
<?php require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

</body>

</html>