<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Servises extends Controller_Common {
	
	public function action_index()
	{
		$this->template->title = __('Услуги');
		$this->template->description = __('Услуги');
		//показываем навигацию вверху страницы
		$navbar = View::factory('navbar');
		$this->template->navbar = $navbar;
		
		//картинку вверху не выводим
		$this->template->headerimage = '';
		
		//применяем одностраничный шаблон страницы
		$rows='';
		
		$img4 = new Model_Services4nav();
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
			$row = $img4->get_all()->as_array();
			if(count($row)>0)
			{
				$rows = $row;
				
			}
		}
		$content = View::factory('page1col')
		->bind('rows',$rows);
		$this->template->content = $content;
		
		
		
	}
	
}





















