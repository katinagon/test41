<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Каталог");
$APPLICATION->SetTitle("Каталог");
?><?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"catalog",
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
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COLOR_NEW" => "3E74E6",
		"COLOR_OLD" => "C0C0C0",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"COUNT_IN_LINE" => "3",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_BRAND_PROP_CODE" => array("TIZERS",""),
		"DETAIL_BRAND_USE" => "Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array("NAME","PREVIEW_TEXT","DETAIL_TEXT","DETAIL_PICTURE",""),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Страница",
		"DETAIL_PROPERTY_CODE" => array("FORM_QUESTION","FORM_ORDER","PRICE","PRICEOLD","ARTICLE","TYPE","SIZE","COLOR","SIZE_KUXNI","LINK_PROJECTS","GARAGE","APPOINTMENT","STIKERS","SLEEP_ROOM","SIZE_ZHILAYA","STATUS","BRAND","DOCUMENTS","PLANIROVKA",""),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_AS_RATING" => "rating",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FILTER_FIELD_CODE" => array(0=>"PREVIEW_PICTURE",1=>"",),
		"FILTER_NAME" => "",
		"FILTER_PROPERTY_CODE" => array(0=>"FILTER_PRICE",1=>"SIZE",2=>"COLOR",3=>"SIZE_ZHILAYA",4=>"SIZE_KUXNI",5=>"GARAGE",6=>"SLEEP_ROOM",7=>"APPOINTMENT",8=>"",),
		"FILTER_URL_TEMPLATE" => "#SECTION_CODE_PATH#/filter/#SMART_FILTER_PATH#/apply/",
		"FONT_MAX" => "50",
		"FONT_MIN" => "10",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "aspro_stroy_catalog",
		"IMAGE_POSITION" => "left",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array("NAME","PREVIEW_TEXT","PREVIEW_PICTURE","DETAIL_PICTURE",""),
		"LIST_PROPERTY_CODE" => array("TYPE_BUILDINGS","FORM_QUESTION","FORM_ORDER","SHOW_ON_INDEX_PAGE","PRICE","PRICEOLD","FILTER_PRICE","ARTICLE","TYPE","SIZE","COLOR","SIZE_KUXNI","LINK_PROJECTS","GARAGE","APPOINTMENT","STIKERS","TIZERS","SLEEP_ROOM","SIZE_ZHILAYA",""),
		"LIST_USE_SHARE" => "N",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "9",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PERIOD_NEW_TAGS" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROP_1" => "TYPE_BUILDINGS",
		"PROP_2" => "TYPE_BUILDINGS",
		"PROP_3" => "TYPE_BUILDINGS",
		"SEF_FOLDER" => "/catalog/",
		"SEF_MODE" => "Y",
		"SEF_URL_TEMPLATES" => Array("detail"=>"#SECTION_CODE_PATH#/#ELEMENT_CODE#/","news"=>"","section"=>"#SECTION_CODE_PATH#/"),
		"SET_LAST_MODIFIED" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHARE_HANDLERS" => array(0=>"mailru",1=>"twitter",2=>"facebook",3=>"lj",4=>"vk",5=>"delicious",),
		"SHARE_HIDE" => "N",
		"SHARE_SHORTEN_URL_KEY" => "",
		"SHARE_SHORTEN_URL_LOGIN" => "",
		"SHARE_TEMPLATE" => "",
		"SHOW_404" => "N",
		"SHOW_DETAIL" => "Y",
		"SHOW_DETAIL_LINK" => "Y",
		"SHOW_IMAGE" => "Y",
		"SHOW_NAME" => "Y",
		"SHOW_SECTION_PREVIEW_DESCRIPTION" => "Y",
		"SHOW_SLIDE_PROP" => array(),
		"SHOW_TABS" => "Y",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ID",
		"SORT_DIRECTION" => "asc",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"SORT_PROP" => array("name"),
		"SORT_PROP_DEFAULT" => "name",
		"S_ASK_QUESTION" => "",
		"S_DETAIL_PRODUCT" => "Подробнее",
		"S_ORDER_PRODUCT" => "Заказать расчет стоимости",
		"S_ORDER_PROJECT" => "",
		"S_ORDER_SERVISE" => "",
		"TAGS_CLOUD_ELEMENTS" => "150",
		"TAGS_CLOUD_WIDTH" => "100%",
		"TEMPLATE_THEME" => "blue",
		"T_CHARACTERISTICS" => "",
		"T_DOCS" => "PDF - Каталоги.",
		"T_GALLERY" => "",
		"T_GOODS" => "",
		"T_PLANS" => "",
		"T_PROJECTS" => "",
		"T_REVIEWS" => "",
		"T_SERVICES" => "",
		"T_STUDY" => "",
		"T_VIDEO" => "",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "Y",
		"VIEW_TYPE" => "table"
	),
false,
Array(
	'ACTIVE_COMPONENT' => 'Y'
)
);?><br>
 <br>
 <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>