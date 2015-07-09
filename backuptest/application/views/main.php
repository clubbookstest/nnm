<!doctype html>
<html class="no-js" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<?php foreach($styles as $style): ?>
    <link href="<?php echo URL::base(); ?>public/css/<?php echo $style; ?>.css" rel="stylesheet" type="text/css" />
<?php endforeach; ?>
<?php foreach($scriptsearly as $script): ?>
    <script src="<?php echo URL::base(); ?>public/js/early/<?php echo $script; ?>.js" type="text/javascript"></script>
	<?php endforeach; ?>
</head>
<body>
 
	  <!-- nav -->
	  <?php echo $navbar; ?>	
	  <!-- endnav -->
	  
	  <!-- header -->	
      <?php echo $headerimage; ?>
	  <!-- end header -->
    <br>
	  <!-- main content -->
	  <?php echo $content; ?>
	  
	  <!-- end main content -->
      

      
	<!-- footer -->
	<?php //echo $footer; ?>	
	<div class="panel">
        <div class="row">
          <div class="medium-6 large-6 columns">Сайт создан 2015г. <a href="mailto:mischenkoa@ukr.net">Мищенко Александром</a> для доктора Голобурда </div>
          <div class="medium-6 large-6 columns">
            <ul class="inline-list right">
			
              <li><a href="<?php echo URL::site(LANG . '/');?>">Главная</a></li>
              <li><a href="<?php echo URL::site(LANG . '/about');?>">О нас</a></li>
              <li><a href="<?php echo URL::site(LANG . '/servises')?>">Услуги</a></li>
              <li><a href="<?php echo URL::site(LANG . '/contact');?>">Контакты</a></li>
            </ul>
          </div>
        </div>
</div>
    <!-- end footer -->
    
    
    <?php foreach($scripts as $script): ?>
    <script src="<?php echo URL::base(); ?>public/js/<?php echo $script; ?>.js" type="text/javascript"></script>
	<?php endforeach; ?>
    <script>
          $(document).foundation();
    </script>
    
</body>
</html>