<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Услуги");
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news",
	"main_template",
	array(
		"IBLOCK_TYPE" => "aspro_optimus_content",
		"IBLOCK_ID" => "50",
		"NEWS_COUNT" => "20",
		"USE_SEARCH" => "N",
		"USE_RSS" => "N",
		"USE_RATING" => "N",
		"USE_CATEGORIES" => "N",
		"USE_REVIEW" => "N",
		"USE_FILTER" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"CHECK_DATES" => "Y",
		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/services/",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"SET_TITLE" => "N",
		"PRICE_CODE" => array(
			0 => "BASE",
			1 => "",
		),
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_PERMISSIONS" => "N",
		"PREVIEW_TRUNCATE_LEN" => "",
		"LIST_ACTIVE_DATE_FORMAT" => "j F Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_PICTURE",
			2 => "DETAIL_PICTURE",
			3 => "DATE_ACTIVE_FROM",
			4 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "PERIOD",
			2 => "",
		),
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"DISPLAY_NAME" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_FIELD_CODE" => array(
			0 => "PREVIEW_PICTURE",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"DETAIL_PROPERTY_CODE" => array(
			0 => "LINK",
			1 => "PRICE",
			2 => "MORE_PHOTO",
			3 => "",
		),
		"IBLOCK_CATALOG_TYPE" => "aspro_optimus_catalog",
		"CATALOG_IBLOCK_ID1" => "51",
		"CATALOG_IBLOCK_ID2" => "",
		"CATALOG_IBLOCK_ID3" => "",
		"DISPLAY_DATE" => "Y",
		"SHOW_FAQ_BLOCK" => "Y",
		"SHOW_BACK_LINK" => "Y",
		"GALLERY_PROPERTY" => "MORE_PHOTO",
		"SHOW_GALLERY" => "Y",
		"LINKED_PRODUCTS_PROPERTY" => "LINK",
		"SHOW_LINKED_PRODUCTS" => "Y",
		"PRICE_PROPERTY" => "PRICE",
		"SHOW_PRICE" => "Y",
		"PERIOD_PROPERTY" => "PERIOD",
		"SHOW_PERIOD" => "N",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_PAGER_TITLE" => "",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"PAGER_TEMPLATE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"CATALOG_FILTER_NAME" => "arrProductsFilter",
		"AJAX_OPTION_ADDITIONAL" => "",
		"COMPONENT_TEMPLATE" => "main_template",
		"SET_LAST_MODIFIED" => "N",
		"ADD_ELEMENT_CHAIN" => "Y",
		"IS_VERTICAL" => "N",
		"DETAIL_SET_CANONICAL_URL" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"SHOW_SERVICES_BLOCK" => "Y",
		"DETAIL_STRICT_SECTION_CHECK" => "N",
		"USE_SHARE" => "Y",
		"GET_YEAR" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"SHOW_CHILD_SECTIONS" => "Y",
		"LINKED_ELEMENST_PAGE_COUNT" => "20",
		"LIST_VIEW" => "slider",
		"SHOW_ITEM_SECTION" => "N",
		"DEPTH_LEVEL_BRAND" => "3",
		"SHOW_OLD_PRICE" => "N",
		"PRICE_VAT_INCLUDE" => "Y",
		"USE_PRICE_COUNT" => "N",
		"SHOW_MEASURE" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_DISCOUNT_PERCENT_NUMBER" => "N",
		"CONVERT_CURRENCY" => "N",
		"STORES" => array(
			0 => "",
			1 => "",
		),
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
