<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Start extends Controller_Common {
	
	public function action_index()
	{
		$contimg4nav=array();
		$sitenews=array();
		$errors='';
		$reviews='';
		if($_POST)
		{
			$post = Validation::factory($_POST);
			$post -> rule('username', 'not_empty')
				  -> rule('password','not_empty')	
				  -> rule('username', 'max_length', array(':value', 100))
				  -> rule('password', 'max_length', array(':value', 20));
			if($post -> check())
			{
				try {
                    
					 $username = strip_tags($_POST['username']);
					 $password = strip_tags($_POST['password']);
					
					 $userstatus = Auth::instance()->login($username, $password);
					 
					
					}
					catch (ORM_Validation_Exception $e)
					{
						$errors = $e->errors('models');
					}
			}
			else
			{
				$errors = $post -> errors('comments');
			}
			
			
		}
		$navbar = View::factory('navbar')
		->bind('errors',$errors);
		
		$this->template->navbar = $navbar;
		
		$headerimage = View::factory('headerimage')
		->bind('pathtoimg',$pathtoimg);
		$this->template->headerimage = $headerimage;
		
		$content = View::factory('content')
		->bind('contimg4nav',$contimg4nav)//получили данные о 4 навигационных меню
		->bind('qtyblock',$qtyblock)
		->bind('qtyim',$qtyim)
		->bind('sitenews',$sitenews)
		->bind('reviews',$reviews);
		$this->template->content = $content;
		
		//для 4 услуг вверху страницы
		$img4 = new Model_Services4nav();
		$contimg4nav = $img4->get_all();
		$qtyim = count($contimg4nav);
		if($qtyim==''){$qtyim=4;}
		//определим разметку страницы, сколько блоков строим для foundation
		switch ($qtyim) 
		{
			case 0:
				$qtyblock = 3;$qtyim=4;//вывод 4 блоков, будут пустые в цикле по 4
				break;
			case 1:
				$qtyblock = 6;$qtyim=2;//вывод 2 блоков в цикле по 2
				break;
			case 2:
				$qtyblock = 6;//вывод 2 блоков
				break;
			case 3:
				$qtyblock = 4;//вывод 3 блоков
				break;
			case 4:
				$qtyblock = 3;//вывод 4 блокa
				break;	
			default:
				$qtyblock = 3;//вывод 4 блоков, если записей больше 4
		}
		$news= new Model_Novosti();
		$sitenews = $news->get_all();
		
		//показываем на главной странице три отзыва
		$rev = new Model_Review();
		$reviews = $rev->get_all_main();
		//print_r($contimg4nav);	
		/*$footer = View::factory('footer');
		$this->template->headerimage = $footer;
		*/
		//получаем путь к картинке в шапке сайта
		$pathtoimg=$this->getHeaderImg();
	}
	public function action_logout()
	{
		Auth::instance()->logout();
		$this->redirect(LANG . '/');
	}
	
}





















