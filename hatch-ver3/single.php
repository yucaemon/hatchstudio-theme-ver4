<?php include('head.php'); ?>
<body>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
 <script>(function(d, s, id) {
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) return;
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.10&appId=419866574778905";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));</script>
<div class='outer index'>
<div class='single-page outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<div class='outer__inner'>
<div class='single__container'>
<div class='single__container__body flexbox--spacebetween'>
<div class='middle-contain'>
<h1 class='single-page__head-title'>
<?php the_title_attribute(); ?>
</h1>
<div class='google-ad'>
<!-- H1タイトル下の広告 -->
<?php if (is_single(array('25907','25713','7586'))) : ?>
<?php else: ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1574488309106788"
     data-ad-slot="8294607318"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<?php endif; ?>
</div>
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
<?php
  $share_url   = get_permalink();
  $share_title = get_the_title();
?>
<a href="//www.facebook.com/sharer.php?src=bm&u=<?=$share_url?>&t=<?=$share_title?>" title="Facebookでシェア" onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;">
<img src="<?php echo get_template_directory_uri(); ?>/images/share-facebook-icon.svg"></a>
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
<div class='single-page__dates'></div>
<?php if (get_the_modified_date('Y.m.d') != get_the_time('Y.m.d')) : ?>
更新日：<time datetime="<?php the_modified_date('Y-m-d') ?>"><?php the_modified_date('Y.m.d') ?></time>
<?php else:?>
公開日：<time datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y.m.d');?></time>
<?php endif; ?>
<div class='author__img circle'>
<?php echo get_avatar( get_the_author_id(), 50 ); ?>
</div>
</div>
</div>
<div class='single-page__eyecatch-img'>
<?php the_post_thumbnail(); ?>
</div>
<!-- 検索リンクキーワード広告 -->
<?php if (is_single(array('25907','25713','7586'))) : ?>
<?php else: ?>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-1574488309106788"
       data-ad-slot="2646761361"
       data-ad-format="link"
       data-full-width-responsive="true"></ins>
  <script>
       (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
<?php endif; ?>
<div class='single-page__entry-content'>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php remove_filter ('the_content', 'wpautop'); ?>　
<?php the_content();?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>
<?php include('components-php/wrote-models-box.php'); ?>
<?php if (is_single(array('25907','25713','7586'))) : ?>
<?php else: ?>
<?php include('components-php/affiliate-ad-landscape.php'); ?>
<?php endif; ?>
<?php include('components-php/article-sns-btns.php'); ?>
<?php include('components-php/related-article.php'); ?>
<?php include('components-php/this-page-tags.php'); ?>
<?php include('components-php/category-keywords.php'); ?>
<?php include('components-php/paging-nav.php'); ?>
</div>
<div class='side-contain'>
<?php if (is_single(array('25907','25713','7586'))) : ?>
<?php else: ?>
<?php include('components-php/affiliate-ad-sky.php'); ?>
<?php endif; ?>
<div class='side-ranking-ad hide-ad-sp'>
<a href="https://hatchstudioinc.com/archives/24020" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/ranking-banner.svg"></a>
</div>
<div class='side-job-ad hide-ad-sp'>
<a href="https://hatchstudioinc.com/archives/28793" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/remote-job-banner.svg"></a>
</div>
<div class='side-coupon-ad hide-ad-sp'>
<a href="https://hatchstudioinc.com/archives/28854" class=""><img src="<?php echo get_template_directory_uri(); ?>/images/coupon-banner.svg"></a>
</div>
<?php include('components-php/lists-category-total.php'); ?>
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
