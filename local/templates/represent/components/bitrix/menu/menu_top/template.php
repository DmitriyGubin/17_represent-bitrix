<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<style type="text/css">
	.active_menu
	{
		color: #ffcc66 !important;
	}
</style>

<?php 

$page = $APPLICATION->GetCurPage();
$check_main_page = ($page == '/');

//debug($arResult);
?>

<?if (!empty($arResult)):?>

<?foreach($arResult as $arItem): ?>
<?php 
	$link = $arItem["LINK"];
	$smoth = ($arItem["LINK"][0] == '#');
	if(!$check_main_page and $smoth)
	{
		$link = '/'.$link;
	}
?>
<li>
	<a class="
	<?= $arItem["SELECTED"]?'active_menu':null; ?> 
	<?= $smoth?'smoth_link':null; ?>
	" href="<?= $link; ?>">
		<?=$arItem["TEXT"]?>
	</a>
</li>
<?endforeach?>

<?endif?>