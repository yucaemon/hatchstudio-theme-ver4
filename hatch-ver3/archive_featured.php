<?php /** *  Template Name:  特集一覧ページ */ ?>
<?php include('head.php'); ?>
<body>
<section class='featured-page pages'>
<div class='outer'>
<?php include('components-php/header.php'); ?>
<div class='outer__inner column-12'>
<?php include('components-php/breadcrumb.php'); ?>
<div class='featured flexbox--v-center'>
<div class='column-6'>
<?php include('components-php/featured-box.php'); ?>
</div>
<div class='column-6 featured-text'>
<p class='featured-text__header'>
BOHOスタイルとは。
</p>
<p class='featured-text__read'>
ぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶ
ぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶららぶらぶ
ぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶらぶららぶら
</p>
</div>
</div>
<?php include('components-php/featured_articles.php'); ?>
<?php include('components-php/more-search-article.php'); ?>
<div class='column-6 margin-center'>
<?php include('components-php/sns-box.php'); ?>
</div>
<div class='column-8 margin-center'>
<?php include('components-php/shopping-box.php'); ?>
</div>
</div>
</div>
</section>
<?php include('components-php/footer.php'); ?>
</body>
