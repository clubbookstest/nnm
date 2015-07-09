<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reviews extends Controller_Common {
	
	public function action_index()
	{
		$this->template->title = __('Отзывы');
		$this->template->description = __('Отзывы');
		//показываем навигацию вверху страницы
		$navbar = View::factory('navbar');
		$this->template->navbar = $navbar;
		$moderate='';
		//картинку вверху не выводим
		$this->template->headerimage = '';
		
		//применяем одностраничный шаблон страницы
		$rows='';
		
		$messaga = new Model_Review();
		$rows=$messaga->get_all();
		if($_POST)
		{
			$post = Validation::factory($_POST);
			$post -> rule(TRUE, 'not_empty')
					  -> rule('name', 'max_length', array(':value', 100))
					  -> rule('mark', 'max_length', array(':value', 20));
			if($post -> check())
			{
				$messaga->create($_POST['name'],$_POST['message'],$_POST['mark']);
				$moderate = 1;
			}
			else
			{
				$errors = $post -> errors('comments');
			}
		}
		
		$content = View::factory('reviews')
		->bind('rows',$rows)
		->bind('moderate',$moderate);
		$this->template->content = $content;
		
		
		
	}
	
}





















