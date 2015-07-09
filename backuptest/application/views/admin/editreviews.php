<form action="" method="post" name="stf" enctype="multipart/form-data">
				<table cellPadding=1 cellSpacing=5 border=1 width="100%" bgcolor="#FFFFFF">
					
						<input type="hidden" value=<?php echo HTML::chars($onerow[0]['id']);?> name="id">
						
							<tr>
								<td colspan="2">
								<strong>режим редактирования записи с id=<?php echo $onerow[0]['id'];?></strong>
								</td>
							</tr>
							<tr>
								<td width="40%">
								Автор, содержание 
								</td>
								<td>
								 <?php echo '<b>'.HTML::chars($onerow[0]['name']).'</b><br>'; echo HTML::chars($onerow[0]['desc']);?>
								</td>
							</tr>
							<tr>
								<td width="40%">
								Видима на главной странице сайта
								</td>
								<td>
								<input type="checkbox" id="checkmain" value="<?php echo HTML::chars($onerow[0]['simain']);?>" <?php if($onerow[0]['simain']==1){echo 'checked';}?> size="85" name="ItemSiMain">
								</td>
							</tr>
							<tr>
								<td width="40%">
								Видима на странице отзывов
								</td>
								<td>
								<input type="checkbox" id="checkpage" value="<?php echo HTML::chars($onerow[0]['si']);?>" <?php if($onerow[0]['si']==1){echo 'checked';}?> size="85" name="ItemSi">
								
								</td>
							</tr>
							
							<tr>
								<td colspan="2">
								<input type="submit" value="Сохранить" name="save" >&nbsp;&nbsp;&nbsp;
								
								<a style="float:right;" href="<?php echo URL::site('admin/reviews'); ?>"><input type="button" value="Закрыть" name="close"></a>
								</td>
							</tr>
						
				</table>
</form>			
