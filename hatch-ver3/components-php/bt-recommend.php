<div class='bottom-popular'>
<div class='header-side'>
<div class='header-side__title'>
おすすめ記事
<i class="fas fa-fire"></i>
人気ランキング
</div>
</div>
<div class='bottom-popular__body'>
<ul class='post-lists article-list box-list flexbox'>
  <?php
  $posts = get_posts(array(
  'posts_per_page' => 9, // 表示件数
  'category' => '788' // テスト環境おすすめID630-本番ID788
  ));
  ?>
  <?php
  $ads_infeed = array(1,5,9); //何番目に表示したいか
  $ads_infeed_count = '1';
  ?>
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
    <!--表示する内容が入ります。-->
    <?php
    $ads_disp = in_array($ads_infeed_count, $ads_infeed);
    if($ads_disp){
    ?>
    <!-- ここにインフィード広告のコードを入れる -->
    <li class='eyecatch'>
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-format="fluid"
           data-ad-layout-key="-7l+f1-1g-4q+e1"
           data-ad-client="ca-pub-1574488309106788"
           data-ad-slot="3447327512"></ins>
      <script>
           (adsbygoogle = window.adsbygoogle || []).push({});
      </script>
      <?php
      }
      $ads_infeed_count++;
      ?>
    </li>
    <li class='eyecatch'>
      <div class='post-lists__img article-list__img imgWrap'><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
      <div class="post-lists__text article-list__text"><p class="post-lists__title list-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p></div>
      <!--表示する内容ここまで-->
    </li>
  <?php endforeach; endif; ?>
</ul>
</div>
</div>
