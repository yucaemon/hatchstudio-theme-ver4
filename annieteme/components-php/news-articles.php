<div class='articles news-articles'>
<div class='news-articles__title components-title'>
最新の記事はこちら
</div>
<?php
$posts = get_posts(array(
'posts_per_page' => 12, // 表示件数
));
?>
<div class="news-articles__container flexbox--spacebetween">
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <!--表示する内容が入ります。-->
      <div class="news-articles__content">
        <div class="news-articles__img">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="news-articles__text">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      </div>
      <!--表示する内容ここまで-->
  <?php endforeach; endif; ?>
 </div>
</div>
