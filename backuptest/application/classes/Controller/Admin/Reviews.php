<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Reviews extends Controller_Admin_Admincommon {
	
	public function action_index()
	{
		$errors='';
		$reviews = new Model_Review();
        if ($_POST)
        {
			if($_POST['rem'])
			{
				$id = (int) $_POST['rem'];
				$reviews->del($id);
			}
        }
        
		// Грузим view формы
         $content = View::factory('admin/reviews')
		 ->bind('errors',$errors)
		 ->bind('sitenews',$sitereviews);
		 $this->template->content = $content;
		
		 $sitereviews = $reviews->get_all_status();
	}
	//edit records
	public function action_edit()
	{
		$errors='';
		$reviews = new Model_Review();
		if($_POST)
		{
			 $simain=(!isset($_POST['ItemSiMain']))?0:1;
			 $si=(!isset($_POST['ItemSi']))?0:1;
			  $reviews->updat($_POST['id'],$simain,$si);
			 $content = View::factory('admin/reviews')
			 ->bind('errors',$errors);
			 $this->template->content = $content;
		
		}
		
		if(isset($_GET['id']) && $_GET['id']>0)
		{
			$id = (int) $_GET['id'];
			
		
			$str = $reviews->selectbyid($id);
			if(count($str)>0)
			{
				$content = View::factory('admin/editreviews')
				->bind('onerow',$str);
				
				$this->template->content = $content;	
			}
			
				
		}
	
	}
	//end edit records
	
	
}





















