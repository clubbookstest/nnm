<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Start extends Controller_Common {
	
	class HTML extends Kohana_HTML {

    public static function anchor($uri, $title = NULL, array $attributes = NULL, $protocol = NULL, $index = TRUE)
    {
                $uri = LANG . '/'. $uri;                
 
                 return parent::anchor($uri, $title, array $attributes, $protocol, $index);
        }
}


