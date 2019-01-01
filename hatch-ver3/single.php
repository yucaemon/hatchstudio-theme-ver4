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
<div class='flexbox'>
<div class='single-page__views'>
<i class="fas fa-heart"></i>
<?php if(function_exists('the_views')) {
  the_views();
} ?>
</div>
<div class='single-page__tags'>
<?php the_category( '  ',' 　' ); ?>
<?php $slug_name = basename(get_permalink()); ?>
</div>
</div>
<div class='single-page__detail flexbox--spacebetween'>
<div class='single-page__sns-icons flexbox'>
<div class='sns-icons__img'>
<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php echo get_the_title(); ?>">
<img src="<?php echo get_template_directory_uri(); ?>/images/share-facebook-icon.svg">
</a>
</div>
<div class='sns-icons__img'>
<a class="btn--twitter" href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php echo get_the_title(); ?>&via=hatchstudioinc&tw_p=tweetbutton&related=hatchstudioinc">
<img src="<?php echo get_template_directory_uri(); ?>/images/share-twitter-icon.svg"></a>
</div>
<div class='sns-icons__img'>
<a class="btn--pocket" href="http://getpocket.com/edit?url=<?php the_permalink();?>&title=<?php echo get_the_title;?>">
<img src="<?php echo get_template_directory_uri(); ?>/images/share-pokect-icon.svg">
</a>
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
<?php include('components-php/affiliate-ad.php'); ?>
<?php include('components-php/article-sns-btns.php'); ?>
<?php include('components-php/related-article.php'); ?>
<?php include('components-php/this-page-tags.php'); ?>
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
<?php include('components-php/lists-popular-total.php'); ?>
<?php include('components-php/lists-popular-month.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/annie-ad-side.php'); ?>
<?php include('components-php/house-ad-side.php'); ?>
<?php include('components-php/business-ad-side.php'); ?>
<div class='side-fixed-area'></div>
</div>
</div>
</div>
</div>
<div class='outer__inner'>
<div class='articles__container__bottom flexbox--h-center'>
<?php include('components-php/bt-news-lists.php'); ?>
<?php include('components-php/bt-popular-month.php'); ?>
</div>
</div>
</div>
</body>
<p id="PageTopBtn"><a href="#wrap">TOPへ</a></p>
<div class='bottom-container'>
<?php include('components-php/service.php'); ?>
<?php include('components-php/annie-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
