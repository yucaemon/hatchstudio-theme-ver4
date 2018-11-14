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
<section class='section ad-banner hatching-house zigzag'>
<div class='hatching-house__header'>
<div class='hatching-house__header--jp'>
初渡米！女性一人旅でも安心なハウス
</div>
<div class='hatching-house__header--en flexbox'>
<div class='hatching-house__header--icon'>
<img src="<?php echo get_template_directory_uri(); ?>/images/house-text-usa.svg">
</div>
<div class='hatching-house__header--txt'>
<img src="<?php echo get_template_directory_uri(); ?>/images/house-txt.svg">
</div>
</div>
</div>
<div class='hatching-house__container flexbox'>
<ul class='hatching-house__pictures flexbox'>
<li class='hatching-house--berkeley'>
<div class='hatching-house--img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/house-img-berkeley.jpg">
</div>
<div class='hatching-house--txt'>
UCバークレー家探しサポート
</div>
</li>
<li class='hatching-house--concord'>
<div class='hatching-house--img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/house-img-portland.jpg">
</div>
<div class='hatching-house--txt'>
ポートランド宿泊ゲストハウス
</div>
</li>
<li class='hatching-house--portland'>
<div class='hatching-house--img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/house-img-sf.jpg">
</div>
<div class='hatching-house--txt'>
SFバークレーシェアハウス
</div>
</li>
</ul>
<div class='hatching-house__btn flexbox'>
<button class='btn btn-round-white'>
お問い合わせはこちら
</button>
<div class='hatching-house__btn--img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/pink-guy.svg">
</div>
</div>
</div>
</section>
<section class='section second-section'>
<div class='outer__inner flexbox'>
  <ul class='post-lists article-list flexbox'>
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
<div class='side-contain'>
<?php include('components-php/keywords.php'); ?>
</div>
</div>
</section>
<div class='side-contain'>
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/models-lists.php'); ?>
<?php include('instagram-widget.php'); ?>
<?php include('chatbox.php'); ?>
</div>
</div>
</body>
　
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
