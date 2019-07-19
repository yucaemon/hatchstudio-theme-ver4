<div class='news-list'>
<div class='header-side'>
<div class='header-side__title'>
最新記事
<i class="fas fa-arrow-up"></i>
</div>
</div>
<div class='news-list__container'>
<?php query_posts('posts_per_page=4'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countlists++; ?>
<?php if($countlists == 3 or $countlists == 6 or $countlists == 12) : ?>

<!-- ここに広告のコードor画像など --!>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-fb+5w+4e-db+86"
     data-ad-client="ca-pub-1574488309106788"
     data-ad-slot="7362947172"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php endif; ?>
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
</div>
