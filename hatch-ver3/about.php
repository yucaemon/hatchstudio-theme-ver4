<?php /** *  Template Name:  aboutページ */ ?>
<?php include('head.php'); ?>
<body>
<section class='about-page pages'>
<div class='outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='notice-bar'></div>
<div class='breadcrumb-container'>
<?php include('breadcrumb.php'); ?>
</div>
<div class='outer__inner'>
<div class='pages__container'>
<div class='logo__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/annie-logo.svg">
</div>
<div class='mission'>
<h1 class='pages__header'>
”旅するように暮らそう。自分らしく『自由奔放』を楽しもう。”
</h1>
<p class='pages__read'>
遊牧民ように自由気まま。自分らしく、着飾ることなく『自分の好きなことを探求し続ける』ことが難しい時代だからこそ、『自分の道を行く自由奔放な姿。』『これから自分さがしの旅に出るそんな姿。』
そして、『自分を取り戻しさせてくれる自分自身のあるべき姿』そんな空間や姿をAnnie jene（アニージーン）を通して、お届けできたらと思います。
</p>
<div class='yuka-sign__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/yuka-sign.svg">
</div>
<div class='pages__date-info'>
<p>
2018年 8月 11日
</p>
<p>
Portland, Oregon USA
</p>
</div>
</div>
</div>
<?php include('components-php/news-articles.php'); ?>
<?php include('components-php/more-search-article.php'); ?>
<div class='column-6 margin-center'>
<?php include('components-php/sns-box.php'); ?>
</div>
<div class='column-8 margin-center'>
<?php include('components-php/shopping-box.php'); ?>
</div>
<?php include('chatbox.php'); ?>
</div>
</div>
</section>
</body>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
