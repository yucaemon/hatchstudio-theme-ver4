<?php /** *  Template Name:  404ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='error-page pages outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='outer__inner'>
<div class='pages__container'>
<div class='notfind__header'>
<div class='notfind__header__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/404-txt.svg">
</div>
<p class='notfind__header__txt'>
お探しのページが見つかりませんでした!
</p>
</div>
<div class='notfind__body__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/404-img.svg">
</div>
<button class='notfind__btn button-pink-01'>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ戻る</a>
</button>
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
<!-- /<?php include('components-php/annie-banner.php'); ?> -->
<!-- /<?php include('components-php/service.php'); ?> -->
<!-- /<?php include('components-php/business-sp.php'); ?> -->
<!-- /<?php include('components-php/annie-sp.php'); ?> -->
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</div>
</body>
