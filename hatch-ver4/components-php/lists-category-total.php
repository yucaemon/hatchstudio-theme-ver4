<dl class='news-list list-category-total'>
<dt></dt>
<div class='news-list__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/side__category-txt.svg">
</div>
<div class='news-list__container two-column-sp'>
<?php
$post_id = get_the_ID();
foreach((get_the_category()) as $cat) {
$cat_id = $cat->cat_ID ;
break ;
}
query_posts(
array(
'cat' => $cat_id,
'showposts' => 11,
'post__not_in' => array($post_id)
)
);
if(have_posts()) :
?>
<?php while (have_posts()) : the_post(); ?>
  <!--表示する内容が入ります。-->
  <dd class="news-list__content flexbox">
    <div class="eyecatch">
      <div class="news-list__thumb-img">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 230, 230 ) ); ?></a>
      </div>
    </div>
    <div class="news-list__header">
      <p class="news-list__title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </p>
    </div>
  </dd>
  <!--表示する内容ここまで-->
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
</div>
</dl>
