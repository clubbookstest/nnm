<nav class="top-bar" data-topbar>
        <ul class="title-area">
          <li class="name">
              
            <h1><a href="<?php echo URL::site(LANG . '/');?>">Нарколог Харьков | Голобурда</a></h1>
          </li>
		 
          <li class="toggle-topbar menu-icon"><a href="javascript:void(0)">Меню</a></li>
        </ul>
		
		

        <section class="top-bar-section">
         
          <ul class="right">
			<li><a href="<?php echo URL::site(LANG . '/');?>"><?php echo __('Главная');?></a></li>
            <li><a href="<?php echo URL::site(LANG . '/about');?>"><?php echo __('О нас');?></a></li>
            <li><a href="<?php echo URL::site(LANG . '/servises')?>"><?php echo __('Услуги');?></a></li>
            <li><a href="<?php echo URL::site(LANG . '/prices')?>"><?php echo __('Цены');?></a></li>
            <li><a href="<?php echo URL::site(LANG . '/contact');?>"><?php echo __('Контакты');?></a></li>
			<?php if(Auth::instance()->logged_in()):?>
            <li><a href="<?php echo URL::site(LANG . '/start/logout');?>"><?php echo __('Logout');?></a></li>
			<?php else: ?>	
			<li><a href="<?php echo URL::site(LANG . '/');?>" data-reveal-id="myModal">Авторизация</a></li>
			<?php endif;?>
          </ul>
        </section>
</nav>

<nav class="nnav">		
	 
		
			<?php 
			// код для вывода ссылок для переключения языке:
			if (LANG == 'ru') // если сейчас используется русский, то:
			{
				echo '<a href="'.URL::base().'ua/">Перейти на украиноязычную версию сайта</a>';
			}
			else
			{
				echo '<a href="'.URL::base().'ru/">Перейти на русскоязычную версию сайта</a>'; // выводим ссылку для переключения на русский
			}
			
			?>
			<div class="right">Привет <?php //$usr = Auth::instance()->get_user()->as_array(); echo $usr['username'];?>
				<?php if(Auth::instance()->logged_in()):?>
					<?php  $usr = Auth::instance()->get_user()->as_array(); echo $usr['username']."!";?>
				<?php else: ?>
					Гость!
				<?php endif;?>
			</div>
			
</nav>			




<!-- modal content -->



<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="login or sign up" aria-hidden="true" role="dialog">

  <div class="row">

    <div class="large-6 columns auth-plain">

      <div class="signup-panel left-solid">

        <p class="welcome">Логин</p>

        <form action="<?php echo URL::site(LANG . '/');?>" method="post">

          <div class="row collapse">

            <div class="small-2  columns">

              <span class="prefix"><i class="fi-torso-female"></i></span>

            </div>

            <div class="small-10  columns">

              <input type="text" name="username" placeholder="username">

            </div>

          </div>

          <div class="row collapse">

            <div class="small-2 columns ">

              <span class="prefix"><i class="fi-lock"></i></span>

            </div>

            <div class="small-10 columns ">

              <input type="password" name="password" placeholder="password">

            </div>

          </div>
		<button name="login" type="submit">LogIn</button>
		<!--<input type="submit" name="login" value="войти">-->
        </form>

       

      </div>

    </div>



    <div class="large-6 columns auth-plain">

    	<div class="signup-panel newusers">

    		<p class="welcome"> Новый пользователь?</p>

    		<p>Регистрация предоставит вам возможность добавлять комментарии и тд</p><br>

    		<a href="<?php echo URL::site(LANG . '/registr');?>" class="button ">Перейти к регистрации</a></br>

    	</div>

    </div>



   </div>

  <a class="close-reveal-modal" aria-label="Close">&#215;</a>

</div>