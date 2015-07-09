<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_About extends Controller_Admin_Admincommon {
	
	public function action_index()
	{
		$errors='';
		$about = new Model_About();
        if ($_POST)
        {
           if($_POST['add'])//подтвердили сохранение 
		   {
			   		$about->create($_POST['ItemSrc']);
				
				
		   }
			if($_POST['rem'])
			{
				$id = $_POST['rem'];
				
				
				$about->del($id);
			}
        }
        
		// Грузим view формы
         $content = View::factory('admin/about')
		 ->bind('errors',$errors)
		 ->bind('siteabout',$siteabout);
		 $this->template->content = $content;
		
		 $siteabout = $about->get_all();
	}
	//edit records
	public function action_edit()
	{
		$editabout = new Model_About();
		if($_POST)
		{
			
			$editabout->updat($_POST['id'],$_POST['ItemSrc']);
			
			
			 $content = View::factory('admin/about')
			 ->bind('errors',$errors);
			 $this->template->content = $content;
		
		}
		
		if(isset($_GET['id']) && $_GET['id']>0)
		{
			$id = (int) $_GET['id'];
			
		
			$str = $editabout->selectbyid($id);
			if(count($str)>0)
			{
				$content = View::factory('admin/editabout')
				->bind('onerow',$str);
				
				$this->template->content = $content;	
			}
			
				
		}
	
	}
	//end edit records
	
	
}





















