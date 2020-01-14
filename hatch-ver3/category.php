<?php /** *  Template Name: カテゴリーページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='category-page category outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='outer__inner'>
<div class='category__container'>
<div class='category__container__body flexbox--spacebetween'>
<div class='middle-contain'>
<h1 class='components-title'>
『 <?php echo get_the_archive_title(); ?> 』の関連記事一覧
</h1>
<ul class='post-lists article-list box-list flexbox'>
<?php
$cat_id = get_cat_ID( get_the_archive_title() );
if ( $cat_id ) {
    $args = array(
        'posts_per_page' => 270, // 表示件数の指定
        'category' => $cat_id,
    );
}
    $posts = get_posts( $args );
    foreach ( $posts as $post ): // ループの開始
setup_postdata( $post ); // 記事データの取得
?>
  <li class=''>
    <div class='post-lists__img article-list__img'>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 230, 230 ) ); ?></a>
    </div>
    <div class='post-lists__text article-list__text'>
      <h3 class='post-lists__title list-title'>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
    </div>
  </li>
<?php
endforeach; // ループの終了
wp_reset_postdata(); // 直前のクエリを復元する
?>
</ul>
<?php include('components-php/category-keywords.php'); ?>
<?php include('components-php/affiliate-ad-sky.php'); ?>
</div>
<div class='side-contain'>
<?php include('components-php/affiliate-ad-sky.php'); ?>
<div class='side-coupon-ad'>
<a href="<?php echo esc_url( home_url( '/archives/24020' ) ); ?>" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/coupon-banner.svg"></a>
</div>
<div class='side-ranking-ad'>
<a href="<?php echo esc_url( home_url( '/archives/24020' ) ); ?>" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/ranking-banner.svg"></a>
</div>
<?php include('components-php/lists-news.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/annie-ad-side.php'); ?>
<?php include('components-php/house-ad-side.php'); ?>
<?php include('components-php/business-ad-side.php'); ?>
<div class='side-coupon-ad'>
<a href="<?php echo esc_url( home_url( '/archives/24020' ) ); ?>" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/coupon-banner.svg"></a>
</div>
<div class='side-ranking-ad'>
<a href="<?php echo esc_url( home_url( '/archives/24020' ) ); ?>" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/ranking-banner.svg"></a>
</div>
<div class='side-fixed-area'></div>
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
<!-- ?php include('components-php/affiliate-ad-article.php'); ? -->
<?php include('components-php/bt-popular-month.php'); ?>
</div>
</div>
</div>
<p id="PageTopBtn"><a href="#wrap">TOPへ</a></p>
<div class='bottom-container'>
<?php include('components-php/service.php'); ?>
<?php include('components-php/business-sp.php'); ?>
<?php include('components-php/annie-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</div>
</body>
