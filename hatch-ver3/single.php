<?php include('head.php'); ?>
<body>
<div class='single-page outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='outer__inner'>
<div class='single__container'>
<div class='single__container__body flexbox--h-center'>
<div class='middle-contain'>
<h1 class='single-page__head-title'>
<?php the_title_attribute(); ?>
</h1>
<div class='single-page__tags'>
<?php the_tags( '分類タグ : ',' 　' ); ?>
<span>
<?php $slug_name = basename(get_permalink()); ?>タグ
</span>
</div>
<div class='single-page__detail flexbox--spacebetween'>
<div class='single-page__sns-icons flexbox'>
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
<div class='single-page__post-info flexbox'>
<div class='single-page__dates'>
<?php the_time('Y/m/d'); ?>
</div>
<div class='single-page__author__img circle'>
<img src="<?php echo get_template_directory_uri(); ?>/images/popo.jpg">
</div>
</div>
</div>
<div class='single-page__eyecatch-img'>
<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
</div>
<div class='single-page__entry-content'>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php the_content();?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>
<?php include('components-php/wrote-models-box.php'); ?>
<div class='single-page__post-down__sns-icons flexbox--spacebetween'>
<div class='sns-icons__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/facebook-long-btn.svg">
</div>
<div class='sns-icons__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-long-btn.svg">
</div>
</div>
<?php include('components-php/affiliate-ad.php'); ?>
<?php include('components-php/article-sns-btns.php'); ?>
<?php include('components-php/related-article.php'); ?>
<?php include('components-php/paging-nav.php'); ?>
</div>
<div class='column-4 side-contain'>
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
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/keywords-category.php'); ?>
<?php include('components-php/annie-ad-side.php'); ?>
<?php include('components-php/house-ad-side.php'); ?>
<?php include('components-php/business-ad-side.php'); ?>
<div class='side-fixed-area'></div>
</div>
</div>
</div>
</div>
<div class='outer__inner'>
<div class='single__container__bottom flexbox--h-center'>
<?php include('components-php/bt-news-list.php'); ?>
<?php include('components-php/bt-category-popular.php'); ?>
</div>
</div>
</div>
</body>
<?php include('components-php/service.php'); ?>
<?php include('components-php/annie-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
