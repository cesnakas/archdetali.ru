<?php

$arSelectField = Array("ID","NAME","PROPERTY_UNIC_DESCRIPTION");
$arFilterField = Array(
	"IBLOCK_ID" => $arParams["IBLOCK_ID"],
	"CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"]
);
$res = CIBlockElement::GetList(Array(), $arFilterField, false, false, $arSelectField);
while($ob = $res->GetNextElement())
{
 $arFields = $ob->GetFields();
 if ($arFields["PROPERTY_UNIC_DESCRIPTION_VALUE"]) {
 	$important_description = $arFields["PROPERTY_UNIC_DESCRIPTION_VALUE"];
 }
}

$ttt = $APPLICATION->GetPageProperty('custom_description');
if ( ($arParams["IBLOCK_ID"] == 60) && ($APPLICATION->GetPageProperty('description')!=$ttt) && (!(empty($ttt))) )  {

		$APPLICATION->SetPageProperty("description",$APPLICATION->GetPageProperty('description')); 

} else {

	if ($important_description) {
		$APPLICATION->SetPageProperty("description",$important_description);
	}
	else {
		$APPLICATION->SetPageProperty("description",$APPLICATION->GetTitle().'. ����. ���������� ������� ���������� � ������ �� ��������������� ����� �� �������� "����-������".');
	}
	if ($arParams["IBLOCK_ID"] == 75) {
		$APPLICATION->SetPageProperty("description",$APPLICATION->GetTitle().'. ���������� ������� ���������� � ������ �� ��������������� ����� �� �������� "����-������".');
	}

}