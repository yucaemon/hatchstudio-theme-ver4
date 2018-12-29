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
お探しのページが見つかりませんでした。
</p>
</div>
<div class='notfind__body__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/404-img.svg">
</div>
<div class='notfind__btn'>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">トップページへ戻る</a>
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
<div class='bottom-container'>
<?php include('components-php/service.php'); ?>
<?php include('components-php/annie-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
