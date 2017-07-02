<?
AddEventHandler("main","OnPanelCreate", Array("MyClass", "OnPanelCreateHandler"));
class MyClass
{
    // добавим кнопку в панель управления
    function OnPanelCreateHandler()
    {
		 global $APPLICATION;
		 $APPLICATION->AddPanelButton(
            array(
                "ID" => "ID кнопки", //определяет уникальность кнопки
                "TEXT" 		=> "<i>1c-bitrix.ru</i>",
                "TYPE"		=> "BIG", //BIG - большая кнопка, иначе маленькая
                "ICON" => "bx-panel-site-wizard-icon", //название CSS-класса с иконкой кнопки
                "HREF"      => "http://1c-bitrix.ru", // ссылка на кнопке или javascript:MyJSFunction())
            ),
            $bReplace = false //перетереть существующую кнопку новыми данными?
        );
	}
}
?>