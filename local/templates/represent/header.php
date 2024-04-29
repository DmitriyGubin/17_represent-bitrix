<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
    use Bitrix\Main\Page\Asset;

 	$GLOBALS['contacts'] =  Return_All_Fields_Props(
		Array("IBLOCK_ID"=>15, "ACTIVE"=>"Y"),
		Array()
	)[0]['props'];

	//debug($GLOBALS['contacts']);
?>

<!DOCTYPE html> 
<html>
<head>
	<?php $APPLICATION->ShowHead() ?>
	<title><?php $APPLICATION->ShowTitle() ?></title>
	<?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/styles.css');
        Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/jquery-3.6.0.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/maskedinput.js');

        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/fancybox/jquery.fancybox.min.css');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/fancybox/jquery.fancybox.min.js');

        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/functions.js');

        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libraries/slick/slick.min.js');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/slick/slick.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libraries/slick/slick-theme.css');
    ?>
</head>
<body>
	<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
	 <header>
		<div class="wrap">
			<a href="/">
				<img class="head_logo" src="<?= SITE_TEMPLATE_PATH ?>/img/logo.svg">
			</a>
			<div class="for-mobile">
				<ul class="menu">
					<!-- <li><a class="smoth_link" href="#about-scroll">О нас</a></li>
					<li><a class="smoth_link" href="#example-scroll">Отшиваем</a></li>
					<li><a href="#">Контакты</a></li> -->

					<?$APPLICATION->IncludeComponent("bitrix:menu", "menu_top", Array(
						"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
							"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
							"DELAY" => "N",	// Откладывать выполнение шаблона меню
							"MAX_LEVEL" => "1",	// Уровень вложенности меню
							"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
								0 => "",
							),
							"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
							"MENU_CACHE_TYPE" => "N",	// Тип кеширования
							"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
							"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
							"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
						),
						false
					);?>
				</ul>

				<div class="vk_phone">
					<div class="connect_box">
						<p class="connect_text">
							Подпишись,<br> 
							чтоб оставаться на связи
						</p>
						<div class="delimeter"></div>
						<a target="_blank" href="<?= $GLOBALS['contacts']['VK_REF']['VALUE']; ?>">
							<img class="header_vk" src="<?= SITE_TEMPLATE_PATH ?>/img/vk.svg">
						</a>
					</div>
					
					<?php $phone = $GLOBALS['contacts']['PHONE']['VALUE']; ?>
					<a class="head_phone" href="tel:<?= $phone; ?>">
						<?= $phone; ?>
					</a>
				</div>
			</div>

			<div class="mobile-burger hide">
            	<div class="top"></div>
            	<div class="middle"></div>
            	<div class="bottom"></div>
            </div>
		</div>
		<div style="display: none;" class="mobile_shade"></div>
	</header>