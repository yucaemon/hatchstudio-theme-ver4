<?php include('head.php'); ?>
<body>
<div class='outer index'>
<?php include('components-php/header.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<section class='section first-section'>
<div class='outer__inner flexbox'>
<div class='middle-contain'>
<ul class='post-lists article-list'>
  <?php $args = array(
    'posts_per_page' => 6,                //表示（取得）する記事の数
    'post_type' => 'post'    //投稿タイプの指定
  );
  $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
        <li class=''>
          <div class='post-lists__img article-list__img'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <div class='post-lists__text article-list__text'>
            <h3 class='post-lists__title list-title'>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </div>
        </li>
    <?php endforeach; ?>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php else : //記事が無い場合 ?>
      <li><p>記事はまだありません。</p></li>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
</ul>
<div class='more-page'>
<div class='more-page__btn big-btn'>
<a href="<?php echo esc_url( home_url( '/archive/' ) ); ?>">> 記事一覧ページへ</a>>
</div>
</div>
</div>
<div class='side-contain'>
<?php include('components-php/news-list.php'); ?>
</div>
</div>
</section>
<?php include('components-php/share-house-ad.php'); ?>
<section class='section second-section'>
<div class='outer__inner flexbox'>
<div class='middle-contain'>
  <ul class='post-lists article-list flexbox'>
    <?php $args = array(
      'posts_per_page' => 6,                //表示（取得）する記事の数
      'post_type' => 'post'    //投稿タイプの指定
    );
    $posts = get_posts( $args );
      if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
          <li class='flexbox'>
            <div class='post-lists__img article-list__img'>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            </div>
            <div class='post-lists__text article-list__text'>
              <h3 class='post-lists__title list-title'>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <p class='post-lists__read list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,95) ; ?></p>
              <div class="category-icon">カテゴリー</div>

            </div>
          </li>
      <?php endforeach; ?>
      <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
      <?php else : //記事が無い場合 ?>
        <li><p>記事はまだありません。</p></li>
      <?php endif;
      wp_reset_postdata(); //クエリのリセット ?>
  </ul>
</div>
<div class='more-page'>
<div class='more-page__btn big-btn'>
<a href="<?php echo esc_url( home_url( '/archive/' ) ); ?>">> 記事一覧ページへ</a>>
</div>
</div>
<div class='side-contain'>
<!-- 広告 -->
<!-- 四角はっち公告 -->
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
  style="display:inline-block;width:336px;height:280px"
  data-ad-client="ca-pub-1574488309106788"
  data-ad-slot="5136876359"></ins>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<!-- 広告 -->
<?php include('components-php/keywords-category.php'); ?>
<?php include('components-php/keywords.php'); ?>
</div>
</div>
</section>
<section class='section sns-container'>
<?php include('components-php/sns-btns.php'); ?>
</section>
<?php include('components-php/sponsor-blogger.php'); ?>
<?php include('components-php/business.php'); ?>
<section class='section third-section'>
<div class='outer__inner flexbox'>
<div class='middle-contain'>
<ul class='post-lists article-list'>
  <?php $args = array(
    'posts_per_page' => 6,                //表示（取得）する記事の数
    'post_type' => 'post'    //投稿タイプの指定
  );
  $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
        <li class=''>
          <div class='post-lists__img article-list__img'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <div class='post-lists__text article-list__text'>
            <h3 class='post-lists__title list-title'>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </div>
        </li>
    <?php endforeach; ?>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php else : //記事が無い場合 ?>
      <li><p>記事はまだありません。</p></li>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
</ul>
<div class='more-page'>
<div class='more-page__btn big-btn'>
<a href="<?php echo esc_url( home_url( '/archive/' ) ); ?>">> 記事一覧ページへ</a>>
</div>
</div>
</div>
<div class='side-contain'>
<?php include('components-php/news-list.php'); ?>
</div>
</div>
</section>
<?php include('components-php/annie-banner.php'); ?>
<?php include('components-php/annie-banner.php'); ?>
</div>
</body>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>