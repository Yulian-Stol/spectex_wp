

	<header class="header header--bg">
		<div class="header__container container">

			<a href="<?php echo get_home_url(); ?>" class="header__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
			</a>

			<nav class="header__nav">
				<?php 
					wp_nav_menu( array(
						'menu'=>'header_menu_left',
						'menu_class'=>'list',
						'theme_location'=>'header_menu_left',
					) );
				?>

				<a href="/" class="header__logo header__logo--nav">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
				</a>

				<?php 
					wp_nav_menu( array(
						'menu'=>'header_menu_right',
						'menu_class'=>'list',
						'theme_location'=>'header_menu_right',
					) );
				?>
			</nav>

			<button class="hamburger" type="button">
				<span class="hamburger__item"></span>
			</button>

		</div>
	</header>