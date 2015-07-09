

	<?php 
	$c=0; // количество файлов 
	$pathurl = array();
	$dir=DOCROOT.'public/img/image/';
	$d=dir($dir); // 
	while($str=$d->read())
	{ 
		if($str{0}!='.' && $str{0}!='..')
		{ 
			$c++; 
			$pathurl[$str] = URL::site().'public/img/image/'.$str;
		} 
	} 
	$d->close(); 
	//print_r($pathurl);die;
	?>
	<?php if(isset($errors) && $errors!=''): ?>
		<div class="red"><?php echo $errors; ?></div>
	<?php endif;?>
	<form action="" method="post" name="formloadimg" accept-charset="utf-8" enctype="multipart/form-data">
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
				<td style="width:700px"><div class="widthheader">картинка</div></td>
				<td>адрес картинки</td>
				<td>удалить</td>
			</tr>
			<?php foreach($pathurl as $images=>$v):?>
			
			<tr>
				<td style="width:700px"><div class="widthheader"><img src="<?php echo $v?>" border ="0" width=""></div></td>
				<td><?php echo $v;?></td>
				<td style="text-align:center;"><input type="checkbox" name="delcheck" value="<?php echo $images;?>"></td>
			</tr>
			<?php endforeach;?>
			<tr>
				<td style="width:700px"></td>
				<td></td>
				<td><input type="submit" name="saveheaderimg" value="удалить"></td>
			</tr>
		</table>
		<?php endif;?>
	</form>
	