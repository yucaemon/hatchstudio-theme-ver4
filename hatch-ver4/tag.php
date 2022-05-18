<?php /** *  Template Name: タグ一覧ページ */ ?>
<?php include('head.php'); ?>
<?php include('head.php'); ?>
<body class='category-page'>
<div class='pages outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='pages__container__title'>
<div class='outer__inner'>
<div class='title-bar text-centering-pearent flexbox--h-center'>
<div class='title-bar-txt text-centering-child'>
『<?php echo get_the_archive_title(); ?> 』の関連記事一覧
</div>
<div class='title-bar-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/category-page__flower-person.svg">
</div>
</div>
</div>
</div>
<div class='section pages__container__category-article zigzag zigzag-yellow'>
<div class='outer__inner category-boxs flexbox--h-center'>
<div class='category-box two-column-sp four-col-last-left'>
<ul class='article-list post-lists flexbox--spacebetween'>
<?php
$tag_id = get_query_var('tag_id');
if ( $tag_id ) {
    $args = array(
        'posts_per_page' => 270, // 表示件数の指定
        'tag_id' => get_query_var('tag_id')
    );
}
    $posts = get_posts( $args );
    foreach ( $posts as $post ): // ループの開始
setup_postdata( $post ); // 記事データの取得
?>
  <li class='eyecatch'>
    <div class='post-lists__img article-list__img pic-frame-white'>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 230, 230 ) ); ?></a>
    </div>
    <div class='post-lists__text article-list__text'>
      <h3 class='post-lists__title list-title'>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
    </div>
  </li>
<?php
endforeach; // ループの終了
wp_reset_postdata(); // 直前のクエリを復元する
?>
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
<?php include('components-php/featured-contens.php'); ?>
<?php include('components-php/Q&A-banner.php'); ?>
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</body>
