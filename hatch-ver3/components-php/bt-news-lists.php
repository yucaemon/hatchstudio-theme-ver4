<div class='news-list column-4'>
<div class='header-side'>
<div class='header-side__title'>
最新記事
<i class="fas fa-arrow-up"></i>
</div>
</div>
<div class='news-list__container'>
<?php query_posts('posts_per_page=20'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countlists++; ?>
<?php if($countlists == 3 or $countlists == 6 or $countlists == 12) : ?>
//ここに広告のコードor画像など//
<?php endif; ?>
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

<?php endwhile; endif; ?>
</div>
</div>
