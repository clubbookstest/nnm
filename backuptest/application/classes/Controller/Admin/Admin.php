<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Admin extends Controller_Admin_Admincommon {
	
	public function action_index()
	{
		$content = View::factory('admin/page')
		->bind('name',$name);
		$name = 'Администратор';
		
		$this->template->content = $content;
		
	}
	
}





















