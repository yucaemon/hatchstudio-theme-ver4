<?php include('head.php'); ?>
<body>
<div class='outer index'>
<?php include('components-php/header.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<section class='section first-section'>
<div class='outer__inner'>
<div class='outer__inner__container flexbox--spacebetween'>
<div class='middle-contain two-column-sp'>
<ul class='post-lists article-list box-list  flexbox'>
  <?php
     $args = array(
    'posts_per_page' => 12,                //表示（取得）する記事の数
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
<div class='side-contain'>
<?php include('components-php/affiliate-ad-sky.php'); ?>
<div class='side-coupon-ad'>
<a href="https://hatchstudioinc.com/archives/28854" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/coupon-banner.svg"></a>
</div>
<div class='side-ranking-ad'>
<a href="https://hatchstudioinc.com/archives/24020" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/ranking-banner.svg"></a>
</div>
<?php include('components-php/lists-popular-total.php'); ?>
</div>
</div>
</div>
<?php include('components-php/share-house-ad.php'); ?>
</section>
<section class='section second-section'>
<div class='header-side__img--sp'>
<img src="<?php echo get_template_directory_uri(); ?>/images/news-baner.svg">
</div>
<div class='outer__inner'>
<div class='outer__inner__container flexbox--spacebetween'>
<div class='middle-contain two-column-sp'>
  <ul class='post-lists article-list'>
    <?php query_posts('posts_per_page=5&offset=12' ); ?>
    <?php
    $ads_infeed = '3';//上から何番目に広告を設置するか
    $ads_infeed_count = '1';
    ?>
    <?php while (have_posts()) : the_post(); ?>
    <?php
    if($ads_infeed_count == $ads_infeed){
    ?>
    <!-- ここにインフィード広告のコードを入れる -->
    <!-- ここにインフィード広告のコードを入れる -->
    <?php
    }
    $ads_infeed_count++;
    ?>
    <!-- ここにタイトルなど表示させるコード -->
    <li class='article-list__content flexbox eyecatch'>
      <div class='post-lists__img article-list__img'>
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 230, 230 )); ?></a>
      </div>
      <p class="eyechatchlabel <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
      </p>
      <div class='post-lists__text article-list__text'>
        <h3 class='post-lists__title list-title'>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="category-icon"><?php the_category( '  ',' 　' ); ?></div>
      </div>
    </li>
    <?php endwhile; ?>
  </ul>
</div>
<div class='side-contain'>
<?php include('components-php/affiliate-ad-one.php'); ?>
<?php include('components-php/keywords.php'); ?>
</div>
</div>
</div>
</section>
<?php include('components-php/affiliate-ad-sp.php'); ?>
<?php include('components-php/sponsor-blogger.php'); ?>
<?php include('components-php/business.php'); ?>
<section class='section third-section'>
<div class='outer__inner'>
<div class='outer__inner__container flexbox--spacebetween'>
<div class='middle-contain two-column-sp'>
<ul class='post-lists article-list box-list flexbox'>
  <?php query_posts('posts_per_page=9&offset=17' ); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countblock++; ?>
  <?php if($countblock == 3 or $countblock == 8 or $countblock == 12) : ?>
  <!-- ここに広告のコードor画像など -->
  <!-- ここに広告のコードor画像など -->
  <?php endif; ?>
        <li class='eyecatch'>
          <div class='post-lists__img article-list__img imgWrap'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <div class='post-lists__text article-list__text'>
            <h3 class='post-lists__title list-title'>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </div>
          <p class="eyechatchlabel <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
            <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
          </p>

        </li>
      <?php endwhile; endif;
      wp_reset_postdata(); //クエリのリセット ?>
</ul>
</div>
<div class='side-contain'>
<?php include('components-php/affiliate-ad-one.php'); ?>
<?php include('components-php/lists-popular-month.php'); ?>
</div>
</div>
</div>
</section>
<p id="PageTopBtn"><a href="#wrap">TOPへ</a></p>
<div class='bottom-container'>
<?php include('components-php/annie-banner.php'); ?>
<?php include('components-php/service.php'); ?>
<?php include('components-php/business-sp.php'); ?>
<?php include('components-php/annie-sp.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</div>
</body>
