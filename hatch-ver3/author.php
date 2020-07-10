<?php /** *  Template Name: 投稿者ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='author-page author outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='outer__inner'>
<div class='author__container'>
<div class='author__container__body flexbox--spacebetween'>
<div class='middle-contain'>
<h1 class='components-title'>
<div class="author__img circle">
  <?php echo get_avatar( get_the_author_id(), 50 ); ?>
</div>
<div class="wrote-models-lists__name">
  <?php echo get_the_author(); ?>
</div>
</h1>
<ul class='post-lists article-list box-list flexbox--start'>
<?php $author = get_query_var('author'); $paged = get_query_var('paged'); $posts = query_posts('posts_per_page=20&author=' . $author . '&paged=' . $paged); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countblock++; ?>
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
  <?php endwhile; endif; ?>
</ul>
<div class='google-ads'>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- スクエア✖️2box -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1574488309106788"
     data-ad-slot="7305955474"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div>
<div class='side-contain'>
<?php include('components-php/affiliate-ad-sky.php'); ?>
<div class='side-ranking-ad'>
<a href="https://hatchstudioinc.com/archives/24020" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/ranking-banner.svg"></a>
</div>
<div class='side-job-ad'>
<a href="https://hatchstudioinc.com/archives/28793" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/remote-job-banner.svg"></a>
</div>
<div class='side-coupon-ad'>
<a href="https://hatchstudioinc.com/archives/28854" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/coupon-banner.svg"></a>
</div>
<?php include('components-php/lists-news.php'); ?>
<?php include('components-php/lists-popular-total.php'); ?>
<?php include('components-php/keywords.php'); ?>
<!-- /<?php include('components-php/annie-ad-side.php'); ?> -->
<?php include('components-php/house-ad-side.php'); ?>
<div class='side-ranking-ad'>
<a href="https://hatchstudioinc.com/archives/24020" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/ranking-banner.svg"></a>
</div>
<div class='side-job-ad'>
<a href="https://hatchstudioinc.com/archives/28793" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/remote-job-banner.svg"></a>
</div>
<div class='side-coupon-ad'>
<a href="https://hatchstudioinc.com/archives/28854" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/coupon-banner.svg"></a>
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
<!-- ?php include('components-php/bt-popular-month.php'); ? -->
<?php include('components-php/bt-recommend.php'); ?>
</div>
</div>
</div>
<p id="PageTopBtn"><a href="#wrap">TOPへ</a></p>
<div class='bottom-container'>
<!-- /<?php include('components-php/service.php'); ?> -->
<!-- /<?php include('components-php/business-sp.php'); ?> -->
<!-- /<?php include('components-php/annie-banner.php'); ?> -->
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</div>
</body>
