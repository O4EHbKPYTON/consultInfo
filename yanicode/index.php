<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная страница");
?><main class="website-workarea"> <section class="banner banner_before1" style="background-image: url('local/templates/yanicode/assets/images/banner_blog.jpg');">
<div class="banner-wrapper">
	<div class="container">
		<div class="banner__content">
			<p>
				 Более 20-ти лет управляю<br>
				 творческими проектами в<br>
				 брендинге.
			</p>
			<p>
 <b class="text_gold">
				Моя личная миссия: </b>делать<br>
				 вас богаче, а ваших<br>
				 клиентов счастливее!
			</p>
		</div>
	</div>
</div>
<div class="container">
	<div class="stages">
		<div class="stages__item">
			<div class="stages__step">
				 01
			</div>
			<div class="stages__desc-step">
				 АУДИТ
			</div>
		</div>
		<div class="stages__item">
			<div class="stages__step">
				 02
			</div>
			<div class="stages__desc-step">
				 СТРАТЕГИЯ
			</div>
		</div>
		<div class="stages__item">
			<div class="stages__step">
				 03
			</div>
			<div class="stages__desc-step">
				 КОНЦЕПЦИЯ
			</div>
		</div>
		<div class="stages__item">
			<div class="stages__step">
				 04
			</div>
			<div class="stages__desc-step">
				 ДИЗАЙН
			</div>
		</div>
		<div class="stages__item">
			<div class="stages__step">
				 05
			</div>
			<div class="stages__desc-step">
				 КОММУНИКАЦИИ
			</div>
		</div>
	</div>
</div>
 </section> <section class="container">
<div class="blog-list">
	 <?php $APPLICATION->IncludeComponent(
	"bitrix:news",
	"default/template.php",
	Array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "template.php",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(0=>"",1=>"",),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array(0=>"",1=>"",),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DETAIL_URL" => "/blog-details.php?ELEMENT_ID=#ELEMENT_ID#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(0=>"",1=>"",),
		"LIST_PROPERTY_CODE" => array(0=>"",1=>"",),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "10",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"DATE",1=>"ARTICLE",),
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"VARIABLE_ALIASES" => array("SECTION_ID"=>"SECTION_ID","ELEMENT_ID"=>"ELEMENT_ID",)
	)
);?>
</div>
 </section> </main><?php require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>