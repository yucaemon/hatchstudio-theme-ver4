<?php get_header(); ?>

<div id="content" class="clearfix">
	<div id="contentInner">
		<main <?php st_text_copyck(); ?>>
			<article>
				<!--ぱんくず -->
				<?php if ( is_category() ) { ?>
					<div id="breadcrumb">
					<ol itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?php echo esc_url( home_url() ); ?>" itemprop="item"><span itemprop="name"><?php echo esc_html( $GLOBALS["stdata141"] ); ?></span></a> > <meta itemprop="position" content="1" /></li>
					<?php
					$catid = get_query_var('cat');
					if( !$catid ){
					$cat_now = get_the_category();
					$cat_now = $cat_now[0];
					$catid  = $cat_now->cat_ID;
					}
					?>
					<?php $allcats = array( $catid ); ?>
					<?php
					while ( !$catid == 0 ) {
						$mycat = get_category( $catid );
						$catid = $mycat->parent;
						array_push( $allcats, $catid );
					}
					array_pop( $allcats );
					$allcats = array_reverse( $allcats );
					?>
					<?php
					$i = 2;
					foreach ( $allcats as $catid ): ?>
							<li itemprop="itemListElement" itemscope
      itemtype="http://schema.org/ListItem"><a href="<?php echo esc_url( get_category_link( $catid ) ); ?>" itemprop="item">
								<span itemprop="name"><?php echo esc_html( get_cat_name( $catid ) ); ?></span> </a> &gt;
								<meta itemprop="position" content="<?php echo $i; ?>" />
							</li>
					<?php  $i++; ?>
					<?php endforeach; ?>
					</ol>
					</div>

				<?php } elseif ( is_tag() ) { ?>
					<div id="breadcrumb">
					<ol>
						<li><a href="<?php echo esc_url( home_url() ); ?>"><span>HOME</span></a> > </li>
						<li><?php single_tag_title(); ?></li>
					</ol>
					</div>
				<?php } elseif ( is_author() ) { ?>
					<div id="breadcrumb">
					<ol>
						<li><a href="<?php echo esc_url( home_url() ); ?>"><span>HOME</span></a> >  </li>
						<li><?php the_author_meta('display_name', get_query_var('author')); ?></li>
					</ol>
					</div>
				<?php } elseif(is_attachment()){ ?>
					<div id="breadcrumb">
					<ol>
						<li><a href="<?php echo esc_url( home_url() ); ?>"><span>HOME</span></a> >  </li>
						<?php if($post -> post_parent != 0 ): ?> >
							<li><a href="<?php echo get_permalink($post -> post_parent); ?>"><?php echo get_the_title($post -> post_parent); ?></a> > </li>
						<?php endif; ?>
							<li><?php echo $post -> post_title; ?></li>
					</ol>
					</div>
				<?php } elseif(is_date()){ ?>
					<div id="breadcrumb">
					<ol>
						<li><a href="<?php echo esc_url( home_url() ); ?>"><span>HOME</span></a> >  </li>

						<?php if(is_day()): ?>
							<li><a href="<?php echo get_year_link(get_query_var('year')); ?>"><?php echo get_query_var('year'); ?>年</a> > </li>
							<li><a href="<?php echo get_month_link(get_query_var('year'), get_query_var('monthnum')); ?>"><?php echo get_query_var('monthnum'); ?>月</a> > </li>
							<li><?php echo get_query_var('day'); ?>日</li>
						<?php elseif(is_month()): ?>
							<li><a href="<?php echo get_year_link(get_query_var('year')); ?>"><?php echo get_query_var('year'); ?>年</a> > </li>
							<li><?php echo get_query_var('monthnum'); ?>月</li>
						<?php elseif(is_year()): ?>
							<li><?php echo get_query_var('year'); ?>年</li>
						<?php endif; ?>
					</ol>
					</div>
				<?php } else {} ?>
				<!--/ ぱんくず -->
				<!--ループ開始-->
				<div class="post">
					<h1 class="entry-title">
						<?php if ( is_category() ) { ?>
							<?php single_cat_title(); ?>
						<?php } elseif ( is_tag() ) { ?>
							<?php single_tag_title(); ?>
						<?php } elseif ( is_tax() ) { ?>
							<?php single_term_title(); ?>
						<?php } elseif ( is_day() ) { ?>
							日別アーカイブ：<?php echo get_the_time( 'Y年m月d日' ); ?>
						<?php } elseif ( is_month() ) { ?>
							月別アーカイブ：<?php echo get_the_time( 'Y年m月' ); ?>
						<?php } elseif ( is_year() ) { ?>
							年別アーカイブ：<?php echo get_the_time( 'Y年' ); ?>
						<?php } elseif ( is_author() ) { ?>
							<?php echo esc_html( get_queried_object()->display_name ); ?>の記事
						<?php } elseif ( isset( $_GET['paged'] ) && !empty( $_GET['paged'] ) ) { ?>
							ブログアーカイブ
						<?php } ?>
					</h1>
				</div><!-- /post -->
				<aside>
					<?php get_template_part( 'itiran' ); ?>
					<?php get_template_part( 'st-pagenavi' ); ?>
				</aside>
			</article>
		</main>
	</div>
	<!-- /#contentInner -->
	<?php get_sidebar(); ?>
</div>
<!--/#content -->
<?php get_footer(); ?>
