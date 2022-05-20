<?php /** *  Template Name:  areaページ */ ?>
<?php include('head.php'); ?>
<body class='area-page'>
<div class='pages outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='pages__container__title'>
<div class='outer__inner'>
<div class='title-bar text-centering-pearent flexbox--h-center'>
<div class='title-bar-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/area-page__tree-right.svg">
</div>
<div class='title-bar-txt text-centering-child'>
ハワイの暮らし
<div class='title-bar-txt-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/area-page__lamp.svg">
</div>
</div>
<div class='title-bar-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/area-page__tree-left.svg">
</div>
</div>
</div>
</div>
<div class='section pages__container__area-top-post zigzag zigzag-pink'>
<div class='outer__inner area-top-post__boxs flexbox--h-center'>
<div class='area-top-post__box flexbox'>
<div class='area-top-post__box-pic pic-frame-white'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
</div>
<div class='area-top-post__box-txt'>
<div class='area-top-post__box-txt-pic'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking01.svg">
</div>
<div class='area-top-post__box-txt-p'>
全米No1住みたい町『ポートランド観光』ダウンタウン行ってきた- おすすめカフェ&雑貨めぐりダウンタウン編 –
</div>
<div class='original-btn'>
<div class='btn-copy'>
一番人気
</div>
<div class='btn btn--orange'>
<a href='http://google.co.jp'>
記事を読む
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class='section pages__container__category-article zigzag zigzag-yellow'>
<div class='outer__inner category-boxs flexbox--h-center'>
<div class='category-box two-column-sp four-col-last-left'>
<ul class='article-list post-lists flexbox--spacebetween'>
  <?php
     $args = array(
    'posts_per_page' => 15,                //表示（取得）する記事の数
    'post_type' => 'post'    //投稿タイプの指定
  );
  $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>

        <li class='eyecatch'>
          <?php
            $days = 7;  // NEWマークを表示する日数
            $now = date_i18n('U');  // 今の時間
            $entry = get_the_time('U');  // 投稿日の時間
            $term = date('U',($now - $entry)) / 86400;
            if( $days > $term ){
              echo '<div class="newMark eyechatchlabel">NEW</div>';
            }
          ?>


          <div class='post-lists__img article-list__img pic-frame-white imgWrap'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 230, 230 ) ); ?></a>
          </div>
          <p class="eyechatchlabel <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
            <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
          </p>

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
<div class='original-btn'>
<div class='btn-copy'>
記事を全部読む
</div>
<div class='btn btn--yellow'>
<a href='http://google.co.jp'>
ポートランドの記事を読む
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include('components-php/area-contens.php'); ?>
<?php include('components-php/Q&A-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</body>
