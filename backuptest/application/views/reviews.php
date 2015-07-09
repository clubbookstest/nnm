	
	
	<?php if(isset($errors) && $errors!=''): ?>
		<div class="red"><?php echo $errors; ?></div>
	<?php endif;?>
	
	
	<div class="row">
		
        <div class="large-9 columns">
		<?php if(Auth::instance()->logged_in()):?>
		<h3>Добавить отзыв</h3>
			 <div class="section-container tabs">
				<section class="section">
				  
				  <div class="content">
					
					<form action="" method="POST">
					  <div class="row collapse">
						<div class="large-2 columns">
						  <label class="inline">Ваше имя</label>
						</div>
						<div class="large-10 columns">
						  <input type="text" name="name" placeholder="Степан Степанов">
						</div>
					  </div>
					<div class="row collapse">
						<div class="large-2 columns">
						  <label class="inline">Ваша оценка</label>
						</div>
						<div class="large-10 columns">		
							<select required name="mark">
								<option selected="selected" value="5">Прекрасные специалисты</option>
								<option value="4">Хорошие специалисты</option>
								<option value="3">Посредственная работа</option>
								<option value="2">Неудовлетворительная работа</option>
								<option value="1">Очень плохо</option>
							</select>
						</div>
					</div>
					  
					  <div class="row collapse">
						<div class="large-2 columns">
							<label class="inline">Текст сообщения</label>
						</div>
						<div class="large-10 columns">	
							<textarea rows="4" name="message"></textarea>
						</div>
					  </div>
					  <button type="submit" class="radius button">Отправить</button>
					</form>
				  </div>
				</section>
			   <?php if(isset($moderate) && $moderate==1):?>
			   <p><?php echo __('Спасибо Ваш отзыв принят, будет виден после модерации!');?></p>
			   <?php endif;?>
			  </div>
			  <?php else: ?>
			  <p><?php echo __('Только зарегистрированные пользователи могут добавлять комментарии');?></p>
			  <?php endif; ?>
		</div>
	</div>	
	<?php if(isset($rows)):?>
	<div class="row">
	  <div class="large-12 columns">
	  <h3>Все отзывы</h3>
		<table class="MainContent" cellPadding=4 cellSpacing=1 border=1 width="100%" bgcolor="#FFFFFF">
				
				<tr>
					
					<td width="15%">Имя автора</td>
					<td width="70%">Содержание</td>
					<td width="5%">Оценка</td>
					<td width="10%">Дата созд.</td>
					
				</tr>
				
				<?php 
				
					for($i=0;$i<count($rows);$i++)
					{
						echo '<tr>';
						
						echo '<td>';
							echo HTML::chars($rows[$i]['name']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($rows[$i]['desc']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($rows[$i]['mark']);
						echo '</td>';
						echo '<td>';
							echo HTML::chars($rows[$i]['data']);
						echo '</td>';
						
						echo '</tr>';
					
					
					}
				
				
				?>
			</table>
		</div>
	</div>	
	<?php else: ?>
	<div class="row">
	  <div class="large-12 columns">
	  <p>Пока нет ни одного отзыва</p>
	  </div>
	</div>  
	<?php endif;?>
	
	

			
			