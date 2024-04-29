<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<style type="text/css">
	.active_menu
	{
		color: #ffcc66 !important;
	}
</style>

<?php

$num = 4;//максимальное количество пунктов в левой колонек меню
$page = $APPLICATION->GetCurPage();
$check_main_page = ($page == '/');

?>

<?if (!empty($arResult)):?>

<ul class="one-menu">
<? for ($i = 0; $i <= ($num-1); $i++): ?>
<?php 
	$link = $arResult[$i]["LINK"];
	$smoth = ($link[0] == '#');
	if(!$check_main_page and $smoth)
	{
		$link = '/'.$link;
	}
?>
<li>
	<a class="
	<?= $arResult[$i]["SELECTED"]?'active_menu':null; ?> 
	<?= $smoth?'smoth_link':null; ?>
	" href="<?= $link; ?>">
		<?=$arResult[$i]["TEXT"];?>
	</a>
</li>
<?endfor;?>
</ul>

<?php if(isset($arResult[$num])): ?>
<?php $menu_len = count($arResult); ?>
	<ul class="two-menu">
	<? for ($i = $num; $i <= ($menu_len-1); $i++): ?>
	<?php 
		$link = $arResult[$i]["LINK"];
		$smoth = ($link[0] == '#');
		if(!$check_main_page and $smoth)
		{
			$link = '/'.$link;
		}
	?>
	<li>
		<a class="
		<?= $arResult[$i]["SELECTED"]?'active_menu':null; ?> 
		<?= $smoth?'smoth_link':null; ?>
		" href="<?= $link; ?>">
			<?=$arResult[$i]["TEXT"];?>
		</a>
	</li>
	<?endfor;?>
	</ul>
<?php endif; ?>

<?endif?>