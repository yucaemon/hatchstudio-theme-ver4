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
    <?php if (is_single(array('25907','25713','7586'))) : ?>
    <?php else: ?>
      <?php
      $ads_disp = in_array($ads_infeed_count, $ads_infeed);
      if($ads_disp){
      ?>
      <li class='eyecatch'>
      <!-- ここにインフィード広告のコードを入れる -->
      <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
      <style type="text/css">
      .adslot_1 { width: 100%; height: 100px; }
      @media (max-width:680px) { .adslot_1 { width: 300px; height: 60px; } }
      }
      </style>
      <ins class="adsbygoogle adslot_1"
           style="display:block; text-align:center;"
           data-ad-layout="in-article"
           data-ad-format="fluid"
           data-ad-client="ca-pub-1574488309106788"
           data-ad-slot="2119656172"></ins>
      <script>
        window.onload = function() {
          var element = document.getElementsByClassName("adsbygoogle")[0];
          while (element.firstChild) element.removeChild(element.firstChild);
          (adsbygoogle = window.adsbygoogle || []).push({});
         }
      </script>
      </li>
      <?php
      }
      $ads_infeed_count++;
      ?>
    <?php endif; ?>
    <li class='eyecatch'>
      <div class='post-lists__img article-list__img imgWrap'><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
      <div class="post-lists__text article-list__text"><p class="post-lists__title list-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p></div>
      <!--表示する内容ここまで-->
    </li>
  <?php endforeach; endif; ?>
</ul>
</div>
</div>
