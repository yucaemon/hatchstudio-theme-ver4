<dl class='news-list'>
<dt>
<div class='header-side__img--sp'>
<img src="<?php echo get_template_directory_uri(); ?>/images/category-popular.svg">
</div>
<div class='header-side flexbox'>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-left.svg">
</div>
<div class='header-side__txt--en'>
NEW POSTS
<i class="far fa-clock"></i>
</div>
<div class='header-side__txt--jp'>
新着記事
</div>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-right.svg">
</div>
</div>
</dt>
<div class='news-list__container two-column-sp'>
<?php query_posts('posts_per_page=6'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countlists++; ?>
  <!--表示する内容が入ります。-->
  <dd class="news-list__content flexbox">
    <div class="eyecatch">
      <div class="news-list__thumb-img">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($this_post->ID,
          array( 230, 230 )); ?></a>
      </div>
    </div>
    <div class="news-list__header">
      <p class="news-list__title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </p>
    </div>
  </dd>
  <!--表示する内容ここまで-->

<?php endwhile; endif; ?>
</div>
</dl>
