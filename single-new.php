<?php get_header(); ?>

	<?php get_template_part( 'parts/header-bg' ); ?>


	<main class="main">

		<section class="service">
			<div class="service__wrap container">

				<?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>

				<div class="service__top">
					<h3 class="h3 service__title"><?php the_title(); ?></h3>
				</div>
			</div>

			<div class="service__img">
				<?php if ( has_post_thumbnail() ) {
				the_post_thumbnail();
				} else { ?>
				<img src='<?php echo get_template_directory_uri(); ?>/img/no.jpg' alt='<?php the_title(); ?>' />
				<?php } ?>
			</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="service__text">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>

			<div class="service__prices">
				<b><?php the_field('new_title'); ?></b>

				<div class="service__table">
					<?php if( have_rows('new_list') ): ?>
						<?php while( have_rows('new_list') ): the_row(); 
							$new_list_title = get_sub_field('new_list_title');
							$new_list_subtitle = get_sub_field('new_list_subtitle');
						?>
							<div class="service__row">
								<p><?php echo $new_list_title; ?></p>
								<span><?php echo $new_list_subtitle; ?></span>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>

	</main>


<?php get_footer(); ?>