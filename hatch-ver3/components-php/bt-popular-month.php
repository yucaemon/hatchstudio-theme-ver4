<div class='bottom-popular'>
<div class='header-side'>
<div class='header-side__title'>
人気月間検索
<i class="fas fa-fire"></i>
トレンド記事
</div>
</div>
<div class='bottom-popular__body flexbox--spacebetween'>
<?php $args = get_popular_args('monthly', '12');
query_posts($args); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <dd class="bottom-popular__content">
    <div class="bottom-popular__thumb-img"><a href="<?php echo get_permalink($this_post->ID); ?>"><?php the_post_thumbnail() ?></a></div>
    <p class="bottom-popular__title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></p>
  </dd>


<?php endwhile; else : ?>
<li>該当なし</li>
<?php endif;
wp_reset_query(); ?>
</div>
</div>