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
<div class='hatching-house__btn--img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/pink-guy.svg">
</div>
</div>
</section>
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
<div class='sns-icons flexbox'>
<div class='sns-icons__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/share-facebook-icon.svg">
</div>
<div class='sns-icons__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/share-twitter-icon.svg">
</div>
<div class='sns-icons__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/share-pokect-icon.svg">
</div>
</div>
</section>
<section class='section ad-banner blogger'>
<div class='blogger__container'>
<div class='blogger__header--img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/yman.svg">
</div>
<div class='blogger__header'>
これまでのコラボしたブロガー＆メディア＆企業さん
</div>
<div class='blogger__body flexbox'>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/popo.jpg">
</div>
<div class='blogger__box__name'>
365日おいしいものだけ
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/yuno.jpg">
</div>
<div class='blogger__box__name'>
ゾニーとキッズ☆アメリカ4コマ物語☆
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/theuslife.jpg">
</div>
<div class='blogger__box__name'>
THE US LIFE
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/panera.jpg">
</div>
<div class='blogger__box__name'>
Happy California Life♪
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/kaodebi.jpg">
</div>
<div class='blogger__box__name'>
バークレーからこんにちは。
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/yuko.jpg">
</div>
<div class='blogger__box__name'>
アメリカ国際結婚バツイチアラサー
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/motto.jpg">
</div>
<div class='blogger__box__name'>
もっとサンフランシスコ
</div>
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/takagi.jpg">
</div>
<div class='blogger__box__name'>
世界中で暮らす。
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/miki.png">
</div>
<div class='blogger__box__name'>
アラサー女子のシリコンバレー奮闘記
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/freerider.jpg">
</div>
<div class='blogger__box__name'>
フリーライダー(YOUTUBER)
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/EF.jpg">
</div>
<div class='blogger__box__name'>
EF エデュケーション
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/theintern.jpg">
</div>
<div class='blogger__box__name'>
The Intern
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/hanterbook.png">
</div>
<div class='blogger__box__name'>
hanter book
</div>
</div>
<div class='cross-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/bathu.svg">
</div>
<div class='blogger__box'>
<div class='blogger__box__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/you.png">
</div>
<div class='blogger__box__name'>
YOU!!
</div>
</div>
</div>
</div>
</section>
<section class='section ad-banner annie flexbox'>
<div class='annie-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/annie-banner.jpg">
</div>
<div class='annie-content'>
<div class='annie-header-sub'>
姉妹サイトOPEN!!
</div>
<div class='annie-header-main'>
旅するように暮らそう。
</div>
<div class='annie-header-txt'>
オーガニックで自由な暮らしをお届けするマガジン
</div>
<button class='btn btn-round-white'>
サイトはこちらから
</button>
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
