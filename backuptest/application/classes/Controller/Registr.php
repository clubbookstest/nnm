<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Registr extends Controller_Common {
	
	public function action_index()
	{
		$this->template->title = __('Регистрация');
		$this->template->description = __('Регистрация');
		
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
					  -> rule('username', 'max_length', array(':value', 100))
					  -> rule('email', 'email')
					  -> rule('password', 'max_length', array(':value', 20));
			if($post -> check())
			{
				//
				try {
                     //$user = ORM::factory('User');
					 //print_r($user);die;
					 
					 $user = ORM::factory('User')
					->values($_POST, array('username','email','password'))
					->create();
					 //echo 'insert';die;
					 
					 
 
            
					$user->add('roles',ORM::factory('Role',array('name'=>'login')));
					$to=$_POST['email'];
 					mail("$to",'Site Registration '.URL::site(),'Registration successfull , Login: '.$_POST['username'].' password: '.$_POST['password']);
 					$this->redirect(LANG . '/');
					
					}
					catch (ORM_Validation_Exception $e)
					{
					$errors = $e->errors('models');
					// echo Debug::vars($e);
					}
				//
			}
			else
			{
				$errors = $post -> errors('comments');
			}
		}
		$content = View::factory('registr')
		->bind('errors',$errors)
		->bind('goodreport',$goodreport);
		$this->template->content = $content;
		
	}
	
}





















