<?php /** *  Template Name:  featuredページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='pages fuatured-page outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='pages__container'>
<div class='fuatured-page__title-bar'>
<div class='outer__inner title-barbox flexbox--h-center'>
<div class='title-barbox-txt'>
アメリカーンなものを食う。
</div>
<div class='title-barbox-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__bad-food.svg">
</div>
</div>
</div>
<div class='fuatured-page__ranking ranking__boxs flexbox'>
<div class='ranking__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking01.svg">
</div>
<div class='ranking__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking02.svg">
</div>
<div class='ranking__box'>
<img src="<?php echo get_template_directory_uri(); ?>/images/featured-page__rinking03.svg">
</div>
</div>
</div>
<div class='outer__inner'></div>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</body>
