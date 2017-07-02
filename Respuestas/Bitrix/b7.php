<?
Class academy_d8 extends CModule
{
    

	function __construct()
	{
		$this->MODULE_ID = 'academy.d8';
		$this->MODULE_NAME = "Тестовый модуль";
		$this->MODULE_DESCRIPTION = "Ничего пока делать не будет";

	}
	function DoInstall()
	{
		
            \Bitrix\Main\ModuleManager::registerModule($this->MODULE_ID);
	}
	function DoUninstall()
	{
		\Bitrix\Main\ModuleManager::unRegisterModule($this->MODULE_ID);
	}
    
}
?>