<?php defined('SYSPATH') or die('No direct script access.');

// -- Environment setup --------------------------------------------------------

// Load the core Kohana class
require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT))
{
	// Application extends the core
	require APPPATH.'classes/Kohana'.EXT;
}
else
{
	// Load empty core extension
	require SYSPATH.'classes/Kohana'.EXT;
}

date_default_timezone_set('America/Chicago');

setlocale(LC_ALL, 'en_US.utf-8');

spl_autoload_register(array('Kohana', 'auto_load'));

//spl_autoload_register(array('Kohana', 'auto_load_lowercase'));


ini_set('unserialize_callback_func', 'spl_autoload_call');


mb_substitute_character('none');

// -- Configuration and initialization -----------------------------------------


I18n::lang('ru-ru');

if (isset($_SERVER['SERVER_PROTOCOL']))
{
	// Replace the default protocol.
	HTTP::$protocol = $_SERVER['SERVER_PROTOCOL'];
}


if (isset($_SERVER['KOHANA_ENV']))
{
	Kohana::$environment = constant('Kohana::'.strtoupper($_SERVER['KOHANA_ENV']));
}

Kohana::init(array(
	'base_url'   => '/backuptest/',
	'index_file' => FALSE
));


Kohana::$log->attach(new Log_File(APPPATH.'logs'));


Kohana::$config->attach(new Config_File);


Kohana::modules(array(
	 'auth'       => MODPATH.'auth',       // Basic authentication
	// 'cache'      => MODPATH.'cache',      // Caching with multiple backends
	// 'codebench'  => MODPATH.'codebench',  // Benchmarking tool
	 'database'   => MODPATH.'database',   // Database access
	// 'image'      => MODPATH.'image',      // Image manipulation
	// 'minion'     => MODPATH.'minion',     // CLI Tasks
	 'orm'        => MODPATH.'orm',        // Object Relationship Mapping
	// 'unittest'   => MODPATH.'unittest',   // Unit testing
	// 'userguide'  => MODPATH.'userguide',  // User guide and API documentation
	));


 Cookie::$salt = 4545454744543;

Route::set('cap', 'cap(/<controller>(/<action>(/<id>)))')
            ->defaults(array(
            'directory'  => 'cap',
            'controller' => 'admin',
            'action'     => 'index',
            ));	
Route::set('admin', 'admin(/<controller>(/<action>(/<id>)))')
            ->defaults(array(
            'directory'  => 'admin',
            'controller' => 'admin',
            'action'     => 'index',
            ));	
Route::set('image4', '<lang>/image4/id', array('id' => '.+'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'image4',
		'action'     => 'edit',		
	));	
Route::set('news', '<lang>/news(/<controller>(/<action>(/<id>)))')
            ->defaults(array(
            'directory'  => 'admin',
            'controller' => 'news',
            'action'     => 'index',
            ));	
Route::set('news', '<lang>/news/id', array('id' => '.+'))
	->defaults(array(
		'directory'  => 'admin',
		'controller' => 'news',
		'action'     => 'edit',		
	));				
Route::set('headerimgload', '<lang>/headerimgload(/<controller>(/<action>(/<id>)))')
            ->defaults(array(
            'directory'  => 'admin',
            'controller' => 'headerimgload',
            'action'     => 'index',
            ));				
			
			
			
 Route::set('start', '<lang>(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'start',
		'action'     => 'index',
	));
Route::set('about', '<lang>/about(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'about',
		'action'     => 'index',
	));
Route::set('servises', '<lang>/servises(/<id>)',array('id'=>'[0-9]+'))
	->defaults(array(
		'controller' => 'servises',
		'action'     => 'index',
	));	
Route::set('contact', '<lang>/contact(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'contact',
		'action'     => 'index',
	));	


Route::set('default', '<lang>(/<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'welcome',
		'action'     => 'test',
	));
