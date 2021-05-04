<?php /** *  Template Name:  aboutページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='pages about-page outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='outer__inner'>
<div class='pages__container'>
<div class='mission'>
<h1 class='pages__header'>
?アメリカから『ワクワクな未知なる世界』をいっぱいお届けしたい。
</h1>
<p class='pages__read'>
はっちすたじおは、アメリカで暮らす人たちが、分け隔てなく自由に出会えて、遊べる場所があったらいいな。というただの好奇心から始まりました。バークレーという土地で生まれ、全米の多くの学生さんたちが関わり、次なる新しい人たちがもっと自由に遊べるようにといろんな情報を届けてくれました。
そんな遊び場が次世代へ続くようにと、日本や現地のみんなにアメリカから未知なる日常のコンテンツをたくさんお届けできたら嬉しいです。
</p>
<div class='yuka-sign__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/yuka-sign.svg">
</div>
<div class='pages__date-info'>
<p>
2014年 6月 28日
</p>
<p>
Berkeley CA USA
</p>
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
<!-- /<?php include('components-php/annie-banner.php'); ?> -->
<!-- /<?php include('components-php/service.php'); ?> -->
<!-- /<?php include('components-php/business-sp.php'); ?> -->
<!-- /<?php include('components-php/annie-sp.php'); ?> -->
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</div>
</body>
