<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?>


<main class="website-workarea">

    <section class="banner banner_before1" style="background-image: url('./assets/images/banner_blog.jpg');">
        <div class="banner-wrapper">
            <div class="container">
                <div class="banner__content">
                    <p>Более 20-ти лет управляю<br />
                        творческими проектами в<br />
                        брендинге.</p>
                    <p><b class="text_gold">
                            Моя личная миссия: </b>делать<br />
                        вас богаче, а ваших<br />
                        клиентов счастливее!</p>
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
    <section class="container">
        <div class="blog-list">
            <?php $APPLICATION->IncludeComponent(
	"bitrix:news",
	"default/template.php",
	array(
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "1",
		"NEWS_COUNT" => "10",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"DETAIL_URL" => "/blog-details.php?ELEMENT_ID=#ELEMENT_ID#",
		"CACHE_TYPE" => "A",
		"SET_TITLE" => "Y",
		"PROPERTY_CODE" => array(
			0 => "DATE",
			1 => "ARTICLE",
		),
		"CACHE_TIME" => "3600",
		"COMPONENT_TEMPLATE" => "template.php",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "N",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"USE_PERMISSIONS" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SET_STATUS_404" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"USE_SHARE" => "N",
		"VARIABLE_ALIASES" => array(
			"SECTION_ID" => "SECTION_ID",
			"ELEMENT_ID" => "ELEMENT_ID",
		)
	),
	false
); ?>

        </div>
    </section>
</main>

<?php require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
