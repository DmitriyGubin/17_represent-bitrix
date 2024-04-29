<?php

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

foreach ($_POST as $key => $value) 
{
	$_POST[$key] = trim($value);
}

$arResult = array('status' => false);

//$arResult['dataa'] = $_POST;

$delimeter = $_POST['delimiter'];

$PROP = array();
$PROP['NAME'] = $_POST['name'];
$PROP['PHONE'] = $_POST['phone'];
$PROP['HTTP_REFERER'] = $_SERVER['HTTP_REFERER'];


if($delimeter == 'Форма остались вопросы')
{
	if(CEvent::Send("QUEST_FORM", "s1", $PROP))
	{
		$arResult['status'] = true;
	}
}

if($delimeter == 'Заявка на пошив')
{
	if(CEvent::Send("JOB_APP", "s1", $PROP))
	{
		$arResult['status'] = true;
	}
}

if($delimeter == 'Заявка на услугу')
{
	$PROP['SERV'] = $_POST['service'];
	if(CEvent::Send("SERV_APP", "s1", $PROP))
	{
		$arResult['status'] = true;
	}
}

echo json_encode($arResult);
?>