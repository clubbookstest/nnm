<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Common {
	
	public function action_index()
	{
		$navbar = View::factory('navbar');
		$this->template->navbar = $navbar;
		$rows='';
		//$headerimage = View::factory('headerimage');
		$this->template->headerimage = '';
		
		$about = new Model_About();
		$row = $about->get_all()->as_array();
		if(count($row)>0)
		{
			$rows = $row;
		}
		
		$content = View::factory('page1col')
		->bind('rowsabout',$rows);
		$this->template->content = $content;
		
		$this->template->title = __('О нас');
		$this->template->description = __('О нас');
		/*$footer = View::factory('footer');
		$this->template->headerimage = $footer;*/
		
	}
	
}





















