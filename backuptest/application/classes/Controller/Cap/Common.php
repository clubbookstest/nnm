<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Cap_Common extends Controller_Template{
	public $template = 'cap/shabloncommon';
	
    public function before()
    {
        parent::before();
	    View::set_global('title', 'Вход в админпанель сайта');				
        View::set_global('description', 'Вход в админпанель сайта');
        $this->template->styles = array('adminstyle');
        $this->template->scripts = array('jquery15min','scripts');
		$this->template->content = '';
    }
	 public function after()
    {
        parent::after();
    }
}





















