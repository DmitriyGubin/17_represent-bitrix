<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Галерея");

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addCss("/gallery/css/styles.css");

$photos = Return_All_Fields_Props(
		Array("IBLOCK_ID"=>18, "ACTIVE"=>"Y"),
		Array()
	)[0]['props']['EXAMPLES']['VALUE'];

//debug($photos);
?>

<section class="galery wrap">
	<h1 class="title">Мы отшиваем</h1>
	<div class="gall_box">
	<?php foreach ($photos as $photo_id): ?>
	<?php $photo_path = CFile::GetPath($photo_id); ?>
		<a class="gall_item" href="<?= $photo_path; ?>" data-fancybox="gallery">
			<img class="obj-fit" src="<?= $photo_path; ?>">
		</a>
	<?php endforeach; ?>
	</div>

	<div id="more_items_box">
		<!-- <div id="more_items">УВИДЕТЬ БОЛЬШЕ</div> -->
	</div>
</section>

<?php
	require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/inclusion/quest_form.php');
?>

<script type="text/javascript">
	if(screen.width < 750)
	{
		var first_items = 2;
		var delta = 2;
	}
	else
	{
		var first_items = 3;
		var delta = 3;
	}
	Create_More_Items_System(first_items, delta, '#more_items_box', '.galery .gall_item', 'hide');
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>