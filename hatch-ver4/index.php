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
<div class='side-contain'>
<?php include('components-php/profile.php'); ?>
<div class='side-ad'>
<a href="https://hatchstudioinc.com/archives/24020" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/side__private-ad.svg"></a>
</div>
<div class='side-ad'>
<a href="https://hatchstudioinc.com/archives/28793" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/side__work-usa-ad.svg"></a>
</div>
<?php include('components-php/lists-popular-total.php'); ?>
</div>
</div>
</div>
<?php include('components-php/featured-contens.php'); ?>
<?php include('components-php/Q&A-banner.php'); ?>
<?php include('components-php/area-contens.php'); ?>
<?php include('components-php/affiliate-ad-sp.php'); ?>
<?php include('components-php/sponsor-blogger.php'); ?>
</section>
<p id="PageTopBtn"><a href="#wrap">TOPへ</a></p>
<div class='bottom-container'>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</div>
</body>
