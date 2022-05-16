

	<section class="contacts wow slideInRight" data-wow-duration="0.6s" data-wow-delay="0">
		<div class="contacts__container container">
			<div class="wrapper">
				<div class="sidebar">
					<h4 class="h4 sidebar__title">Контакты</h4>
				</div>
				<h3 class="h3 contacts__title">
					<?php the_field('contact_title', 'option'); ?>
				</h3>
			</div>

			<div class="contacts__content">
				<div class="contacts__info">
					<div class="contacts__item contacts__item--tel">
						<div class="contacts__label">
							<span>телефоны:</span>
						</div>
						<div class="contacts__data contacts__data--tel">

							<?php if( have_rows('number_list', 'option') ): ?>
								<?php while( have_rows('number_list', 'option') ): the_row(); 
									$number_phone = get_sub_field('number_phone');
									$number_link = get_sub_field('number_link');
								?>
									<a href="tel:+<?php echo $number_link; ?>"><?php echo $number_phone; ?></a>
								<?php endwhile; ?>
							<?php endif; ?>

						</div>
					</div>
					<div class="contacts__item">
						<div class="contacts__label">
							<span>email:</span>
						</div>
						<div class="contacts__data">

							<?php if( have_rows('mail_list', 'option') ): ?>
								<?php while( have_rows('mail_list', 'option') ): the_row(); 
									$mail_text = get_sub_field('mail_text');
									$mail_link = get_sub_field('mail_link');
								?>
									<a href="mailto:<?php echo $mail_link; ?>"><?php echo $mail_text; ?></a>
								<?php endwhile; ?>
							<?php endif; ?>

						</div>
					</div>
					<div class="contacts__item">
						<div class="contacts__label">
							<span>social media:</span>
						</div>
						<div class="contacts__data">

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
					</div>
				</div>

				<div class="contacts__form">
					<?php echo do_shortcode('[caldera_form id="CF61acbe0af1331"]'); ?>
				</div>
			</div>
		</div>
	</section>