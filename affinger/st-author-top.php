<?php // この記事を書いた人（記事上）
if (( isset($GLOBALS['stdata497']) && $GLOBALS['stdata497'] === 'yes' )
&& ( is_single() || ( is_page() && ( isset($GLOBALS['stdata212']) && $GLOBALS['stdata212'] === 'yes' )))) :
	$change_user_id = intval( trim( get_option( 'st-data437' ) ) );
	$user_info = get_userdata($post->post_author);
	$st_users_id = $user_info->ID;
?>
<div class="st-shortcode-author">
	<div class="st-author-box">
		<div id="st-tab-box" class="clearfix">
			<div class="active">
				<dl>
				<dt>
					<a rel="nofollow" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
						<?php if ( ( $st_users_id === 1 || $st_users_id === $change_user_id ) && get_option( 'st_author_profile_avatar' ) ): ?>
							<img src="<?php echo esc_url( get_option( 'st_author_profile_avatar' ) ); ?>" width="80px" height="80px">
						<?php else: ?>
							<?php echo get_avatar( $st_users_id, 80 ); ?>
						<?php endif; ?>
					</a>
				</dt>
				<dd>
					<p class="st-author-nickname"><?php the_author_meta( 'nickname',$st_users_id ); ?></p>
					<p class="st-author-description"><?php the_author_meta( 'description',$st_users_id ); ?></p>
					<p class="st-author-sns">
						<?php if(get_the_author_meta('twitter',$st_users_id)): ?>
							<a rel="nofollow" class="st-author-twitter" href="<?php the_author_meta('twitter',$st_users_id); ?>"><i class="st-fa st-svg-twitter" aria-hidden="true"></i></a>
						<?php endif; ?>
						<?php if(get_the_author_meta('facebook',$st_users_id)): ?>
							<a rel="nofollow" class="st-author-facebook" href="<?php the_author_meta('facebook',$st_users_id); ?>"><i class="st-fa st-svg-facebook-square" aria-hidden="true"></i></a>
						<?php endif; ?>
						<?php if(get_the_author_meta('instagram',$st_users_id)): ?>
							<a rel="nofollow" class="st-author-instagram" href="<?php the_author_meta('instagram',$st_users_id); ?>"><i class="st-fa st-svg-instagram" aria-hidden="true"></i></a>
						<?php endif; ?>
						<?php if(get_the_author_meta('youtube',$st_users_id)): ?>
							<a rel="nofollow" class="st-author-youtube" href="<?php the_author_meta('youtube',$st_users_id); ?>"><i class="st-fa st-svg-youtube-play" aria-hidden="true"></i></a>
						<?php endif; ?>
						<?php if(get_the_author_meta('user_url',$st_users_id)): ?>
							<a rel="nofollow" class="st-author-homepage" href="<?php the_author_meta('user_url',$st_users_id); ?>"><i class="st-fa st-svg-home" aria-hidden="true"></i></a>
						<?php endif; ?>
					</p>
				</dd>
				</dl>
			</div>
		</div>
	</div>
</div>
<?php endif;
