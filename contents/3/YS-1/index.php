

<?php get_header(); ?>


	<!-- pickup -->
	<div id="pickup">
	<div class="inner">

		<?php get_template_part('template-parts/pickup.php'); ?>
		<div class="pickup-items">
			<?php 
			$pickup_ids = array(18, 20, 21); // 表示したい記事ID
			$pickup_query = new WP_Query(
			array(
				'post_type'      => 'post',
				'post__in'       => $pickup_ids,
				'orderby'        => 'post__in', // ★ 順番を指定したIDの通りにする
				'post_status'    => 'publish',  // ★ 公開済み記事のみ
				'posts_per_page' => 3
			)
			);
			?>
			<?php if ($pickup_query->have_posts()) : ?>
			<?php while($pickup_query->have_posts()) : $pickup_query->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="pickup-item">
				<div class="pickup-item-img">
					<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail(); ?>
					<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
					<?php endif; ?>
					<div class="pickup-item-tag"><?php my_the_post_category(false); ?></div>
				</div>
				<div class="pickup-item-body">
					<h2 class="pickup-item-title"><?php the_title(); ?></h2>
				</div>
				</a>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>

		</div><!-- /pickup-items -->

	</div><!-- /inner -->
	</div><!-- /pickup -->



	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<!-- entries -->
				<div class="entries">
                    <?php if (have_posts()) : ?>
                        <?php while(have_posts()) : ?>
                        <?php the_post(); ?>
					<!-- entry-item -->
					<a href="<?php the_permalink(); ?>" class="entry-item">
						<!-- entry-item-img -->
						<div class="entry-item-img">
							<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
								<?php endif; ?>
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/entry1.png" alt=""> -->
						</div><!-- /entry-item-img -->

						<!-- entry-item-body -->
						<div class="entry-item-body">
							<div class="entry-item-meta">
								<?php
									$category = get_the_category();
									if($category[0]) : ?>
										<div class="entry-item-tag"><?php my_the_post_category(false) ?></div><!-- /entry-item-tag -->
									<?php endif; ?>
								<time class="entry-item-published" datetime="<?php the_time('c') ?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
							</div><!-- /entry-item-meta -->
							<h2 class="entry-item-title"><?php the_title(); ?></h2><!-- /entry-item-title -->
							<div class="entry-item-excerpt">
								<p><?php the_excerpt(); ?></p>
							</div><!-- /entry-item-excerpt -->
						</div><!-- /entry-item-body -->
					</a><!-- /entry-item -->
                        <?php endwhile; ?>
                        <?php endif; ?>
			<?php get_template_part('template-parts/pagination'); ?>

			</main><!-- /primary -->

    <?php get_sidebar(); ?>
	
	
	
</div><!-- /inner -->
</div><!-- /content -->

<?php get_footer(); ?>


