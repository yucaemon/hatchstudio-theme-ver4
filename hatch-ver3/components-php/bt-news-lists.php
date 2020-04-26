<div class='news-list'>
<div class='header-side'>
<div class='header-side__title'>
最新記事!
<i class="fas fa-arrow-up"></i>
</div>
</div>
<div class='news-list__container'>
<?php query_posts('posts_per_page=7'); ?>

<?php
$ads_infeed = array(3,5,8); //何番目に表示したいか
$ads_infeed_count = '1';
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countlists++; ?>
<?php if($countlists == 3 or $countlists == 6 or $countlists == 12) : ?>
<?php endif; ?>
<!--表示する内容が入ります。-->
<?php if (is_single(array('25907','25713','7586'))) : ?>
<?php else: ?>
  <dd class="news-list__content google-ads">
    <?php
    $ads_disp = in_array($ads_infeed_count, $ads_infeed);
    if($ads_disp){
    ?>
    <!-- ここにインフィード広告のコードを入れる -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-format="fluid"
         data-ad-layout-key="-hm+j-1j-ah+pk"
         data-ad-client="ca-pub-1574488309106788"
         data-ad-slot="2947799918"></ins>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
    <?php
    }
    $ads_infeed_count++;
    ?>
    </dd>
  <?php endif; ?>
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
