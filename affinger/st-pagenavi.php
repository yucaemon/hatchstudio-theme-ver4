<?php
if ( ! function_exists( 'st_pagenavi_args' ) ) {
	function st_pagenavi_args( $args = array() ) {
		if ( ! is_home() || ! isset( $GLOBALS['stdata99'] ) || empty( $GLOBALS['stdata99'] ) ) {
			return $args;
		}

		$news_query = new WP_Query( array(
			'posts_per_page' => get_option( 'posts_per_page' ),
			'cat'            => (int) $GLOBALS['stdata99'],
		) );

		$defaults = array(
			'total' => $news_query->max_num_pages,
		);

		return array_merge( $defaults, $args );
	}
}
?>
<?php
global $wp_query;
$all_posts     = wp_count_posts();
$publish_posts = $all_posts->publish;
$paged         = get_option('posts_per_page');
$big           = 999999999;
if ( $publish_posts <= $paged ) {
} elseif( st_is_mobile() ){ ?>
	<div class="st-pagelink">
		<div class="st-pagelink-in">
		<?php
		echo paginate_links( st_pagenavi_args( array(
			'base'     => str_replace( $big, '%#%', get_pagenum_link( $big, false ) ),
			'format'   => '?paged=%#%',
			'current'  => max( 1, get_query_var( 'paged' ) ),
			'end_size' => 0,
			'mid_size' => 1,
			'prev_text'          => '&laquo; Prev',
			'next_text'          => 'Next &raquo;',
		) ) );
		?>
		</div>
	</div>
<?php }else{ ?>
	<div class="st-pagelink">
		<div class="st-pagelink-in">
		<?php
		echo paginate_links( st_pagenavi_args( array(
			'base'    => str_replace( $big, '%#%', get_pagenum_link( $big, false ) ),
			'format'  => '?paged=%#%',
			'current' => max( 1, get_query_var( 'paged' ) ),
			'prev_text'          => '&laquo; Prev',
			'next_text'          => 'Next &raquo;',
		) ) );
		?>
		</div>
	</div>
<?php } ?>
