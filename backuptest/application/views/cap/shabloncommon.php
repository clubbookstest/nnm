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
</head>
<body>
  <div class="entrance">
    
      <?php echo $content; ?>
 
      
  </div>
  
</body>
</html>