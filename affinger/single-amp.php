<!doctype html>
<html amp <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">

		<?php if ( trim( $GLOBALS['stdata124'] ) !== '' ): ?>
			<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
		<?php endif; ?>

		<script async src="https://cdn.ampproject.org/v0.js"></script>

		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<meta name="format-detection" content="telephone=no">
		<meta name="referrer" content="no-referrer-when-downgrade"/>

		<?php if ( is_home() && ! is_paged() ): ?>
			<meta name="robots" content="index,follow">
		<?php elseif ( is_search() || is_404() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( st_is_ver_ex() && ! is_category() && ! is_tag() && is_archive() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( ! st_is_ver_ex() && ! is_category() && is_archive() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( is_paged() ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( trim( $GLOBALS['stdata9'] ) !== '' && (int) $GLOBALS['stdata9'] === $post->ID ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( st_is_ver_ex() && ( is_category() || is_tag() ) && trim( $GLOBALS['stdata15'] ) !== '' ): ?>
			<meta name="robots" content="noindex,follow">
		<?php elseif ( ! st_is_ver_ex() && is_category() && trim( $GLOBALS['stdata15'] ) !== '' ): ?>
			<meta name="robots" content="noindex,follow">
		<?php endif; ?>

		<?php if ( isset( $GLOBALS["stdata400"] ) && $GLOBALS["stdata400"] === 'yes' ):?>
			<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<?php endif; ?>
		<link rel="alternate" type="application/rss+xml" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?> RSS Feed" href="<?php bloginfo( 'rss2_url' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
		<style amp-custom>
			<?php amp_custom_style(); ?>
		</style>

		<script async custom-element="amp-audio" src="https://cdn.ampproject.org/v0/amp-audio-0.1.js"></script>
		<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
		<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
		<script async custom-element="amp-social-share" src="https://cdn.ampproject.org/v0/amp-social-share-0.1.js"></script>
		<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>

		<?php amp_get_template_part( 'st-ogp', 'amp' ); ?>

		<?php amp_wp_head(); ?>
	</head>

	<body <?php body_class(); ?> >
		<div id="st-ami">
			<div id="wrapper" class="<?php st_wrap_class(); ?>">
				<div id="wrapper-in">
					<header id="<?php st_head_class(); ?>">
						<div id="headbox-bg">
							<div class="clearfix" id="headbox">

								<?php if ( false ): ?>
									<?php amp_get_template_part( 'st-accordion-menu', 'amp' ); ?>
								<?php endif; ?>

								<div id="header-l">
									<?php amp_get_template_part( 'st-header-logo', 'amp' ); ?>
								</div><!-- /#header-l -->
							</div><!-- /#headbox-bg -->
						</div><!-- /#headbox clearfix -->
					</header>

					<div id="content-w">
						<div id="content" class="clearfix">
							<div id="contentInner">

								<main>
									<article>
										<div id="post-<?php the_ID(); ?> st-post" <?php post_class(); ?>>

											<?php if ( trim( $GLOBALS['stdata217'] ) === '' ): ?>
												<?php amp_get_template_part( 'st-eyecatch', 'amp' ); ?>
											<?php endif; ?>

											<!--ぱんくず -->
											<?php if ( false ): ?>
												<div id="breadcrumb">
													<ol itemscope itemtype="http://schema.org/BreadcrumbList">
														<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
															<a href="<?php echo esc_url( home_url() ); ?>" itemprop="item"><span itemprop="name">HOME</span></a>
															&gt;
															<meta itemprop="position" content="1" />
														</li>
														<?php
														$categories = _st_get_terms_hierarchical( _st_get_deepest_term( get_the_category() ) );
														$i          = 2;
														?>

														<?php foreach ( $categories as $category ): ?>
															<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
																<a href="<?php echo get_category_link( $category->term_id ); ?>" itemprop="item">
																	<span itemprop="name"><?php echo esc_html( get_cat_name( $category->term_id ) ); ?></span>
																</a>
																&gt;
																<meta itemprop="position" content="<?php echo $i; ?>"/>
															</li>
															<?php $i ++; ?>
														<?php endforeach; ?>
													</ol>
												</div>
											<?php endif; ?>
											<!--/ ぱんくず -->

											<!--ループ開始 -->
											<?php if ( have_posts() ): ?>
											<?php while ( have_posts() ): the_post(); ?>

											<?php if ( false ): ?>
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
											<?php endif; ?>

											<h1 class="entry-title"><?php if ( st_is_ver_ex() ): st_the_title(); else: the_title(); endif; ?></h1>

											<?php get_template_part( 'itiran-date-singular' ); ?>

											<?php if ( trim( $GLOBALS['stdata217'] ) !== '' ): ?>
												<?php amp_get_template_part( 'st-eyecatch-under', 'amp' ); ?>
											<?php endif; ?>

											<div class="mainbox">

												<?php if ( amp_is_amp() && trim( $GLOBALS['stdata203'] ) === '' ): ?>
													<?php remove_filter( 'post_link', 'amp_post_link', PHP_INT_MAX ); ?>
													<p class="st-defaultlink"><a href="<?php the_permalink(); ?>">完全版を表示する</a></p>
													<?php add_filter( 'post_link', 'amp_post_link', PHP_INT_MAX, 3 ); ?>
												<?php endif; ?>

												<div id="nocopy">
													<div class="entry-content">
														<?php the_content(); ?>
													</div>
												</div>

												<?php amp_get_template_part( 'st-kai-page', 'amp' ); ?>
												<?php amp_get_template_part( 'st-ad', 'amp' ); ?>

											</div><!-- .mainboxここまで -->

											<?php amp_get_template_part( 'sns', 'amp' ); ?>
											<?php amp_get_template_part( 'popular-thumbnail', 'amp' ); ?>

											<?php if ( false ): ?>
												<p class="tagst">
													<i class="st-fa st-svg-folder-open-o" aria-hidden="true"></i>-<?php the_category( ', ' ) ?>
													<br />
													<?php the_tags( '<i class="st-fa st-svg-tags"></i>-', ', ' ); ?>
												</p>
											<?php endif; ?>

											<aside>

												<?php if ( false ): ?>
													<?php st_author(); ?>
												<?php endif; ?>

												<?php endwhile; ?>
												<?php else: ?>
													<p>記事がありません</p>
												<?php endif; ?>
												<!--ループ終了-->

												<?php if ( false ): ?>
													<?php if ( $GLOBALS['stdata6'] === '' ): ?>
														<?php if ( comments_open() || get_comments_number() ): ?>
															<?php comments_template(); ?>
														<?php endif; ?>
													<?php endif; ?>
												<?php endif; ?>

												<!--関連記事-->
												<?php amp_get_template_part( 'kanren', 'amp' ); ?>

												<!--ページナビ-->
												<div class="p-navi clearfix">
													<dl>
														<?php $prev_post = get_previous_post(); ?>
														<?php if ( ! empty( $prev_post ) ): ?>
															<dt>PREV</dt>
															<dd>
																<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>"><?php echo $prev_post->post_title; ?></a>
															</dd>
														<?php endif; ?>

														<?php $next_post = get_next_post(); ?>
														<?php if ( ! empty( $next_post ) ): ?>
															<dt>NEXT</dt>
															<dd>
																<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>"><?php echo $next_post->post_title; ?></a>
															</dd>
														<?php endif; ?>
													</dl>
												</div>
											</aside>

										</div>
										<!--/post-->
									</article>
								</main>
							</div>
							<!-- /#contentInner -->

							<!-- サイドバー -->
							<div id="side">
								<aside>
									<div id="mybox">
										<?php if ( is_active_sidebar( 19 ) ): ?>
											<div class="side-topad">
												<?php if ( function_exists( 'dynamic_sidebar' ) ): ?>
													<?php dynamic_sidebar( 19 ); ?>
												<?php endif; ?>
											</div>
										<?php endif; ?>
									</div>
								</aside>
							</div>
							<!-- /#side -->

							<!-- サイドバーここまで -->

						</div>
						<!--/#content -->

						<!-- フッター -->
					</div><!-- /contentw -->
					<footer>
						<div id="footer">
							<div id="footer-in">
								<?php amp_get_template_part( 'st-footer-link', 'amp' ); ?>
								<?php amp_get_template_part( 'st-footer-content', 'amp' ); ?>
							</div>

							<?php
							if ( trim( $GLOBALS['stdata490']) !== '' ) {
								$copy_year = $GLOBALS['stdata490'];
							} else {
								$copy_year = date( 'Y' );
							}
							if ( trim( $GLOBALS['stdata491']) !== '' ) {
								$copy_name = $GLOBALS['stdata491'];
							} else {
								$copy_name = get_bloginfo( 'name', 'display' );
							}
							echo '<p class="copyr"><small>&copy; ' . $copy_year . ' ' . $copy_name . '</small></p>'; ?>
						</div>
					</footer>

				</div>
				<!-- /#wrapperin -->
			</div>
			<!-- /#wrapper -->
		</div><!-- /#st-ami -->

		<?php if ( false ): ?>
			<?php if ( trim( $GLOBALS['stdata109'] ) === '' ): ?>
				<div id="page-top"><a href="#wrapper" class="st-fa st-svg-angle-up"></a></div>
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( trim( $GLOBALS['stdata124'] ) !== '' ): ?>
			<amp-analytics type="googleanalytics" id="analyticsaf">
				<script type="application/json">
				{
					"vars": {
					"account": "UA-<?php echo esc_js( $GLOBALS['stdata124'] ); ?>"
					},
					"triggers": {
						"trackPageview": {
						"on": "visible",
						"request": "pageview"
						}
					}
				}
				</script>
			</amp-analytics>
		<?php endif; ?>

		<?php amp_wp_footer(); ?>
	</body>
</html>
