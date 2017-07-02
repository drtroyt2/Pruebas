<?
AddEventHandler("main", "OnPanelCreate", Array("MyClass", "OnPanelCreateHandler"));
class MyClass
{
    // добавим кнопку в панель управления
    function OnPanelCreateHandler()
    {
		 global $APPLICATION;
		 $arMenu = array(); // подпункты меню
		 $arMenu[] = array(
            "TEXT"  => '<strong>Вызвать скрипт</strong>',
            "ICON"  => "panel-edit-text", //иконка пункта
            "ACTION" => 'alert("dsfhkhsd")',
        );
		 $APPLICATION->AddPanelButton(
            array(
                "ID" => "ID кнопки", //определяет уникальность кнопки
                "TEXT" 		=> "<i>1c-bitrix.ru</i>",
                "TYPE"		=> "BIG", //BIG - большая кнопка, иначе маленькая
                "ICON" => "bx-panel-site-wizard-icon", //название CSS-класса с иконкой кнопки
                "HREF"      => "http://1c-bitrix.ru", // ссылка на кнопке или javascript:MyJSFunction())
				"MENU" => $arMenu,
            ),
            $bReplace = false //перетереть существующую кнопку новыми данными?
        );
	}
}
?>