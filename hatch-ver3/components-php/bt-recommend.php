<div class='bottom-popular two-column-sp'>
<div class='header-side'>
<div class='header-side__title'>
おすすめ記事
<i class="fas fa-fire"></i>
人気ランキング
</div>
</div>
<div class='bottom-popular__body flexbox--spacebetween'>
<ul class='post-lists article-list box-list  flexbox'>
  <?php
  $posts = get_posts(array(
  'posts_per_page' => 9, // 表示件数
  -#'category' => '788' // 本番環境おすすめカテゴリID
  'category' => '630' // テスト環境のおすすめカテゴリID
  ));
  ?>
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
    <!--表示する内容が入ります。-->
    <li class='eyecatch'>
      <div class='post-lists__img article-list__img imgWrap'><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
      <div class="post-lists__text article-list__text"><p class="post-lists__title list-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p></div>
      <!--表示する内容ここまで-->
    </li>
  <?php endforeach; endif; ?>
</ul>
</div>
</div>