<form action="" method="post" name="stf" enctype="multipart/form-data">
				<table cellPadding=4 cellSpacing=1 border=1 width="100%" bgcolor="#FFFFFF">
					
						<input type="hidden" value=<?php echo HTML::chars($onerow[0]['id']);?> name="id">
						<input type="hidden" value=<?php echo HTML::chars($onerow[0]['imag']);?> name="imag">
							<tr>
								<td colspan="2">
								<strong>режим редактирования записи с id=<?php echo $onerow[0]['id'];?></strong>
								</td>
							</tr>
							<tr>
								<td width="40%">
								Название
								</td>
								<td>
								<input type="text" value="<?php echo HTML::chars($onerow[0]['name']);?>" size="40" name="ItemName">
								</td>
							</tr>
							<tr>
								<td width="40%">
								Короткое описание
								</td>
								<td>
								<input type="text" value="<?php echo HTML::chars($onerow[0]['desc']);?>" size="85" name="ItemDesc">
								</td>
							</tr>
							<tr>
								<td width="40%">
								Картинка
								</td>
								<td>
								<?php echo HTML::image('public/img/image4/'.$onerow[0]['imag'], array('alt' => $onerow[0]['imag'],'border'=>0));?>
								<input type="file" name="upfile" value="обзор">
								</td>
							</tr>
							<tr>
								<td width="40%">
								Длинное описание
								</td>
								<td>
								<textarea rows="10" cols="45" name="ItemLink"><?php echo HTML::chars($onerow[0]['link']);?></textarea>
								
								</td>
							</tr>
							<tr>
								<td colspan="2">
								<input type="submit" value="Сохранить" name="save" >&nbsp;&nbsp;&nbsp;
								
								<a style="float:right;" href="<?php echo URL::site('admin/image4'); ?>"><input type="button" value="Закрыть" name="close"></a>
								</td>
							</tr>
						
				</table>
</form>			
