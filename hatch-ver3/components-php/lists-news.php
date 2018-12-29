<dl class='news-list'>
<dt>
<div class='header-side flexbox'>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-left.svg">
</div>
<div class='header-side__txt--en'>
POPULOR
</div>
<div class='header-side__txt--jp'>
人気ランキング
</div>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-right.svg">
</div>
</div>
</dt>
<div class='news-list__container'>
<?php
$posts = get_posts(array(
'posts_per_page' => 7, // 表示件数
));
?>
<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

<!--表示する内容が入ります。-->
<dd class="news-list__content flexbox">
  <div class="news-list__thumb-img">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
  </div>
  <p class="news-list__title">
    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
  </p>
</dd>
<!--表示する内容ここまで-->

<?php endforeach; endif; ?>
</div>
</dl>
