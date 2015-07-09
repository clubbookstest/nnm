<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template{
	public $template = 'main';
	
	
    public function before()
    {
        parent::before();
		
		//мультиязычность
		//if(!defined('LANG'))
		//{
		//	define('LANG','ru');
		//}
		/*I18n::lang(Cookie::get('lang', 'ru')); // устанавливаем язык из Куки, либо ставим русский, если Куки нету
		
		if (Arr::get($_GET, 'lang', NULL) != NULL) // если был передан GET параметр lang - выполняем следующие условия:
		{
			Cookie::set('lang', strip_tags(Arr::get($_GET, 'lang'))); // устанавливаем Куку с выбранным языком
			I18n::lang(strip_tags(Arr::get($_GET, 'lang'))); // меняем текущий язык на выбранный
		}
		*/	
		//окончание мультиязычность
		$lang_uri = $this->request->param('lang');
		//echo '$lang_uri='.$lang_uri;
		switch($lang_uri)
		{
			case 'ua':
				i18n::lang('ua');
				define('LANG','ua');
				
			break;
			case 'ru':
				i18n::lang('ru');
				define('LANG','ru');
				
			break;
			default:
				i18n::lang('ru');
				define('LANG','ru');
				
		}
		
        View::set_global('title', 'Гариа Харьков ');				
        View::set_global('description', 'Гариа Харьков');
        $this->template->styles = array('foundation','main');
		$this->template->scriptsearly = array('modernizr');
        $this->template->scripts = array('jquery','foundation.min','scripts');
		$this->template->navbar = '';
		$this->template->headerimage = '';
		$this->template->content = '';
		$this->template->footer = '';
		$auth = Auth::instance();
		$arr = $this->obj2array($auth);
		$arr = $this->obj2array($arr['_config']);
		foreach ($arr['users'] as $k=>$v)
		//foreach ($arr['_users'] as $k=>$v)
		{
			 $userNameFromIni = $k;
			 $userPassFromIni = $v;
		}
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
	public function getHeaderImg()
	{
		$c=0; // количество файлов 
		$pathurl = array();
		$dir=DOCROOT.'public/img/headerimg/';
		$d=dir($dir); // 
		while($str=$d->read())
		{ 
			if($str{0}!='.' && $str{0}!='..')
			{ 
				$c++; 
				$pathurl[] = URL::site().'public/img/headerimg/'.$str;
			} 
		} 
		$d->close();
		 	
		if(count($pathurl)>0)
		{
			//возвратим просто последнюю картинку
			return $pathurl[$c-1];
		}
		else
		{
			return URL::site().'public/img/1500x400.gif';
		}
	}

}





















