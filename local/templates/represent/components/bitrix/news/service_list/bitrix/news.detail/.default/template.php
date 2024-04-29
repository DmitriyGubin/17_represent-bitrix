<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

//debug($arResult);
$serv_name = $arResult['NAME'];

$APPLICATION->SetPageProperty("title", $serv_name);
$APPLICATION->SetTitle($serv_name);
?>
<section class="head-ban">
	<img class="head-ban-img" src="<?= $arResult['DETAIL_PICTURE']['SRC']; ?>">
	<div class="layer">
		<div class="wrap">
			<div class="text-box">
				<h1 class="title">
					<?= $serv_name; ?>
				</h1>
				<p class="sub-title">
					<?= $arResult['PROPERTIES']['TOP_SUBTITLE']['~VALUE']['TEXT']; ?>
				</p>

				<a data-fancybox="" data-src="#popup-order" href="javascript:;" class="univ-butt popup service" data-service="<?= $serv_name; ?>">
					Оставить заявку на пошив
				</a>		
			</div>
		</div>
	</div>
</section>

<section class="about wrap">
	<div class="text-box">
		<h2 class="title">
			<?= $arResult['NAME']; ?>
		</h2>
		<div class="sub-title">
		</div>

		<div class="about-text">
			<?= $arResult['PROPERTIES']['TEXT_UNDER_BANNER']['~VALUE']['TEXT']; ?>
		</div>

		<a data-fancybox="" data-src="#popup-order" href="javascript:;" class="univ-butt popup service" data-service="<?= $serv_name; ?>">
			Оставить заявку на пошив
		</a>
	</div>
	<?php $id_img = $arResult['PROPERTIES']['IMG_UNDER_BANNER']['VALUE']; ?>
	<img class="about-img" src="<?= \CFile::GetPath($id_img); ?>">
</section>

<?php $expls = $arResult['PROPERTIES']['EXAMPLES']['VALUE']; ?>
<?php if($expls != ''): ?>
<section class="galery wrap">
	<h1 class="title">Примеры работ</h1>
	<div class="gall_box">
	<?php foreach ($expls as $img_id): ?>
	<?php $path = CFile::GetPath($img_id); ?>
		<a class="gall_item" href="<?= $path; ?>" data-fancybox="gallery">
			<img class="obj-fit" src="<?= $path; ?>">
		</a>
	<?php endforeach; ?>
	</div>

	<div id="more_items_box">
		<!-- <div id="more_items">УВИДЕТЬ БОЛЬШЕ</div> -->
	</div>
	
</section>
<?php endif; ?>

<?php
	require($_SERVER["DOCUMENT_ROOT"].SITE_TEMPLATE_PATH.'/inclusion/save_catalog.php');
?>

<?php
	 $inserts =  Return_All_Fields_Props(
		Array("IBLOCK_ID"=>17, "ACTIVE"=>"Y"),
		Array()
	)[0]['props'];

	//debug($inserts);
?>

<section class="why_we wrap">
	<h2 class="title">Почему мы</h2>
	<div class="why_box">
	<?php foreach ($inserts['ADV']['~VALUE'] as $adv): ?>
		<div class="why_item">
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/why_item.svg">
			<div class="why_text">
				<?= $adv['TEXT']; ?>
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


<?php if($expls != ''): ?>
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
<?php endif; ?>




























<?php /* 
<div class="news-detail">
	<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
		<img
			class="detail_picture"
			border="0"
			src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
			width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
			height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
			alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
			title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<?endif?>
	<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
		<span class="news-date-time"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
	<?endif;?>
	<?if($arParams["DISPLAY_NAME"]!="N" && $arResult["NAME"]):?>
		<h3><?=$arResult["NAME"]?></h3>
	<?endif;?>
	<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && ($arResult["FIELDS"]["PREVIEW_TEXT"] ?? '')):?>
		<p><?=$arResult["FIELDS"]["PREVIEW_TEXT"];unset($arResult["FIELDS"]["PREVIEW_TEXT"]);?></p>
	<?endif;?>
	<?if($arResult["NAV_RESULT"]):?>
		<?if($arParams["DISPLAY_TOP_PAGER"]):?><?=$arResult["NAV_STRING"]?><br /><?endif;?>
		<?echo $arResult["NAV_TEXT"];?>
		<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?><br /><?=$arResult["NAV_STRING"]?><?endif;?>
	<?elseif($arResult["DETAIL_TEXT"] <> ''):?>
		<?echo $arResult["DETAIL_TEXT"];?>
	<?else:?>
		<?echo $arResult["PREVIEW_TEXT"];?>
	<?endif?>
	<div style="clear:both"></div>
	<br />
	<?foreach($arResult["FIELDS"] as $code=>$value):
		if ('PREVIEW_PICTURE' == $code || 'DETAIL_PICTURE' == $code)
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?
			if (!empty($value) && is_array($value))
			{
				?><img border="0" src="<?=$value["SRC"]?>" width="<?=$value["WIDTH"]?>" height="<?=$value["HEIGHT"]?>"><?
			}
		}
		else
		{
			?><?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?><?
		}
		?><br />
	<?endforeach;
	foreach($arResult["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>

		<?=$arProperty["NAME"]?>:&nbsp;
		<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
			<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
		<?else:?>
			<?=$arProperty["DISPLAY_VALUE"];?>
		<?endif?>
		<br />
	<?endforeach;
	if(array_key_exists("USE_SHARE", $arParams) && $arParams["USE_SHARE"] == "Y")
	{
		?>
		<div class="news-detail-share">
			<noindex>
			<?
			$APPLICATION->IncludeComponent("bitrix:main.share", "", array(
					"HANDLERS" => $arParams["SHARE_HANDLERS"],
					"PAGE_URL" => $arResult["~DETAIL_PAGE_URL"],
					"PAGE_TITLE" => $arResult["~NAME"],
					"SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
					"SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
					"HIDE" => $arParams["SHARE_HIDE"],
				),
				$component,
				array("HIDE_ICONS" => "Y")
			);
			?>
			</noindex>
		</div>
		<?
	}
	?>
</div>
*/?>