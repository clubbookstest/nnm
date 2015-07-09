<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Admin_Admincommon extends Controller_Template{
	public $template = 'admin/admin';
	
    public function before()
    {
        parent::before();
		$session = Session::instance();
		$isAuth = $session->get('username');
		if(isset($isAuth) && $isAuth!='')
		{
			View::set_global('title', 'Админка сайта');				
			View::set_global('description', 'Админка сайта');
			$this->template->styles = array('adminstyle');
			$this->template->scripts = array('jquery','scripts');
			$this->template->content = '';
		}
		else
		{
			$this->redirect("cap/admin");
		}
     
    }
}





















