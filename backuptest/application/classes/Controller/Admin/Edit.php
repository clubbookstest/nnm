<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Edit extends Controller_Admin_Admincommon {
	
	public function action_index()
	{
		$id = $this->request->param('edit');
		echo '$id'.$id;
		
		$content = View::factory('admin/edit')
		->bind('name',$name);
		$name = 'Администратор';
		
		$this->template->content = $content;
		
	}
	
}





















