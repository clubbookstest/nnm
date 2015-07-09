	<h3>Отзывы на сайте</h3>
	
	<?php if(isset($errors) && $errors!=''): ?>
		<div class="red"><?php echo $errors; ?></div>
	<?php endif;?>
	<div class="">Модерация отзывов</div>
	<form action="" method="post" name="mainForm" accept-charset="utf-8">
	
	<input type="hidden" value="0" name="rem">
		<table class="MainContent" cellPadding=4 cellSpacing=1 border=1 width="100%" bgcolor="#FFFFFF">
				
				<tr>
					<td>id</td>
					<td>Имя автора</td>
					<td>Содержание</td>
					<td>Дата созд.</td>
					<td>Показать на главной</td>
					<td>Показать на стр.отзывов</td>
					<td>Ред.</td>
					<td>Уд.</td>
				</tr>
				
				<?php 
				
				
				
				
				if(isset($sitenews))
				{
					for($i=0;$i<count($sitenews);$i++)
					{
					echo '<tr>';
						echo '<td>';
							echo HTML::chars($sitenews[$i]['id']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($sitenews[$i]['name']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($sitenews[$i]['desc']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($sitenews[$i]['data']);
						echo '</td>';
						echo '<td>';
						?><input type="checkbox" disabled value="<?php echo $sitenews[$i]['simain'];?>" <?php if($sitenews[$i]['simain']==1) echo ' checked ';?>><?php
						echo '</td>';
						
						echo '<td>';
						?><input type="checkbox" disabled value="<?php echo $sitenews[$i]['si'];?>" <?php if($sitenews[$i]['si']==1) echo ' checked ';?>><?php
						echo '</td>';
						echo '<td>';
							?><a href="<?php echo URL::site('admin/reviews/edit?id='.HTML::chars($sitenews[$i]['id'])); ?>"><img src="<?php echo URL::site().'public/img/admin/edit.png';?>" width="16" height="16" alt="редактировать" border=0></a>
							
							<?php
						echo '</td>';
						
						
						echo '<td>';
							?>
							<input type="image" src="<?php echo URL::site().'public/img/admin/close.png';?>" width="16" height="16" alt="удалить" border=0 onclick="remov(<?php echo $sitenews[$i]['id'];?>)"/>
							<?php
						echo '</td>';
						
					echo '</tr>';
					
					
					}
				}
				
				?>
			</table>
		
	</form>
	
	

			
			