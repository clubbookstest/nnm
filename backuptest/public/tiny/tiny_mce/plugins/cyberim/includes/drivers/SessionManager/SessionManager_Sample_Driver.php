<?php
/*
  Защита от прямой загрузки
*/
defined('ACCESS') or die();

class SessionManager_Sample_Driver implements SessionManager_Driver{
	public function authorisation(){
		return true;
	}	
}
?>