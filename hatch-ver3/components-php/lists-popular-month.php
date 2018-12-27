<dl class='news-list'>
<dt>
<div class='header-side flexbox'>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-left.svg">
</div>
<div class='header-side__txt--en'>
POPULOR
<i class="far fa-clock"></i>
</div>
<div class='header-side__txt--jp'>
トレンド週間ランキング
</div>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-right.svg">
</div>
</div>
</dt>
<div class='news-list__container'>
<?php $args = get_popular_args('weekly', '7');
query_posts($args); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <dd class="news-list__content flexbox">
    <div class="news-list__thumb-img"><a href="<?php echo get_permalink($this_post->ID); ?>"><?php the_post_thumbnail() ?></a></div>
    <div class="news-list__header">
      <p class="news-list__title"><?php the_title() ?></a></p>
    </div>
  </dd>





<?php endwhile; else : ?>
<li>該当なし</li>
<?php endif;
wp_reset_query(); ?>
</div>
</dl>
