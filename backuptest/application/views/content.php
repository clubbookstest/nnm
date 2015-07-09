<div>
	<!-- верхняя навигация 4 картинки Controller Start-->
	<div class="row">
		<?php for($i=0;$i<$qtyim && $i<4;$i++) : ?>
			<div class="medium-<?php echo $qtyblock;?> large-<?php echo $qtyblock;?> text-center columns">
				<a href="<?php echo URL::site(LANG .'/servises?id='.$contimg4nav[$i]['id'])?>">
					<?php 
					 if($contimg4nav[$i]['imag']!='')
					 {
						$fileImage=DOCROOT.'public/img/image4/'.$contimg4nav[$i]['imag'];
						if(file_exists($fileImage))
						{
							echo HTML::image('public/img/image4/'.$contimg4nav[$i]['imag'], array('alt' => $contimg4nav[$i]['imag'],'border'=>0,'width'=>150,'height'=>150));
						}
						else
						{
							echo HTML::image('public/img/emptyimage/150x150.png', array('alt' => 'noimage','border'=>0,'width'=>150,'height'=>150));
						}
					 }
					 else
					 {
						echo HTML::image('public/img/emptyimage/150x150.png', array('alt' => 'noimage','border'=>0,'width'=>150,'height'=>150));
					 }	
					 ?>
					</a>
				<h4><?php echo ($contimg4nav[$i]['name']!='')?$contimg4nav[$i]['name']:'вносится из админ панели';?></h4>
				<p><?php echo ($contimg4nav[$i]['desc']!='')?$contimg4nav[$i]['desc']:'вносится из админ панели, пункт навигационное меню ';?></p>
			</div>
		<?php endfor; ?>
    </div>
		<!-- окончание верхней навигации 4 картинки -->
		<!-- слайдер с бегущим тестом -->
      <ul class="example-orbit-content" data-orbit>
        <li data-orbit-slide="headline-1">
          <div class="text-center panel">
            <h2>Почему именно мы</h2>
            <h3>Голобурда</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos animi, nobis illo. Repellendus atque dolorem, officia recusandae autem, laudantium consectetur, neque!</p>
          </div>
        </li>
        <li data-orbit-slide="headline-2">
          <div class="text-center panel">
            <h2>Зачем мы</h2>
            <h3>Текст</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos animi, nobis illo. Repellendus atque dolorem, officia recusandae autem, laudantium consectetur, neque!</p>
          </div>
        </li>
        <li data-orbit-slide="headline-3">
          <div class="text-center panel">
            <h2>Кто мы</h2>
            <h3>Голобурда</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos animi, nobis illo. Repellendus atque dolorem, officia recusandae autem, laudantium consectetur, neque!</p>
          </div>
        </li>
      </ul>
		<!-- окончание слайдера с бегущим текстом -->
      
	  <!-- блок новостей -->
	  <div class="row">
        <div class="large-12 columns">
          <h2><a href="<?php echo URL::site(LANG .'/news');?>"><?php echo __('Наши новости');?></a></h2>
        </div>
      </div>
	<div class="row">
        <div class="medium-8 large-8 columns">
			<div class="row">
			<?php 
			  
			  if(isset($sitenews) && count($sitenews)>0):
				  $limit=6;			
				  for ($j=0;$j<count($sitenews) && $j<$limit ;$j++): ?>
				  <div class="medium-6 large-6 columns">
					  <h3><?php echo $sitenews[$j]['name'];?></h3>
					  <p><?php echo $sitenews[$j]['desc'];?>
					  <a href="<?php echo URL::site(LANG .'/news?id='.$sitenews[$j]['id'])?>"><span class="right round radius label"><?php echo __('Читать полностью');?></span></a>
					  </p>
					   
					  
				  </div>	
				<?php endfor;?>
			<?php else: ?>
				<div class="large-12 columns">
					<h3>Тестовая новость</h3>
					<p>Текст тестовой новости</p>
				</div>
			<?php endif;?>
			</div>
        </div>
       
		<div class="medium-4 large-4 columns text-center">
			<?php //echo HTML::image('public/img/emptyimage/300x500.png', array('alt' => 'noimage','border'=>0,'width'=>300,'height'=>500));?>
			<?php echo HTML::image('public/img/image/doctor.jpg', array('alt' => 'doctor','border'=>0,'width'=>300,'height'=>500));?>
           
        </div>
      </div>
    <hr>
	<!-- окончание новостей -->
      <div class="row">
        <div class="large-12 columns">
          <h2><a href="<?php echo URL::site(LANG .'/reviews');?>"><?php echo __('Слова благодарности от клиентов');?></a></h2>
        </div>
      </div>
      <div class="row">
	  <?php   if(isset($reviews) && count($reviews)>0):
			  $limit=3;			
				  for ($j=0;$j<count($reviews) && $j<$limit ;$j++): ?>
					<div class="medium-4 large-4 columns text-center">
					   
					   <?php echo HTML::image('public/img/mark.jpg', array('alt' => 'mark','border'=>0,'width'=>150,'height'=>150));?>
					  <p class="text-center"><?php if(isset($reviews[$j]['desc'])){echo $reviews[$j]['desc'];}else{echo 'Нет комментария';}?></p>
					</div>
				  <?php endfor; ?>
			<?php else: ?>
				<?php for ($j=0;$j<3;$j++): ?>
					<div class="medium-4 large-4 columns text-center">
					   <?php echo HTML::image('public/img/emptyimage/150x150.png', array('alt' => 'mark','border'=>0,'width'=>150,'height'=>150));?>
					   <p class="text-center">нет активных комментариев для главной страницы</p>
					</div>
				<?php endfor;?>
			<?php endif; ?>
        
        
      </div>
</div>	  