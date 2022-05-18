<?php /** *  Template Name: カテゴリーページ */ ?>
<?php include('head.php'); ?>
<body class='category-page'>
<div class='pages outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='pages__container__title'>
<div class='outer__inner'>
<div class='title-bar text-centering-pearent flexbox--h-center'>
<div class='title-bar-txt text-centering-child'>
『<?php echo get_the_archive_title(); ?> 』の関連記事一覧
</div>
<div class='title-bar-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/category-page__flower-person.svg">
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
</div>
</div>
</div>
</div>
<div class='outer__inner'>
<div class='articles__container__bottom flexbox--spacebetween'>
<div class='bt-left'>
<?php include('components-php/bt-news-lists.php'); ?>
</div>
<div class='bt-right'>
<?php include('components-php/bt-recommend.php'); ?>
</div>
</div>
</div>
<?php include('components-php/featured-contens.php'); ?>
<?php include('components-php/Q&A-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</body>
