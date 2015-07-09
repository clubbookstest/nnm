<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contact extends Controller_Common {
	
	public function action_index()
	{
		$this->template->title = __('Контакты');
		$this->template->description = __('Контакты');
		
		$navbar = View::factory('navbar');
		$this->template->navbar = $navbar;
		
		$headerimage = View::factory('headerimage');
		$this->template->headerimage = '';
		$errors="";
		$goodreport=0;
		if($_POST)
		{
			$post = Validation::factory($_POST);
			$post -> rule(TRUE, 'not_empty')
					  -> rule('name', 'max_length', array(':value', 100))
					  -> rule('email', 'email')
					  -> rule('message', 'max_length', array(':value', 1255));
			if($post -> check())
			{
				if(mail('mischenkoa@ukr.net','Сообщение с сайта от '.$_POST['name']." с email ".$_POST['email'],$_POST['message'])){$goodreport=1;}
			}
			else
			{
				$errors = $post -> errors('comments');
			}
		}
		$content = View::factory('contact')
		->bind('errors',$errors)
		->bind('goodreport',$goodreport);
		$this->template->content = $content;
		
	}
	
}





















