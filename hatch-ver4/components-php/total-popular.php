<dl class='news-list'>
<dt>
<div class='header-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/total-popular.svg">
</div>
</dt>
<?php
$posts = get_posts(array(
'posts_per_page' => 5, // 表示件数
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
</dl>
