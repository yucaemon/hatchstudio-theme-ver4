<?php /** *  Template Name:  一覧ページ */ ?>
<?php include('head.php'); ?>
<body class='fuatured-page'>
<div class='pages outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='pages__container__title'>
<div class='outer__inner'>
<div class='title-bar flexbox--h-center'>
<div class='title-bar-txt'>
アメリカーンなものを食う
</div>
<div class='title-bar-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__bad-food.svg">
</div>
</div>
</div>
</div>
<div class='pages__container__ranking zigzag zigzag-pink'>
<div class='outer__inner ranking__boxs flexbox--h-center'>
<div class='ranking__box'>
<div class='ranking__box-icon'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking01.svg">
</div>
<div class='ranking__box-pic'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
</div>
<div class='ranking__box-txt'>
テキストテキストテキストテキストテキストテキストテキストテキスト
</div>
</div>
<div class='ranking__box'>
<div class='ranking__box-icon'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking02.svg">
</div>
<div class='ranking__box-pic'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img02.svg">
</div>
<div class='ranking__box-txt'>
テキストテキストテキストテキストテキストテキストテキストテキスト
</div>
</div>
<div class='ranking__box'>
<div class='ranking__box-icon'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking03.svg">
</div>
<div class='ranking__box-pic'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img03.svg">
</div>
<div class='ranking__box-txt'>
テキストテキストテキストテキストテキストテキストテキストテキスト
</div>
</div>
</div>
</div>
<div class='pages__container__tag-related-article'>
<div class='outer__inner tag-related-article'>
<div class='tag-related-article-title'>
『アメリカカ〜ンなモノを食う。』新着記事一覧
</div>
<div class='tag-related-article-body two-column-sp four-col-last-left'>
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


          <div class='post-lists__img article-list__img imgWrap'>
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
<div class='btn-img--toallpage'>
<a href="https://hatchstudioinc.com/archives/24020" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/toallpage-btn.svg"></a>
</div>
</div>
</div>
</div>
<div class='pages__container__tag-pickup-article zigzag zigzag-yellow'>
<div class='outer__inner tag-pickup-article__boxs flexbox--spacearound'>
<div class='tag-pickup-article__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
<div class='cat-label'>
アメリカのスーパー
</div>
</div>
<div class='tag-pickup-article__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
<div class='cat-label'>
潜入
</div>
</div>
<div class='tag-pickup-article__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
<div class='cat-label'>
食い比べ
</div>
</div>
<div class='tag-pickup-article__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
<div class='cat-label'>
トレジョ
</div>
</div>
<div class='tag-pickup-article__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
<div class='cat-label'>
レシピ
</div>
</div>
<div class='tag-pickup-article__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
<div class='cat-label'>
珍もの＆まずいもの検証
</div>
</div>
<div class='tag-pickup-article__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
<div class='cat-label'>
流行り
</div>
</div>
<div class='tag-pickup-article__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
<div class='cat-label'></div>
</div>
<div class='tag-pickup-article__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking-img01.svg">
<div class='cat-label'></div>
</div>
</div>
</div>
<?php include('components-php/Q&A-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</body>
