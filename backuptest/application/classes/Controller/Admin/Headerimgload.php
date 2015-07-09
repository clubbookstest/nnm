<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Headerimgload extends Controller_Admin_Admincommon {
	
	public function action_index()
	{
		
		/*$c=0; // количество файлов 
		$path = array();
		$dir=DOCROOT.'public/img/headerimg/';
		$d=dir($dir); // 
		while($str=$d->read())
		{ 
			if($str{0}!='.' && $str{0}!='..')
			{ 
				$c++; 
				$path[] = URL::site().'public/img/headerimg/'.$str;
			} 
		} 
		$d->close(); */
		//print_r($path);die;
		
		$content = View::factory('admin/headerimgload')
		->bind('errors',$errors);
		//->bind('path',$path)
		//->bind('count',$c);
		if($_POST)
		{
			
			if (is_uploaded_file($_FILES['upfile']['tmp_name']))
			{
				if(!move_uploaded_file($_FILES['upfile']['tmp_name'],DOCROOT.'public/img/headerimg/'.$_FILES['upfile']['name']))
				{
					$errors = 'Не могу получить доступ на сервере к папке с изображениями, файл не перенесен, проверьте права доступа на папку /public/img/headerimg/';
				}
				else
				{
					$errors = '';
				}
				
				
			}
			else
			{
				$errors = 'Не могу загрузить картинку на сервер. Проверьте картинку.';
			}
			if(isset($_POST['delcheck']))
			{
				unlink(DOCROOT.'public/img/headerimg/'.$_POST['delcheck']);
				$errors = '';
			}
		}
		
		$this->template->content = $content;
		
	}
	
}





















