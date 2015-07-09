<script type="text/javascript">
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
	<h3>создание редактирование удаление страницы о нас</h3>
	
	<?php if(isset($errors) && $errors!=''): ?>
		<div class="red"><?php echo $errors; ?></div>
	<?php endif;?>
	<div class="">Наполнение блока О нас на сайте</div>
	<form action="" method="post" name="mainForm" accept-charset="utf-8">
	<input type="hidden" name="rem" value="0">
	<input type="hidden" value="0" name="add">
		<table class="MainContent" cellPadding="4" cellSpacing="5" border="1" width="100%" bgcolor="#FFFFFF">
				<tr>
					<td colspan="6">
					<a class="AddRecord" href="javascript:void(0);"><img src="<?php echo URL::site().'public/img/admin/add.png';?>" width="16" height="16" alt="добавить" border=0>создать запись</a>
					</td>
				</tr>
				<tr>
					<td>полное описание</td>
					<td>Ред.</td>
					<td>Уд.</td>
				</tr>
				
				<?php 
				
				
				
				
				if(isset($siteabout))
				{
					//покажем только одну запись
					$qty=1;//count($siteabout)
					for($i=0;$i<$qty;$i++)
					{
					echo '<tr>';
						
						
						echo '<td>';
							echo HTML::chars($siteabout[$i]['src']);
						echo '</td>';
						echo '<td>';
							?><a href="<?php echo URL::site('admin/about/edit?id='.HTML::chars($siteabout[$i]['id'])); ?>"><img src="<?php echo URL::site().'public/img/admin/edit.png';?>" width="16" height="16" alt="редактировать" border=0></a>
							
							<?php
						echo '</td>';
						
						echo '<td>';
							?>
							<input type="image" src="<?php echo URL::site().'public/img/admin/close.png';?>" width="16" height="16" alt="удалить" border=0 onclick="remov(<?php echo $siteabout[$i]['id'];?>)"/>
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
				<table cellpadding="1" cellspacing="5" border="1" width="100%" bgcolor="#FFFFFF">
					
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
								<td width="10%">
								Полное описание
								</td>
								<td>
								<textarea rows="10" cols="45" name="ItemSrc"></textarea>
								
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

			
			