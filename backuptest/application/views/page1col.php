  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
		<?php if(isset($rows) && $rows > 0): ?>
			<?php foreach($rows as $data): ?>
			<div class="panel">
			<h3><?php echo $data['name'];?></h3>
			<?php if(isset($data['link'])):?>
			<!-- вывод описания услуги  -->
			<p><?php echo $data['link'];?></p>
			<?php else: ?>
				<?php if(isset($data['src'])):?>
				<!-- вывод полного описания новости -->
				<p><?php echo $data['src'];?></p>
				<?php endif;?>
			<?php endif;?>
			
			
			
			</div>
			<?php endforeach; ?>
		<?php else :?>
			<?php if(isset($rowsabout) && $rowsabout > 0): ?>
				<?php foreach($rowsabout as $data): ?>
					<div class="panel">
						<?php if(isset($data['src'])):?>
						<!-- вывод данных о Нас -->
						<p><?php echo $data['src'];?></p>
						<?php endif;?>
					</div>
				<?php endforeach; ?>
				
			<?php else: ?>
				данными страница наполняется в админ панели или ошибочно поставлен id
			<?php endif;?>
		
		<?php endif; ?>
	</div>
  </div>
