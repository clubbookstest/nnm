<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_News extends Controller_Admin_Admincommon {
	
	public function action_index()
	{
		$errors='';
		$news = new Model_Novosti();
        if ($_POST)
        {
           if($_POST['add'])//подтвердили сохранение 
		   {
			   $post = Validation::factory($_POST);
			   $post -> rule(TRUE, 'not_empty')
					  -> rule('ItemName', 'max_length', array(':value', 255))
					  -> rule('ItemDesc', 'max_length', array(':value', 255));
					  
					  
				if($post -> check())
				{
					$news->create(strip_tags($_POST['ItemName']),strip_tags($_POST['ItemDesc']),strip_tags($_POST['ItemSrc']));
				}
				else
				{
					$errors = 'данные ошибочны';
				}	
			}
			if($_POST['rem'])
			{
				$id = $_POST['rem'];
				//получим имя картинки для физического удаления файла
				$str = $news->selectbyid($id)->as_array();
				
				$news->del($id);
			}
        }
        
		// Грузим view формы
         $content = View::factory('admin/news')
		 ->bind('errors',$errors)
		 ->bind('sitenews',$sitenews);
		 $this->template->content = $content;
		
		 $sitenews = $news->get_all();
	}
	//edit records
	public function action_edit()
	{
		$img4edit = new Model_Novosti();
		if($_POST)
		{
			 $post = Validation::factory($_POST);
			 $post -> rule(TRUE, 'not_empty')
					  -> rule('ItemName', 'max_length', array(':value', 255))
					  -> rule('ItemDesc', 'max_length', array(':value', 255));
					  
					  
			 if($post -> check())
			 {
				$img4edit->updat($_POST['id'],$_POST['ItemName'],$_POST['ItemDesc'],$_POST['ItemSrc']);
			 }
			 else
			 {
					$errors = 'данные ошибочны';
			 }	
			 $content = View::factory('admin/news')
			 ->bind('errors',$errors);
			 $this->template->content = $content;
		
		}
		
		if(isset($_GET['id']) && $_GET['id']>0)
		{
			$id = (int) $_GET['id'];
			
		
			$str = $img4edit->selectbyid($id);
			if(count($str)>0)
			{
				$content = View::factory('admin/editnews')
				->bind('onerow',$str);
				
				$this->template->content = $content;	
			}
			
				
		}
	
	}
	//end edit records
	
	
}





















