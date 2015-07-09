 <div class="row">
     
         
        <div class="large-12 columns">
     
          <h3><?php echo __('Регистрация');?></h3>
          
     
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
                      <input type="text" id="yourName" name="username" placeholder="Степан Степанов">
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
                  <div class="row collapse">
                    <div class="large-2 columns">
                      <label class="inline">Ваш пароль</label>
                    </div>
                    <div class="large-10 columns">
                      <input type="password" id="yourPass" name="password" >
                    </div>
                  </div>
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
		 
			
         
     
     
         
     
     
       
         
      </div>
     
       
     
     
       
     
    
     
       
     
     
     
       
    