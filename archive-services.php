<?php get_header(); ?>

	<?php get_template_part( 'parts/header-bg' ); ?>

	<main class="main">

		<section class="portfolio">
			<div class="portfolio__container container">
				<h3 class="h3 portfolio__title">Услуги</h3>

				<div class="portfolio__content">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="portfolio__item">

							<div class="portfolio__img">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} else { ?>
									<img src='<?php echo get_template_directory_uri(); ?>/assets/img/no.jpg' alt='<?php the_title(); ?>' />
								<?php } ?>
							</div>

							<div class="portfolio__text">
								<p class="portfolio__name">
									<?php the_title(); ?>
								</p>

								<div class="portfolio__info">
								<?php if( have_rows('portfolio_list') ): ?>
									<?php while( have_rows('portfolio_list') ): the_row(); 
										$portfolio_img = get_sub_field('portfolio_img');
										$portfolio_title = get_sub_field('portfolio_title');
										$portfolio_text = get_sub_field('portfolio_text');
									?>
										<div class="portfolio__info_row">
											<div class="portfolio__info_param">
												<img src="<?php echo $portfolio_img; ?>" alt="">
												<span><?php echo $portfolio_title; ?></span>
											</div>
											<span class="portfolio__info_value">
												<?php echo $portfolio_text; ?>
											</span>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
								</div>
							</div>

						</a>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<?php wptuts_pagination(); ?>

			</div>
		</section>

	</main>

<?php get_footer(); ?>