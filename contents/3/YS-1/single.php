<?php get_header(); ?>

	<!-- content -->
	<div id="content">
		<div class="inner">

			<!-- primary -->
			<main id="primary">

				<?php if (function_exists('bcn_display')) : ?>
				<!-- breadcrumb -->
				<div class="breadcrumb">
					<?php bcn_display(); ?>
					<!-- <span property="itemListElement" typeof="ListItem">
						<a property="item" typeof="WebPage" href="/" class="home"><span property="name">ホーム</span></a>
						<meta property="position" content="1">
					</span>
					<i class="fas fa-angle-right"></i>
					<span class="current-item">カテゴリー名</span> -->
				</div><!-- /breadcrumb -->
				<?php endif; ?>

                
				    <?php if (have_posts()) : ?>
                        <?php while(have_posts()) : ?>
                        	<?php the_post(); ?>

                <!-- entry -->
				<article class="entry">

					<!-- entry-header -->
					<div class="entry-header">

						<div class="entry-label"><?php my_the_post_category(true) ?></div><!-- /entry-item-tag -->
						<h1 class="entry-title"><?php the_title(); ?></h1><!-- /entry-title -->
                        

						<!-- entry-meta -->
						<div class="entry-meta">
							<time class="entry-published" datetime="<?php the_time('c'); ?>">公開日 <?php the_time('Y/n/j'); ?></time>
                            <?php if (get_the_modified_time('c') !== get_the_time('c')) : ?>
							<time class="entry-updated" datetime="<?php the_modified_time('c'); ?>">最終更新日 <?php the_modified_time('Y/n/j'); ?></time>
                            <?php endif; ?>
						</div><!-- /entry-meta -->

						<!-- entry-img -->
						<div class="entry-img">
							<?php if(has_post_thumbnail()): ?>
							<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/noimg.png" alt="">
							<?php endif; ?>
						</div><!-- /entry-img -->

					</div><!-- /entry-header -->

					<!-- entry-body -->
					<div class="entry-body">
                                <?php the_content(); ?>
                                <?php wp_link_pages(
                                    array(
                                        'before' => '<nav class="entry-links">',
                                        'after' => '</nav>',
                                        'link_before' => '',
                                        'link_after' => '',
                                        'next_or_number' => 'number',
                                        'separator' => '',
                                    )
                                    );
                                    ?>
					</div><!-- /entry-body -->

                <!-- entry-tag-items -->
                <div class="entry-tag-items">
                <div class="entry-tag-head">タグ</div><!-- /entry-tag-head -->
                <?php my_get_post_tags(); ?>
                </div><!-- /entry-tag-items -->

                <!-- entry-related -->
                <div class="entry-related">
                                <?php get_template_part('template-parts/related'); ?>
                </div><!-- /entry-related -->

                        <?php endwhile; ?>
                    <?php endif; ?>


				</article> <!-- /entry -->
			</main><!-- /primary -->

    <?php get_sidebar(); ?>


		</div><!-- /inner -->
	</div><!-- /content -->

<?php get_footer(); ?>