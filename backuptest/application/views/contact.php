 <div class="row">
     
         
        <div class="large-9 columns">
     
          <h3><?php echo __('Обратная связь');?></h3>
          <p>Мы всегда рады помочь Вам <em>Не болейте</em>.</p>
     
          <div class="section-container tabs" data-section>
            <section class="section">
              <h5 class="title"><a href="#panel1">Для связи с нами заполните форму и нажмите Отправить</a></h5>
              <div class="content" data-slug="panel1">
                
				<form action="" method="POST" name="formsend">
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="inline">Ваше имя</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="yourName" name="name" placeholder="Степан Степанов">
                    </div>
                  </div>
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="inline">Ваш Email</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="text" id="yourEmail" name="email" placeholder="stepanspenov@com.com">
                    </div>
                  </div>
                  <label>Текст сообщения</label>
                  <textarea rows="4" name="message"></textarea>
                  <button type="submit" class="radius button">Отправить</button>
                </form>
              </div>
			</section>
           
          </div>
		   
			   <div class="large-9 columns">
				<?php if($errors) : ?>
						<?php foreach($errors as $k=>$v) : ?>
							<div data-alert class="alert-box alert round"><?php echo $v;?><a href="javascript(void:0);" class="close">&times;</a></div>
						<?php endforeach; ?>
				
				
				<?php endif; ?>
				<?php if($goodreport): ?>
					<div data-alert class="alert-box success radius">Ваше сообщение успешно отправлено<a href="#" class="close">&times;</a></div>
				<?php endif; ?>	
				</div>
			
		</div>
		 
			
         
     
     
         
     
     
        <div class="large-3 columns">
          <h5>На карте</h5>
           
          <p>
            <!--<a href="" data-reveal-id="mapModal"><img src="http://placehold.it/400x280"></a>-->
			<a href="" data-reveal-id="mapModal"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2564.4203318946365!2d36.23928989999998!3d50.0034764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a0dd8683e169%3A0xb23c7053dc44efe8!2z0LLRg9C7LiDQhtCy0LDQvdC-0LLQsCwgMTUsINCl0LDRgNC60ZbQsiwg0KXQsNGA0LrRltCy0YHRjNC60LAg0L7QsdC70LDRgdGC0YwsINCj0LrRgNCw0LjQvdCw!5e0!3m2!1sru!2s!4v1434362803100" width="600" height="450" frameborder="0" style="border:0"></iframe></a>
			<br/>
           <!-- <a href="" data-reveal-id="mapModal">View Map</a>-->
          </p>
          <p>
            Харьков<br/>
            центр города
          </p>
        </div>
         
      </div>
     
       
     
     
       
     
    
     
       
     
     
     
       
     
      <div class="reveal-modal" id="mapModal">
        <h4>Where We Are</h4>
        <p><img src="http://placehold.it/800x600"/></p>
     
         
        <a href="#" class="close-reveal-modal">?</a>
      </div>