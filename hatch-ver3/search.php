<?php /** *  Template Name: 検索ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='search-page search outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='outer__inner'>
<div class='search__container'>
<div class='search__container__body flexbox--h-center'>
<?php
  global $wp_query;
  $total_results = $wp_query->found_posts;
  $search_query = get_search_query();
?>
<div class='middle-contain'>
<?php if ( $total_results >0 ) : ?>
  <h1 class='components-title'><i class="fa fa-search"></i>『<?php echo $search_query; ?>』の関連記事が<span>（<?php echo $total_results; ?>件）あります。</span></h1>
<?php endif; ?>

<ul class='post-lists article-list box-list flexbox--spacebetween'>
<?php
if( $total_results >0 ):
if(have_posts()):
while(have_posts()): the_post();
?>
<li class=''>
  <div class='post-lists__img article-list__img'>
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'post-thumbnails', array('class' => 'post-lists__img article-list__img') ); ?>
    </a>
  </div>
  <div class='post-lists__text article-list__text'>
    <a href="<?php the_permalink(); ?>">
      <div class="article-list__text">
      <h3 class='post-lists__title list-title'><?php the_title(); ?></h3>
      </div>
    </a>
  </div>
</li>

<?php endwhile; endif; else: ?>
  <div class="search__not-find">
    <h1 class='components-title'><i class="fa fa-search"></i>『 <?php echo $search_query; ?> 』 に一致する情報は見つかりませんでした。</span></h1>
    <div class="search__not-find__body"><i class="fas fa-exclamation-triangle"></i></div>
    <?php include('components-php/category-keywords.php'); ?>
  </div>
<?php endif; ?>
</ul>
<?php include('components-php/affiliate-ad.php'); ?>
</div>
<div class='column-4 side-contain'>
<?php include('components-php/affiliate-ad-sky.php'); ?>
<?php include('components-php/annie-ad-side.php'); ?>
<?php include('components-php/house-ad-side.php'); ?>
<?php include('components-php/business-ad-side.php'); ?>
<div class='side-amazon-ad'>
<img src="<?php echo get_template_directory_uri(); ?>/images/amazon-ad.svg">
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
