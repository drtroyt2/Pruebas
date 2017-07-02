<?
if(CModule::IncludeModule('iblock')){
	echo"test module";

$bs = new CIBlockSection;
$arFields = Array(
  "IBLOCK_ID" => 2,
  "NAME" => "Имя раздела",
  );
	$ID = $bs->Add($arFields);
	var_dump($ID);
}?>