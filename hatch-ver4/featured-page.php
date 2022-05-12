<?php /** *  Template Name:  featuredページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='fuatured-page'>
<div class='pages outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='pages__container'>
<div class='fuatured-page__title-bar'>
<div class='outer__inner title-barbox flexbox--h-center'>
<div class='title-barbox-txt'>
アメリカーンなものを食う
</div>
<div class='title-barbox-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__bad-food.svg">
</div>
</div>
</div>
<div class='fuatured-page__ranking zigzag zigzag-pink'>
<div class='ranking__boxs flexbox--h-center'>
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
</div>
</div>
<div class='outer__inner main-tag-article'>
<div class='outer__inner__container'>
<div class='middle-contain two-column-sp four-col-last-left'>
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
</div>
</div>
</div>
<div class='outer__inner'></div>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</body>
