<?php
$st_is_ex    = st_is_ver_ex();
$st_is_ex_af = st_is_ver_ex_af();
?>

<?php get_header( 'type2' ); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main>
			<article>
				<?php if( get_post_type() == 'post' ):?>
					<div id="post-<?php the_ID(); ?>" <?php post_class( 'st-post' ); ?>>
				<?php else:?>
					<?php $classes = array( 'post', 'st-custom' ); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class($classes); ?>>
				<?php endif; ?>

					<?php
					$post_id            = get_queried_object_id();
					$show_ikkatu_widget = false;
					$show_post_info     = ( get_post_meta( $post_id, 'post_data_updatewidget_set', true ) === 'yes' );   
					if ( $st_is_ex ):
						$show_youtube_id    = get_post_meta( $post_id, 'st_youtube_eyecatch', true );                        
						$show_youtube_thum  = ( get_post_meta( $post_id, 'st_youtube_eyecatch', true ) === 'yes' );          
					
						if ( $show_youtube_id && $show_youtube_thum ):
							$show_youtube_display = 'yes';
						else:
							$show_youtube_display = '';
						endif;
					else:
						$show_youtube_display = '';
					endif;

					if ( is_single() || is_page() ) {
						$show_ikkatu_widget = ( get_post_meta( $post_id, 'ikkatuwidget_set', true ) !== 'yes' );   

						if ( trim( $GLOBALS['stdata423'] ) !== '' ) {   
							$show_post_info = true;
						}
					}
					?>

					<?php if ( ! $show_post_info && ( trim( $GLOBALS['stdata423'] ) === '' && trim( $GLOBALS['stdata217'] ) === '' ) ): ?>
						<?php get_template_part( 'st-eyecatch' ); ?>
					<?php endif; ?>

					<?php if ( $show_ikkatu_widget && is_active_sidebar( 16 ) ): ?>
						<?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
							<?php dynamic_sidebar( 16 ); ?>
						<?php endif; ?>
					<?php endif; ?>

					<!--ぱんくず -->
					<?php if ( get_post_type() == 'post' ): ?>
						<div
							id="breadcrumb"<?php if ( $show_post_info ): ?> class="st-post-data-breadcrumb"<?php endif; ?>>
							<ol itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a href="<?php echo esc_url( home_url() ); ?>" itemprop="item">
										<span itemprop="name"><?php echo esc_html( $GLOBALS['stdata141'] ); ?></span>
									</a>
									&gt;
									<meta itemprop="position" content="1"/>
								</li>

								<?php
								$categories = _st_get_terms_hierarchical( _st_get_deepest_term( get_the_category() ) );
								$i          = 2;
								?>

								<?php foreach ( $categories as $category ): ?>
									<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
										<a href="<?php echo get_category_link( $category->term_id ); ?>" itemprop="item">
											<span
												itemprop="name"><?php echo esc_html( get_cat_name( $category->term_id ) ); ?></span>
										</a>
										&gt;
										<meta itemprop="position" content="<?php echo $i; ?>"/>
									</li>
									<?php $i ++; ?>
								<?php endforeach; ?>
							</ol>

							<?php if ( $show_post_info ): ?>
								<h1 class="entry-title st-css-no"><?php if ( $st_is_ex ): st_the_title(); else: the_title(); endif; ?></h1>
							<?php endif; ?>
						</div>
					<?php elseif ( ! is_attachment() ): ?>
						<div id="breadcrumb"<?php if ( $show_post_info ): ?> class="st-post-data-breadcrumb"<?php endif; ?>>
							<ol itemscope itemtype="http://schema.org/BreadcrumbList">
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a href="<?php echo esc_url( home_url() ); ?>" itemprop="item">
										<span itemprop="name"><?php echo esc_html( $GLOBALS['stdata141'] ); ?></span>
									</a>
									&gt;
									<meta itemprop="position" content="1"/>
								</li>
								<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
									<a href="<?php echo get_post_type_archive_link( $post_type ); ?>" itemprop="item">
										<span itemprop="name"><?php echo esc_html( get_post_type_object( get_post_type() )->label ); ?></span>
									</a>
									&gt;
									<meta itemprop="position" content="2"/>
								</li>
							</ol>

							<?php if ( $show_post_info ): ?>
								<h1 class="entry-title st-css-no"><?php if ( $st_is_ex ): st_the_title(); else: the_title(); endif; ?></h1>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<!--/ ぱんくず -->

					<!--ループ開始 -->
					<?php if ( have_posts() ): ?>
					<?php while ( have_posts() ):
					the_post(); ?>

					<?php if ( ! $show_post_info ):?>
						<?php if ( ! isset( $GLOBALS['stdata60'] ) || $GLOBALS['stdata60'] !== 'yes' ): ?>
							<?php
							$categories = get_the_category();
							$separator  = ' ';
							$output     = '';
							?>
							<p class="st-catgroup">
								<?php
								if ( $categories ) {
									foreach ( $categories as $category ) {
										$output .= '<a href="' . get_category_link( $category->term_id ) . '" title="'
										           . esc_attr( sprintf( "View all posts in %s", $category->name ) )
										           . '" rel="category tag"><span class="catname st-catid' . $category->cat_ID . '">' . $category->cat_name . '</span></a>' . $separator;
									}

									echo trim( $output, $separator );
								}
								?>
							</p>
						<?php endif; ?>

						<h1 class="entry-title"><?php if ( $st_is_ex ): st_the_title(); else: the_title(); endif; ?></h1>

						<?php get_template_part( 'itiran-date-singular' ); ?>
					<?php else: ?>
						<div style="display:none;"><?php get_template_part( 'itiran-date-singular' ); ?></div>
					<?php endif; ?>

					<?php if ( $show_ikkatu_widget && is_active_sidebar( 37 ) ): ?>
						<?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
							<?php dynamic_sidebar( 37 ); ?>
						<?php endif; ?>
					<?php endif; ?>

					<?php if ( isset( $GLOBALS['stdata230'] ) && $GLOBALS['stdata230'] === 'yes' ): ?>
						<div class="st-sns-top">						
							<?php get_template_part( 'sns' );    // ソーシャルボタン読み込み ?>
						</div>
					<?php endif; ?>

					<div class="mainbox">
						<div id="nocopy" <?php st_text_copyck(); ?>><!-- コピー禁止エリアここから -->
							<?php if ( $show_youtube_display && trim( $GLOBALS['stdata217'] ) !== ''
							      || ( ! $show_post_info && ( trim( $GLOBALS['stdata423'] ) === '' && trim( $GLOBALS['stdata217'] ) !== '' ) ) ): ?>
								<?php get_template_part( 'st-eyecatch-under' ); ?>
							<?php endif; ?>

							<?php if ( $st_is_ex_af ): get_template_part( 'st-author-top' ); endif; ?>

							<?php if ( $show_ikkatu_widget && ! st_is_mobile() && is_active_sidebar( 23 ) ): ?>
								<?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
									<?php dynamic_sidebar( 23 ); ?>
								<?php endif; ?>
							<?php endif; ?>

							<div class="entry-content">
								<?php st_the_content( array( 'single', 'main' ) ); ?>
							</div>
						</div><!-- コピー禁止エリアここまで -->

						<?php get_template_part( 'st-kai-page' ); ?>
						<?php get_template_part( 'st-ad-on' ); ?>

						<?php if ( $show_ikkatu_widget && is_active_sidebar( 5 ) ): ?>
							<?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
								<?php dynamic_sidebar( 5 ); ?>
							<?php endif; ?>
						<?php endif; ?>

					</div><!-- .mainboxここまで -->

					<?php if ( isset( $GLOBALS['stplus'] ) && $GLOBALS['stplus'] === 'yes' ): ?>
						<?php get_template_part( 'st-rank' ); ?>
					<?php endif; ?>

					<?php if ( $show_ikkatu_widget && st_is_st_reaction_buttons_enabled() ): ?>
						<?php echo do_shortcode( '[st-reaction-buttons]' ); ?>
					<?php endif; ?>

					<?php get_template_part( 'sns' ); ?>
					<?php if ( $st_is_ex_af ): get_template_part( 'st-author' ); endif; ?>
					<?php get_template_part( 'popular-thumbnail' ); ?>

					<?php if ( trim( $GLOBALS['stdata277'] ) === '' ): ?>
						<p class="tagst">
							<i class="st-fa st-svg-folder-open-o" aria-hidden="true"></i>-<?php the_category( ', ' ) ?><br/>
							<?php the_tags( '<i class="st-fa st-svg-tags"></i>-', ', ' ); ?>
						</p>
					<?php endif; ?>

					<aside>
						<?php st_author(); ?>

						<?php endwhile; ?>
						<?php else: ?>
							<p>記事がありません</p>
						<?php endif; ?>
						<!--ループ終了-->

						<?php if ( $GLOBALS['stdata6'] === '' ): ?>
							<?php if ( comments_open() || get_comments_number() ): ?>
								<?php comments_template(); ?>
							<?php endif; ?>
						<?php endif; ?>

						<!--関連記事-->
						<?php get_template_part( 'kanren' ); ?>

						<!--ページナビ-->
						<?php get_template_part( 'st-single-navigation' ); ?>

					</aside>

				</div>
				<!--/post-->
			</article>
		</main>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar( 'type2' ); ?>
</div>
<!--/#content -->
<?php get_footer( 'type2' ); ?>
