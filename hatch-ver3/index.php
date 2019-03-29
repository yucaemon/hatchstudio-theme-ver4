<?php include('head.php'); ?>
<body>
<div class='outer index'>
<?php include('components-php/header.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<section class='section first-section'>
<div class='outer__inner flexbox'>
<div class='middle-contain two-column-sp'>
<ul class='post-lists article-list box-list'>
  <?php
     $args = array(
    'posts_per_page' => 6,                //表示（取得）する記事の数
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
              echo '<div class="newMark">NEW</div>';
            }
          ?>


          <div class='post-lists__img article-list__img imgWrap'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
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
<div class='side-amazon-ad'>
<img src="<?php echo get_template_directory_uri(); ?>/images/amazon-ad.svg">
</div>
<?php include('components-php/lists-popular-total.php'); ?>
</div>
</div>
</section>
<?php include('components-php/affiliate-ad-sp.php'); ?>
<?php include('components-php/share-house-ad.php'); ?>
<section class='section second-section'>
<div class='header-side__img--sp'>
<img src="<?php echo get_template_directory_uri(); ?>/images/news-baner.svg">
</div>
<div class='outer__inner flexbox'>
<div class='middle-contain two-column-sp'>
  <ul class='post-lists article-list'>
    <?php query_posts('posts_per_page=5&offset=6' ); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countblock++; ?>
    <?php if($countblock == 3 or $countblock == 8 or $countblock == 12) : ?>
    //ここに広告のコードor画像など//
    <?php endif; ?>
        <li class='article-list__content flexbox eyecatch'>
          <div class='post-lists__img article-list__img'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
          </div>
          <p class="eyechatchlabel <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
            <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
          </p>
          <div class='post-lists__text article-list__text'>
            <h3 class='post-lists__title list-title'>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class='post-lists__read list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,95) ; ?></p>
            <div class="category-icon"><?php the_category( '  ',' 　' ); ?></div>
          </div>
        </li>
      <?php endwhile; endif;
      wp_reset_postdata(); //クエリのリセット ?>

  </ul>
</div>
<div class='side-contain'>
<?php include('components-php/affiliate-ad-one.php'); ?>
<?php include('components-php/keywords.php'); ?>
</div>
</div>
</section>
<?php include('components-php/affiliate-ad-sp.php'); ?>
<?php include('components-php/sponsor-blogger.php'); ?>
<?php include('components-php/business.php'); ?>
<section class='section third-section'>
<div class='outer__inner flexbox'>
<div class='middle-contain two-column-sp'>
<ul class='post-lists article-list box-list'>
  <?php query_posts('posts_per_page=5&offset=11' ); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countblock++; ?>
  <?php if($countblock == 3 or $countblock == 8 or $countblock == 12) : ?>
  //ここに広告のコードor画像など//
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
</section>
</div>
</body>
<p id="PageTopBtn"><a href="#wrap">TOPへ</a></p>
<div class='bottom-container'>
<?php include('components-php/annie-banner.php'); ?>
<?php include('components-php/service.php'); ?>
<?php include('components-php/business-sp.php'); ?>
<?php include('components-php/annie-sp.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
