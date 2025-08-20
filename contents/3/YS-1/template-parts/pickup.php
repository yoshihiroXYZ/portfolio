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

			<?php wp_reset_postdata(); ?>
			<?php if ($pickup_query->have_posts()) : ?>
			<?php while($pickup_query->have_posts()) : $pickup_query->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="pickup-item">
				<div class="pickup-item-img">
					<?php if(has_post_thumbnail()): ?>
					<?php the_post_thumbnail(); ?>
					<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>../img/noimg.png" alt="">
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