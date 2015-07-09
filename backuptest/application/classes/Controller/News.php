<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Common {
	
	public function action_index()
	{
		$this->template->title = __('Новости');
		$this->template->description = __('Новости');
		//показываем навигацию вверху страницы
		$navbar = View::factory('navbar');
		$this->template->navbar = $navbar;
		
		//картинку вверху не выводим
		$this->template->headerimage = '';
		
		//применяем одностраничный шаблон страницы
		$rows='';
		
		$img4 = new Model_Novosti();
		
		if(isset($_GET['id']) && $_GET['id']>0)
		{
			$id = (int) $_GET['id'];
			$row = $img4->selectbyid($id)->as_array();
			if(count($row)>0)
			{
				$rows = $row;
			}
			else
			{
				 HTTP::redirect(LANG . '/404'); 
			}
			
		}
		else
		{
			if(isset($_GET['id']))
			{
				//in browser ?id = mistake data
				HTTP::redirect(LANG . '/404');
			}
			else
			{
				$row = $img4->get_all()->as_array();
				if(count($row)>0)
				{
					$rows = $row;
					
				}
			}
		}
		$content = View::factory('page1col')
		->bind('rows',$rows);
		$this->template->content = $content;
		
		
		
	}
	
}





















