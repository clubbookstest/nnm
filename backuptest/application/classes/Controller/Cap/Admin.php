<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Cap_Admin extends Controller_Cap_Common {
	private $userNameFromIni;
	private $userPassFromIni;
	
	public function action_index()
	{
		$content = View::factory('/cap/login')
		->bind('name',$name)
		->bind('errors',$errors)
		->bind('dineded',$denided);
		$name = 'Администратор';
		
		
		if($_POST)
        {
			$username = trim($_POST['username']);
			
			$password = trim($_POST['password']);
			
			$post = Validation::factory($_POST);
			$post -> rule(TRUE, 'not_empty')
				  -> rule('username', 'max_length', array(':value', 255))
				  -> rule('password', 'max_length', array(':value', 255));
				  
			if($post -> check())
		    {
				$auth = Auth::instance();
				$arr = $this->obj2array($auth);
				//если файл драйвер ORM
				$arr = $this->obj2array($arr['_config']);
				//echo '<pre>'; 
				//print_r($arr['users']);
				//echo '</pre>'; 
				//die;	
				//foreach ($arr['_users'] as $k=>$v)
				foreach ($arr['users'] as $k=>$v)
				{
					 $this->userNameFromIni = $k;
					 $this->userPassFromIni = $v;
				}
					
				if($username==$this->userNameFromIni && $password==$this->userPassFromIni)
				{
					//логин и пароль совпадают осуществляем вход	
						 $session = Session::instance();
						 $session->set('username',$username);
						 //echo $session->get('username');
						 $this->redirect("admin/admin");
						 //echo __('login good');
						
				}
				else
				{
					$denided = 'password or logon is incorrect';
				}
				
			}
			else
			{
				//пароль и логин не прошли валидацию
				$errors = $post -> errors('comments');
			}	
			
		}
 
		
		$this->template->content = $content;
		
	}
	public function obj2array($object) 
	{
		$ref = new ReflectionObject($object);
		$props = $ref->getProperties();
		$obj2array = array();
		foreach ($props as $prop) 
		{
			$prop->setAccessible(true); //Открываем доступ к закрытым свойствам
			$obj2array[$prop->getName()] = $prop->getValue($object); 
		}
		return $obj2array;
	}
	
}





















