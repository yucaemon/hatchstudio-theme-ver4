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
<h1 class='components-title'>
<i class="fa fa-search"></i>『<?php echo $search_query; ?>』の関連記事が<span>（<?php echo $total_results; ?>件）あります</span>
</h1>
<ul class="article-list">
<?php if ( $total_results >0 ) : ?>
<?php endif; ?>
<?php
if( $total_results >0 ):
if(have_posts()):
while(have_posts()): the_post();
?>

<li class='flexbox'>
  <div class='article-list__img'>
    <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'post-thumbnails', array('class' => 'article-list__img') ); ?>
    </a>
  </div>
  <div class='article-list__txt'>
    <a href="<?php the_permalink(); ?>">
      <div class="article-list__text">
      <h3 class="list-title"><?php echo mb_substr($post->post_title, 0, 20).'…'; ?></h3>
      <p class='list-read'><?php echo mb_substr(strip_tags($post-> post_content),0,100) ; ?></p>
      </div>
    </a>
  </div>
</li>

<?php endwhile; endif; else: ?>
『 <?php echo $search_query; ?> 』 に一致する情報は見つかりませんでした。
<?php endif; ?>
</ul>
<div class='more-page'>
<div class='more-page__btn big-btn'>
<a href="<?php echo esc_url( home_url( '/archive/' ) ); ?>">> 記事一覧ページへ</a>>
</div>
</div>
<?php include('components-php/affiliate-ad.php'); ?>
<?php include('components-php/article-sns-btns.php'); ?>
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
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/news-list.php'); ?>
<?php include('components-php/keywords.php'); ?>
<?php include('components-php/house-ad-side.php'); ?>
<?php include('components-php/business-ad-side.php'); ?>
<div class='side-fixed-area'></div>
</div>
</div>
</div>
</div>
<div class='outer__inner'>
<div class='articles__container__bottom flexbox--h-center'>
<?php include('components-php/bt-news-list.php'); ?>
<?php include('components-php/bt-category-popular.php'); ?>
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
