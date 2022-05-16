<?php
/* Template name: Главная - спецтехасфальт*/
?>

<?php get_header(); ?>

	<?php get_template_part( 'parts/header' ); ?>

	<main class="main">

		<section class="hero">
			
			<div class="hero__slider swiper-container">

				<div class="swiper-wrapper">
					<?php if( have_rows('banner') ): ?>
						<?php while( have_rows('banner') ): the_row(); 
							$banner_bg = get_sub_field('banner_bg');
							$banner_title = get_sub_field('banner_title');
							$banner_img = get_sub_field('banner_img');
							$banner_btn = get_sub_field('banner_btn');
						?>
							<div class="hero__item swiper-slide">
								<div class="hero__item_bg">
									<img src="<?php echo $banner_bg; ?>" alt="">
								</div>
								<div class="hero__item_content">
									<div class="hero__item_text">
										<h2 class="h2 hero__title"><?php echo $banner_title; ?></h2>
										<a href="#" class="btn hero__btn modal__edits"><?php echo $banner_btn; ?></a>
									</div>
									<div class="hero__item_img">
										<img src="<?php echo $banner_img; ?>" alt="">
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>

				<div class="hero__pagination swiper-pagination"></div>


				<div class="hero__next swiper-button-prev"></div>
				<div class="hero__prev swiper-button-next"></div>


				<div class="swiper-scrollbar"></div>
			</div>
		</section>

		<section class="about wow slideInRight" id="about" data-wow-duration="0.6s" data-wow-delay="0">
			<div class="about__container container">
				<div class="wrapper">
					<div class="sidebar">
						<h4 class="h4 sidebar__title">О нас</h4>
					</div>
					<div class="about__content">
						<h3 class="h3 about__title">
							<?php the_field('about_title'); ?>
						</h3>
						<div class="about__text">
							<p class="about__text_info">
								<?php the_field('about_description'); ?>
							</p>	
							<p class="about__text_desc">
								<?php the_field('about_sub_description'); ?>
							</p>
						</div>
						<div class="about__achives">
							<div class="about__img">
								<img src="<?php the_field('about_banner'); ?>" alt="">
							</div>
							<div class="about__numbers">

								<?php if( have_rows('about_list') ): ?>
									<?php while( have_rows('about_list') ): the_row(); 
										$about_list_number = get_sub_field('about_list_number');
										$about_list_desc = get_sub_field('about_list_desc');
									?>
										<div class="about__numbers_item">
											<div class="about__numbers_wrap">
												<div class="about__numbers_count"><?php echo $about_list_number; ?></div>
												<span>+</span>
											</div>
											<p><?php echo $about_list_desc; ?></p>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>

							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="services wow slideInLeft" data-wow-duration="0.6s" data-wow-delay="0">
			<div class="services__container container">
				<div class="wrapper">
					<div class="sidebar">
						<h4 class="h4 sidebar__title">Услуги</h4>
					</div>

					<div class="services__content">
						<h3 class="h3 services__title"><?php the_field('services_title'); ?></h3>
						<div class="services__block">
							<?php if( have_rows('services_list') ): ?>
								<?php while( have_rows('services_list') ): the_row(); 
									$services_list_title = get_sub_field('services_list_title');
									$services_list_img = get_sub_field('services_list_img');
									$services_list_link = get_sub_field('services_list_link');
								?>
									<a href="<?php echo $services_list_link; ?>" class="services__link">
										<p class="services__name"><?php echo $services_list_title; ?></p>
										<div class="services__more">
											<span>Подробнее</span>
											<svg width="50" height="8" viewBox="0 0 50 8" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M49.3536 4.35355C49.5488 4.15829 49.5488 3.84171 49.3536 3.64645L46.1716 0.464466C45.9763 0.269204 45.6597 0.269204 45.4645 0.464466C45.2692 0.659728 45.2692 0.976311 45.4645 1.17157L48.2929 4L45.4645 6.82843C45.2692 7.02369 45.2692 7.34027 45.4645 7.53553C45.6597 7.7308 45.9763 7.7308 46.1716 7.53553L49.3536 4.35355ZM0 4.5H49V3.5H0V4.5Z" fill="#FF5631"/>
											</svg>
										</div>
										<div class="services__img">
											<img src="<?php echo $services_list_img; ?>" alt="">
										</div>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="rent wow slideInRight" id="rent" data-wow-duration="0.6s" data-wow-delay="0">
			<div class="rent__container container">
				<div class="wrapper">
					<div class="sidebar">
						<h4 class="h4 sidebar__title">Дополнительно</h4>
					</div>

					<div class="rent__content">
						<h3 class="h3 services__title"><?php the_field('dop_title'); ?></h3>
						<div class="rent__tabs rentTabs">
							<ul class="rent__list">

								<?php if( have_rows('dop_list') ): ?>
									<?php while( have_rows('dop_list') ): the_row(); 
										$rent_title = get_sub_field('rent_title');
									?>
										<li class="rent__item rentItem"><?php echo $rent_title; ?></li>
									<?php endwhile; ?>
								<?php endif; ?>

							</ul>
						</div>
					</div>

				</div>

				<?php if( have_rows('rent_list') ): ?>
					<?php while( have_rows('rent_list') ): the_row(); 
						$rent_text = get_sub_field('rent_text');
						$rent_img = get_sub_field('rent_img');
					?>
					<div class="rent__wrap rentWrap">
						<div class="rent__info">
							<p class="rent__text">
								<?php echo $rent_text; ?>
							</p>

							<div class="rent__table">

								<?php if( have_rows('rent_object') ): ?>
									<?php while( have_rows('rent_object') ): the_row(); 
										$rent_object_title = get_sub_field('rent_object_title');
										$rent_object_txt = get_sub_field('rent_object_txt');
									?>
									<div class="rent__row">
										<p><?php echo $rent_object_title; ?></p>
										<span><?php echo $rent_object_txt; ?></span>
									</div>
									<?php endwhile; ?>
								<?php endif; ?>

							</div>

							<a href="#" class="rent__btn btn modal__edits">заказать</a>
						</div>

						<div class="rent__img">
							<img src="<?php echo $rent_img; ?>" alt="">
						</div>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</section>

		<section class="clients wow slideInLeft" data-wow-duration="0.6s" data-wow-delay="0">
			<div class="clients__container container">
				<h3 class="h3 clients__title"><?php the_field('client_title'); ?></h3>
					<div class="clients__wrap">

						<?php if( have_rows('client_list') ): ?>
							<?php while( have_rows('client_list') ): the_row(); 
								$client_img = get_sub_field('client_img');
								$client_link = get_sub_field('client_link');
							?>
								<a href="<?php echo $client_link; ?>" class="clients__link">
									<img src="<?php echo $client_img; ?>" alt="">
								</a>
							<?php endwhile; ?>
						<?php endif; ?>

					</div>
			</div>
		</section>

		<?php get_template_part( 'parts/contact' ); ?>

	</main>

<?php get_footer(); ?>