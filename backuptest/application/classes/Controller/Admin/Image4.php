<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Image4 extends Controller_Admin_Admincommon {
	
	public function action_index()
	{
		$errors='';
		$img4 = new Model_Services4nav();
        if ($_POST)
        {
           if($_POST['add'])//подтвердили сохранение 
		   {
			   $post = Validation::factory($_POST);
			   $post -> rule('ItemName', 'not_empty')
					  -> rule('ItemName', 'max_length', array(':value', 255))
					  -> rule('ItemDesc', 'max_length', array(':value', 255))
					  -> rule('upfile', 'max_length', array(':value', 255));
					  
				if($post -> check())
				{
					
						if (is_uploaded_file($_FILES['upfile']['tmp_name']))
						{
							move_uploaded_file($_FILES['upfile']['tmp_name'],DOCROOT.'public/img/image4/'.$_FILES['upfile']['name']);
							$img4->create(strip_tags($_POST['ItemName']),$_POST['ItemDesc'],$_FILES['upfile']['name'],$_POST['ItemLink']);
						}
					
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
				$str = $img4->selectbyid($id)->as_array();
				if($str[0]['imag']!='')
				{
					if(file_exists(DOCROOT.'public/img/image4/'.$str[0]['imag']))
					{
						unlink(DOCROOT.'public/img/image4/'.$str[0]['imag']);
					}
				}
				$img4->del($id);
			}
        }
        
		// Грузим view формы
         $content = View::factory('admin/image4')
		 ->bind('contimg4nav',$contimg4nav)
		 ->bind('errors',$errors);
		 $this->template->content = $content;
		
		 $contimg4nav = $img4->get_all();
		
	}
	public function action_edit()
	{
		$img4edit = new Model_Services4nav();
		if($_POST)
		{
			 $post = Validation::factory($_POST);
			 $post -> rule('ItemName', 'not_empty')
					  -> rule('ItemName', 'max_length', array(':value', 255))
					  -> rule('ItemDesc', 'max_length', array(':value', 255))
					  -> rule('upfile', 'max_length', array(':value', 255));
					  
			 if($post -> check())
			 {
					//print_r($_POST);die;
					//if($_POST['upfile']!='')
					//{
						if (is_uploaded_file($_FILES['upfile']['tmp_name']))
						{
							if(file_exists(DOCROOT.'public/img/image4/'.$_POST['imag']))
							{
								unlink(DOCROOT.'public/img/image4/'.$_POST['imag']);
							}
							move_uploaded_file($_FILES['upfile']['tmp_name'],DOCROOT.'public/img/image4/'.$_FILES['upfile']['name']);
							$img4edit->updat($_POST['id'],$_POST['ItemName'],$_POST['ItemDesc'],$_FILES['upfile']['name'],$_POST['ItemLink']);
						}
					//}
					else
					{
						$img4edit->updat($_POST['id'],$_POST['ItemName'],$_POST['ItemDesc'],$_POST['imag'],$_POST['ItemLink']);
					}
			 }
			 else
			 {
					$errors = 'данные ошибочны';
			 }	
			 $content = View::factory('admin/image4')
			 ->bind('errors',$errors);
			 $this->template->content = $content;
		
		}
		
		if(isset($_GET['id']) && $_GET['id']>0)
		{
			$id = (int) $_GET['id'];
			
		
			$str = $img4edit->selectbyid($id);
			if(count($str)>0)
			{
				$content = View::factory('admin/edit')
				->bind('onerow',$str);
				
				$this->template->content = $content;	
			}
			
				
		}
		
		
		
		
		
		
	}
	
	
}





















