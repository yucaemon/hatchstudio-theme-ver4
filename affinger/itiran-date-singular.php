<?php // 記事一覧の投稿日
$st_is_ex    = st_is_ver_ex();
if ( $st_is_ex && ( get_the_date() != get_the_modified_date() ) && isset($GLOBALS['stdata592']) && $GLOBALS['stdata592'] === 'yes' ) :
	$today_date = date( get_option( 'date_format' ) );
else:
	$today_date = '';
endif;
$show_published_date = ( get_option( 'st-data140', '' ) === 'yes' );

$user_info       = '';
$st_users_id     = '';
$author_url      = '';
$author_nickname = '';
$author_link     = '';

if ( is_single() || is_page() ):

	$user_info       = get_userdata($post->post_author);
	$st_users_id     = $user_info->ID;
	$author_nickname = get_the_author_meta( 'nickname',$st_users_id );
	$author_link     = get_the_author_meta('author_url',$st_users_id);

	if($author_link):
		$author_url = $author_link;
	else:
		$author_url = get_author_posts_url( get_the_author_meta( 'ID' ) );
	endif;

endif;

if( get_theme_mod('st_kuzu_b') ):
	$st_kuzu_b_class = ' st-kuzu-b';
	$st_kuzu_b_html  = '<span class="st-writer-nickname">執筆者 : <a target="_blank" rel="nofollow noopener" href="' . $author_url . '">' . $author_nickname . '</a></span>';
else:
	$st_kuzu_b_class = '';
	$st_kuzu_b_html  = '';
endif;

?>

<?php if ( ! is_front_page() ): ?>
	<div class="blogbox <?php st_hidden_class(); echo $st_kuzu_b_class; ?>">
		<p><span class="kdate">
			<?php if( $st_is_ex ):
				$postID = get_the_ID();
				$updatewidgetset = get_post_meta( $postID, 'updatewidget_set', true );
			else:
				$updatewidgetset = '';
			endif;

			if ( amp_is_amp() ) :
				if ( ! $show_published_date && trim ( $updatewidgetset ) === '' && $today_date ): ?>
					<?php if ( isset($GLOBALS['stdata140']) && $GLOBALS['stdata140'] === 'both' ) : ?>
						<i class="st-fa st-svg-clock-o"></i> <?php echo esc_html( get_the_date() ); ?>
					<?php endif; ?>
					<i class="st-fa st-svg-refresh"></i> <time class="updated" datetime="<?php echo date( DATE_ISO8601 ); ?>"><?php echo esc_html( $today_date ); ?></time>
				<?php elseif ( ! $show_published_date && trim ( $updatewidgetset ) === '' && ( get_the_date() != get_the_modified_date() ) ) : ?>
					<?php if ( isset($GLOBALS['stdata140']) && $GLOBALS['stdata140'] === 'both' ) : ?>
						<i class="st-fa st-svg-clock-o"></i> <?php echo esc_html( get_the_date() ); ?>
					<?php endif; ?>
					<i class="st-fa st-svg-refresh"></i> <time class="updated" datetime="<?php echo esc_attr( get_the_modified_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_modified_date() ); ?></time>
				<?php else: ?>
					<i class="st-fa st-svg-clock-o"></i> <time class="updated" datetime="<?php echo esc_attr( get_the_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				<?php endif;

			else:

				if ( ! $show_published_date && trim ( $updatewidgetset ) === '' && $today_date ): ?>
					<?php if ( isset($GLOBALS['stdata140']) && $GLOBALS['stdata140'] === 'both' ) : ?>
						<i class="st-fa st-svg-clock-o"></i><?php echo esc_html( get_the_date() ); ?>
					<?php endif; ?>
					<i class="st-fa st-svg-refresh"></i><time class="updated" datetime="<?php echo date( DATE_ISO8601 ); ?>"><?php echo esc_html( $today_date ); ?></time>
				<?php elseif ( ! $show_published_date && trim ( $updatewidgetset ) === '' && ( get_the_date() != get_the_modified_date() ) ) : ?>
					<?php if ( isset($GLOBALS['stdata140']) && $GLOBALS['stdata140'] === 'both' ) : ?>
						<i class="st-fa st-svg-clock-o"></i><?php echo esc_html( get_the_date() ); ?>
					<?php endif; ?>
					<i class="st-fa st-svg-refresh"></i><time class="updated" datetime="<?php echo esc_attr( get_the_modified_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_modified_date() ); ?></time>
				<?php else: ?>
					<i class="st-fa st-svg-clock-o"></i><time class="updated" datetime="<?php echo esc_attr( get_the_date( DATE_ISO8601 ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
				<?php endif;
			endif; ?>
		</span><?php echo $st_kuzu_b_html; // スタイルB ?></p>
	</div>
<?php endif; ?>
