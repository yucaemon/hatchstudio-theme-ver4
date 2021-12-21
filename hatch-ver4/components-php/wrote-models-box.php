<div class='wrote-models-lists'>
<?php
$user = wp_get_current_user();
if ( $user ) :
?>
<div class="wrote-models-lists__header">これを書いた人 </div>
<div class="author__img circle"><?php echo get_avatar( get_the_author_id(), 50 ); ?></div>
<div class="wrote-models-lists__name"><?php echo get_the_author(); ?></div>
<div class="author-profile content-bottom-widgets">
  <div class="author-profile-description">
    <div class="author-profile-sns">
      <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">この人の記事をもっと見る</a>
    </div>
  </div>
</div>

<?php endif; ?>
</div>
