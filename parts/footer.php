	<footer class="footer">
		<div class="footer__container container">
			<a href="/" class="footer__logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo__footer.png" alt="">
			</a>

			<nav class="footer__nav">
				<?php 
					wp_nav_menu( array(
						'menu'=>'footer_menu',
						'menu_class'=>'list',
						'theme_location'=>'footer_menu',
					) );
				?>
			</nav>

			<div class="footer__links">

				<?php if( have_rows('soc', 'option') ): ?>
					<?php while( have_rows('soc', 'option') ): the_row(); 
						$img = get_sub_field('img');
						$link = get_sub_field('link');
					?>
						<a href="<?php echo $link; ?>" target="_blank">
							<img src="<?php echo $img; ?>" alt="">
						</a>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>

			<div class="footer__copyright">
				<span>2021, All rights reserved</span>
				<span> Created by <a href="http://flex-design.net/ru/">FlexDesign</a></span>
			</div>
		</div>
	</footer>