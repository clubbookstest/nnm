<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
</head>
 
<body>
	<?php 
	$c=0; // количество файлов 
	$pathurl = array();
	$dir=DOCROOT.'public/img/headerimg/';
	$d=dir($dir); // 
	while($str=$d->read())
	{ 
		if($str{0}!='.' && $str{0}!='..')
		{ 
			$c++; 
			$pathurl[$str] = URL::site().'public/img/headerimg/'.$str;
		} 
	} 
	$d->close(); 
	//print_r($pathurl);die;
	?>
	<?php if(isset($errors) && $errors!=''): ?>
		<div class="red"><?php echo $errors; ?></div>
	<?php endif;?>
	<form action="" method="post" name="formheaderloadimg" accept-charset="utf-8" enctype="multipart/form-data">
		<table class="ttable">
			<tr>
				<td><input type="file" name="upfile" value="обзор"></td>
				<td><input type="submit" name="saveheaderimg" value="сохранить"></td>
			</tr>
			
		</table>
		
		<?php if($c>0):?>
		<div class="padtop">Загруженные картинки</div>
		<table border=1 cellpadding=1 class="tableborder">
			<tr>
				<td style="width:800px"><div class="widthheader">картинка</div></td>
				<td>удалить</td>
			</tr>
			<?php foreach($pathurl as $images=>$v):?>
			
			<tr>
				<td style="width:800px"><div class="widthheader"><img src="<?php echo $v?>" border ="0" width=""></div></td>
				<td style="text-align:center;"><input type="checkbox" name="delcheck" value="<?php echo $images;?>"></td>
			</tr>
			<?php endforeach;?>
			<tr>
				<td style="width:800px"></td>
				<td><input type="submit" name="saveheaderimg" value="удалить"></td>
			</tr>
		</table>
		<?php endif;?>
	</form>
	
</body>
</html>