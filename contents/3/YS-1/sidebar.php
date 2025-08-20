			<!-- secondary -->
			<aside id="secondary">

			<?php
				if (is_active_sidebar('sidebar')) {
				dynamic_sidebar('sidebar');
				}
			?>



				<!-- widget -->
				<div class="widget widget_search">
					<div class="widget-title">検索</div>
					<!-- search-form -->
					<form method="get" class="search-form" action="#">
						<input type="search" class="search-field" value="" placeholder="キーワード" name="s" id="s">
						<button type="submit" class="search-submit"><i class="fas fa-search"></i></button>
					</form><!-- /search-form -->
				</div><!-- /widget -->


				<!-- widget -->
				<div class="widget widget_popular">
					<div class="widget-title">人気記事</div>

					<div class="wpost-items m_ranking">

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry2.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry1.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry3.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry4.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry5.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

					</div><!-- /wpost-items -->
				</div><!-- /widget -->



				<!-- widget -->
				<div class="widget widget_recent">
					<div class="widget-title">新着記事</div>

					<div class="wpost-items">

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry7.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry6.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry10.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry7.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

						<!-- wpost-item -->
						<a class="wpost-item" href="#">
							<div class="wpost-item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/entry9.png" alt=""></div>
							<div class="wpost-item-body">
								<div class="wpost-item-title">記事のタイトルが入ります記事のタイトルが入ります記事のタイトルが入ります</div>
							</div><!-- /wpost-item-body -->
						</a><!-- /wpost-item -->

					</div><!-- /wpost-items -->
				</div><!-- /widget -->

				<div class="widget widget_archive">
					<div class="widget-title">アーカイブ</div>
					<ul>
						<li><a href="#">テキストテキストテキスト</a></li>
						<li><a href="#">テキストテキストテキスト</a></li>
						<li><a href="#">テキストテキストテキスト</a></li>
					</ul>
				</div><!-- /widget -->

			</aside><!-- secondary -->