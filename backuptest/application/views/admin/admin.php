<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" rel="stylesheet" type="text/css" />
<?php endforeach; ?>

<?php foreach($scripts as $scrpt): ?>
	<script type="text/javascript" src="<?php echo URL::base(); ?>public/js/<?php echo $scrpt; ?>.js"></script>
<?php endforeach; ?>
<?php echo HTML::script('public/tinymce/js/tinymce/tinymce.min.js'); ?>

</head>
<body>
  <div class="layer">
    <div class="container">
      <div class="header"><h1>Админ панель сайта</h1>Прежде чем что-то сделать, подумайте...</div>
 
      <div class="left">
        <h3>Ваш сайт</h3>
			<ul>
			  <li><a href="<?php echo URL::site('ru/'); ?>" target="_blank">Перейти на сайт</a></li>
			</ul> 
		<br />
		
		<h3>Редактирование сайта</h3>
		<?php 
		$actlink = Request::current()->controller();//$actlink = Request::current()->route()->uri(array('lang' => 'ru'));?>
			<ul>
			  <?php if($actlink=='Admin'): ?>
				<li>Начало работы</li>
			  <?php else: ?>
				<li><a href="<?php echo URL::site('admin/admin'); ?>">Начало работы</a></li>
			  <?php endif;?>
			  
			  <?php if($actlink=='Headerimgload'): ?>
				<li>Картинка вверху сайта</li>
			  <?php else: ?>
				<li><a href="<?php echo URL::site('admin/headerimgload'); ?>">Картинка вверху сайта</a></li>
			  <?php endif;?>
			 
			 <?php if($actlink=='Image4'): ?>
				<li>Навигационное меню</li>
			  <?php else: ?>
				<li><a href="<?php echo URL::site('admin/image4'); ?>">Навигационное меню</a></li>
			  <?php endif;?>
			  
			  <?php if($actlink=='News'): ?>
				<li>Новости/Дополнения</li>
			  <?php else: ?>
				<li><a href="<?php echo URL::site('admin/news'); ?>">Новости/Дополнения</a></li>
			  <?php endif;?>
			 
			 <?php if($actlink=='Images4all'): ?>
				<li>Картинки + адреса для вводимых текстовых блоков сайта</li>
			  <?php else: ?>
				<li><a href="<?php echo URL::site('admin/images4all'); ?>">Картинки + адреса для вводимых текстовых блоков сайта</a></li>
			  <?php endif;?>
			 
			 <?php if($actlink=='Reviews'): ?>
				<li>Редактирование отзывов</li>
			  <?php else: ?>
				<li><a href="<?php echo URL::site('admin/reviews'); ?>">Редактирование отзывов</a></li>
			  <?php endif;?>
			  
			  <?php if($actlink=='About'): ?>
				<li>Редактирование страницы о Нас</li>
			  <?php else: ?>
				<li><a href="<?php echo URL::site('admin/about'); ?>">Редактирование страницы о Нас</a></li>
			  <?php endif;?>
			 <!-- <li><a href="<?php echo URL::site('static/contact'); ?>">Мои контакты</a></li>  
			  -->
			</ul>
      </div>
      <div class="content"><?php echo $content; ?></div>
 
      <div class="clearing"></div>
      <div class="footer"><?php echo date('Y');?> Under control Kohana-3.3.3.1 && Foundation 5.5.1 Author's email <a href="mailto:mischenkoa@ukr.net">mischenkoa@ukr.net</a></div>
    </div>
  </div>
</body>
</html>