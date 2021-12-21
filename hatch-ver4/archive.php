<?php /** *  Template Name:  一覧ページ */ ?>
<?php include('head.php'); ?>
<body></body>
<section class='pages rules-page'>
<div class='outer'>
<?php include('components-php/header03.php'); ?>
<div class='archive-banner'>
<h1 class='archive-banner__header'>
記事一覧ページ
</h1>
</div>
</div>
<div class='outer__inner column-12'>
<div class='articles news-articles'>
<?php
$posts = get_posts(array(
'posts_per_page' => 50, // 表示件数
));
?>
<div class="news-articles__container flexbox--spacebetween">
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <!--表示する内容が入ります。-->
      <div class="news-articles__content">
        <div class="news-articles__img">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <div class="news-articles__text">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      </div>
      <!--表示する内容ここまで-->
  <?php endforeach; endif; ?>
</div>
</div>
<?php include('components-php/more-search-article.php'); ?>
<div class='column-6 margin-center'>
<?php include('components-php/sns-box.php'); ?>
</div>
<div class='column-8 margin-center'>
<?php include('components-php/shopping-box.php'); ?>
</div>
<?php include('chatbox.php'); ?>
</div>
<?php include('components-php/footer.php'); ?>
</section>
