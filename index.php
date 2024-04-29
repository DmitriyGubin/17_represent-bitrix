<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Швейный цех REPRESENT");
$APPLICATION->SetPageProperty("title", "Швейный цех REPRESENT");
$APPLICATION->SetPageProperty("keywords", "Швейный цех REPRESENT");
$APPLICATION->SetPageProperty("description", "Швейный цех REPRESENT");
$APPLICATION->SetTitle("Швейный цех REPRESENT");

$page = $APPLICATION->GetCurPage();
$check_main_page = ($page == '/');

$inserts =  Return_All_Fields_Props(
		Array("IBLOCK_ID"=>16, "ACTIVE"=>"Y"),
		Array()
	)[0]['props'];
//debug($inserts);
?> 

<?php if($check_main_page): ?>
<section class="head-ban">
	<img class="head-ban-img" src="<?=\CFile::GetPath($inserts['TOP_BAN_IMG']['VALUE']);?>">
	<div class="layer">
		<div class="wrap">
			<div class="text-box">
				<h1 class="title">
					<?= $inserts['TOP_BAN_TITLE']['~VALUE']['TEXT']; ?>
				</h1>
				<p class="sub-title">
					<?= $inserts['TOP_BAN_SUB_TITLE']['~VALUE']['TEXT']; ?>
				</p>

				<a data-fancybox="" data-src="#popup-order" href="javascript:;" class="univ-butt popup all">
					Оставить заявку на пошив
				</a>
			</div>
		</div>
	</div>
</section>

<section class="about wrap" id="about-scroll">
	<div class="text-box">
		<h2 class="title">
			<?= $inserts['ABOUT_TITLE']['~VALUE']['TEXT']; ?>
		</h2>
		<div class="sub-title">
			<?= $inserts['ABOUT_SUB_TITLE']['~VALUE']['TEXT']; ?>
		</div>

		<div class="about-text">
			<?= $inserts['ABOUT_TEXT']['~VALUE']['TEXT']; ?>
		</div>

		<a data-fancybox="" data-src="#popup-order" href="javascript:;" class="univ-butt popup all">
			Оставить заявку на пошив
		</a>
	</div>
	<img class="about-img" src="<?= \CFile::GetPath($inserts['ABOUT_IMG']['VALUE']); ?>">
</section>
<?php endif; ?>

<?$APPLICATION->IncludeComponent("bitrix:news", "service_list", Array(
	"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"DETAIL_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
		"DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
		"DETAIL_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "TOP_SUBTITLE",
			2 => "TEXT_UNDER_BANNER",
			3 => "IMG_UNDER_BANNER",
			4 => "EXAMPLES",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "N",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "14",	// Инфоблок
		"IBLOCK_TYPE" => "CONTENT",	// Тип инфоблока
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"LIST_FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"LIST_PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
		"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
		"NEWS_COUNT" => "100",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => "round",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела
		"USE_CATEGORIES" => "N",	// Выводить материалы по теме
		"USE_FILTER" => "N",	// Показывать фильтр
		"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
		"USE_RATING" => "N",	// Разрешить голосование
		"USE_REVIEW" => "N",	// Разрешить отзывы
		"USE_RSS" => "N",	// Разрешить RSS
		"USE_SEARCH" => "N",	// Разрешить поиск
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"COMPONENT_TEMPLATE" => ".default",
		"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "",
			"detail" => "#ELEMENT_CODE#/",
		)
	),
	false
);?>

<?php if($check_main_page): ?>

<?php
	require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/inclusion/save_catalog.php');
?>

<section class="examples" id="example-scroll">
	<div class="wrap">
		<h2 class="title">
			Мы отшиваем
		</h2>

		<div class="ex-box">
		<?php foreach ($inserts['EXAMPLES']['VALUE'] as $key => $value): ?>
		<?php $img_path = CFile::GetPath($value); ?>
			<div class="ex-item">
				<a class="img-box" href="<?= $img_path; ?>" data-fancybox="gallery">
					<img class="obj-fit ex-img" src="<?= $img_path; ?>">
				</a>

				<div class="ex-name">
					<?= $inserts['EXAMPLES']['DESCRIPTION'][$key]; ?>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="why" id="why-scroll">
	<div class="wrap">
		<div class="top_box">
			<div class="left_text">
				<h2 class="title">
					<?= $inserts['WHY_TOP_TITLE']['~VALUE']['TEXT']; ?>
				</h2>

				<p class="why_sub_title">
					<?= $inserts['WHY_TOP_SUB_TITLE']['~VALUE']['TEXT']; ?>
				</p>

				<div class="why_text">
					<?= $inserts['WHY_TOP_TEXT']['~VALUE']['TEXT']; ?>
				</div>
			</div>
			<img class="top_box_img" src="<?= CFile::GetPath($inserts['WHY_TOP_IMG']['VALUE']); ?>">
		</div>

		<div class="down_box">
			<div class="imgs_box">
				<img class="pair" src="<?= CFile::GetPath($inserts['WHY_BOTTOM_LEFT_IMG']['VALUE']); ?>">
				<img class="pair" src="<?= CFile::GetPath($inserts['WHY_BOTTOM_RIGHT_IMG']['VALUE']); ?>">
			</div>

			<div class="right_text">
				<p class="why_sub_title">
					<?= $inserts['WHY_BOTTOM_SUB_TITLE_TOP']['~VALUE']['TEXT']; ?>
				</p>

				<div class="why_text">
					<?= $inserts['WHY_BOTTOM_TEXT']['~VALUE']['TEXT']; ?>
				</div>

				<p class="why_sub_title down">
					<?= $inserts['WHY_BOTTOM_SUB_TITLE_BOTTOM']['~VALUE']['TEXT']; ?>
				</p>
			</div>
		</div>
	</div>
</section> 

<section class="stages wrap" id="stages-scroll">
	<h2 class="title">
		Этапы работы
	</h2>

	<div class="stage_box">
	<?php $j = 0; ?>
	<?php foreach ($inserts['STAGES']['~VALUE'] as $stage): ?>
	<?php 
		$j++;
		$arr = explode('%%%', $stage['TEXT']);
	?>
		<div class="stage_item">
			<div class="raund"><?= $j; ?></div>
			<h2 class="stage_title"><?= $arr[0]; ?></h2>
			<div class="stage_text">
				<?= $arr[1]; ?>
			</div>
		</div>
	<?php endforeach; ?>
	</div>
</section>

<?php
	require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/inclusion/quest_form.php');
?>

<?php
	require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/inclusion/map.php');
?>

<?php endif; ?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>