<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
</head>
 
<body>
	<form method="post" accept-charset="utf-8">
		<table class="ttable">
		<tr>
			<td><label for="username"><?php echo __('User');?>:</label></td>
			<td><input id="username" type="text" name="username" /></td>
		</tr>	
		
		<tr>
			<td><label for="password"><?php echo __('Password');?>:</label></td>
			<td><input id="password" type="password" name="password" /></td>
		</tr>
			
		<tr>
			<td class="dispcenter" colspan="2"><button type="submit"><?php echo __('Login');?>:</button></td>
		</tr>
		</table>
	</form>
	<?php if($dineded) : ?>
		<div class="dineded"><?php echo $dineded;?></div>
	<?php endif;?>
	<?php if($errors) : ?>
		<div class="dineded"><?php foreach($errors as $k=>$v){echo $v;};?></div>
	<?php endif;?>
</body>
</html>