<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss("/contacts/css/styles.css");
?>

<section class="contacts">
	<div class="wrap">
		<h1 class="title">Как нас найти</h1>
		<div class="cont_line">
			<div class="cont_item">
				<h2 class="cont_title">
					Адрес:
				</h2>
				<div class="cont_text">
					<?= $GLOBALS['contacts']['ADDRESS']['VALUE']; ?><br>
					<?= $GLOBALS['contacts']['POST_INDEX']['VALUE']; ?>
				</div>
			</div>

			<div class="cont_item middle">
				<h2 class="cont_title">
					Время работы:
				</h2>
				<div class="cont_text">
					Будние дни <br>
					<?= $GLOBALS['contacts']['WORK_TIME']['VALUE']; ?>
				</div>
			</div>

			<div class="cont_item">
				<h2 class="cont_title">
					Телефон:
				</h2>
				<div class="cont_text">
					<?php $phone = $GLOBALS['contacts']['PHONE']['VALUE']; ?>
		            <a href="tel:<?= $phone; ?>">
		                <?= $phone ?>
		            </a>
				</div>
			</div>
		</div>
	</div>
	<div class="social">
		<div class="wrap">
			<div class="soc_line">
				<span class="soc_line_title">
					Наши соцсети:
				</span>
				<a target="_blank" href="<?= $GLOBALS['contacts']['VK_REF']['VALUE']; ?>">
					<img class="soc_item" src="img/vkontakte.svg">
				</a>
			</div>

			<div class="soc_line">
				<span class="soc_line_title">
					Написать нам:
				</span>

				<a href="mailto:<?= $GLOBALS['contacts']['MAIL']['VALUE']; ?>">
					<img class="soc_item" src="img/email.svg">
				</a>

				<a target="_blank" href="https://wa.me/<?= $GLOBALS['contacts']['WATSAPP']['VALUE']; ?>">
					<img class="soc_item" src="img/whatsapp.svg">
				</a>
			</div>
		</div>
	</div>
	<div class="map_point" style="display: none;">
		<div id="x_coord"><?= $GLOBALS['contacts']['X_COORD']['VALUE']; ?></div>
		<div id="y_coord"><?= $GLOBALS['contacts']['Y_COORD']['VALUE']; ?></div>
		<div id="ballon"><?= $GLOBALS['contacts']['BALLON']['VALUE']; ?></div>
	</div>
	
	<div id="cont_map"></div>
</section>

<?php
	require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/inclusion/quest_form.php');
?>

<style type="text/css">
	.quest
	{
	  margin-top: 0px !important;
	}
</style>

<script type="text/javascript" src="https://api-maps.yandex.ru/2.1/?apikey=2750cb15-81ed-4ea8-a8d2-e1e7c2d7e5e2&lang=ru_RU"></script>

<script type="text/javascript" src="js/main.js"></script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>