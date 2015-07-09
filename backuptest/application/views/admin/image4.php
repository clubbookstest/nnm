	
	<script>
tinymce.init({
    selector: "textarea",
    theme: "modern",
    //width: 300,
    //height: 300,
    plugins: [
         "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
         "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
         "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
 }); 
</script>

	<h3>создание редактирование удаление навигационного меню</h3>
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
	<div class="">расчитано на вывод 2 или 3 или 4 навигациооных картинок. Больше выводиться не будет.</div>
	<form action="" method="post" name="mainForm" accept-charset="utf-8">
	<input type="hidden" name="rem" value="0">
	<input type="hidden" value="0" name="add">
		<table class="MainContent" cellPadding=4 cellSpacing=1 border=1 width="100%" bgcolor="#FFFFFF">
				<tr>
					<td colspan="7">
					<a class="AddRecord" href="javascript:void(0);"><img src="<?php echo URL::site().'public/img/admin/add.png';?>" width="16" height="16" alt="добавить" border=0>добавить запись</a>
					</td>
				</tr>
				<tr>
					<td>id</td>
					<td>заглавие</td>
					<td>короткое описание</td>
					<td>развернутое описание</td>
					<td>картинка</td>
					<td>Ред.</td>
					<td>Уд.</td>
				</tr>
				
				<?php 
				
				
				
				
				if(isset($contimg4nav))
				{
					for($i=0;$i<count($contimg4nav);$i++)
					{
					echo '<tr>';
						echo '<td>';
							echo HTML::chars($contimg4nav[$i]['id']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($contimg4nav[$i]['name']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($contimg4nav[$i]['desc']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($contimg4nav[$i]['link']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($contimg4nav[$i]['imag']);
						echo '</td>';
						echo '<td>';
							?><a href="<?php echo URL::site('admin/image4/edit?id='.HTML::chars($contimg4nav[$i]['id'])); ?>"><img src="<?php echo URL::site().'public/img/admin/edit.png';?>" width="16" height="16" alt="редактировать" border=0></a>
							
							<?php
						echo '</td>';
						
						echo '<td>';
							?>
							<input type="image" src="<?php echo URL::site().'public/img/admin/close.png';?>" width="16" height="16" alt="удалить" border=0 onclick="remov(<?php echo $contimg4nav[$i]['id'];?>)"/>
							<?php
						echo '</td>';
						
					echo '</tr>';
					
					
					}
				}
				?>
			</table>
		
	</form>
	
	<!-- невидимый блок для ввода /*dislpay:none;*/ -->
			<div class="invisible" id="InsAndUpd">
				<form action="" method="post" name="stf" enctype="multipart/form-data">
				<table cellPadding=4 cellSpacing=1 border=1 width="100%" bgcolor="#FFFFFF">
					
						<input type="hidden" value="0" name="add">
						<input type="hidden" name="rem" value="0">
						<?php 
						
						?>
							<tr>
								<td colspan="2" style="text-align:center;">
								<strong>режим создания записи</strong>
								</td>
							</tr>
							<tr>
								<td width="40%">
								заглавие
								</td>
								<td>
								<input type="text" value="" size="40" name="ItemName">
								</td>
							</tr>
							<tr>
								<td width="40%">
								Короткое описание
								</td>
								<td>
								
								<input type="text" value="" size="85" name="ItemDesc">	
								
								</td>
							</tr>
							<tr>
								<td width="40%">
								Длинное описание
								</td>
								<td>
								<textarea rows="10" cols="45" name="ItemLink"></textarea>
								
								</td>
							</tr>
							<tr>
								<td width="40%">
								Картинка(150Х150 смотриться хорошо)
								</td>
								<td>
								<input type="file" name="upfile" value="обзор">
								</td>
							</tr>
							<tr>
								<td colspan="2">
								<input type="submit" value="Сохранить" name="save" onClick="saveIt();">&nbsp;&nbsp;&nbsp;
								<input type="reset" value="Сброс" name="reset">
								<a style="float:right;" href=""><input type="button" value="Закрыть" name="close"></a>
								</td>
							</tr>
						
				</table>
				</form>	
			</div>
			<!-- окончание невидимого блока для ввода -->

			
			