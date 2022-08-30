<?php /** *  Template Name: 質問ページ */ ?>
<?php include('head.php'); ?>
<body>
<div class='qa-page contact-page pages outer'>
<?php include('components-php/header02.php'); ?>
<?php include('components-php/header-sp.php'); ?>
<div class='qar-contens zigzag zigzag-pink'>
<div class='outer__inner'>
<div class='qar-contens__box flexbox--h-center'>
<div class='qar-contens__box__txt flexbox--h-center'>
<div class='qar-contens__box__txt--img-top'>
<img src="<?php echo get_template_directory_uri(); ?>/images/qar-contens__qar-boo.svg">
</div>
<div class='qar-contens__box__txt--mid'>
記事にして欲しいネタ募集中
</div>
<div class='qar-contens__box__txt--img-btm'>
<img src="<?php echo get_template_directory_uri(); ?>/images/qar-contens__qar-txt.svg">
</div>
</div>
<div class='qar-contens__box__character'>
<img src="<?php echo get_template_directory_uri(); ?>/images/qar-contens__qar-img.svg">
</div>
<form action='https://docs.google.com/forms/d/e/1FAIpQLScWcZ3TzAexAWFCokTMijAW8fB4dS_tcY17ikhwf7p-voj4EQ/viewform?usp=pp_url' class='contact-form__form'>
  <div class="form-group row">
    <label for="exampleFormControlSelect1" class="col-sm-3 col-form-label">ご相談内容</label>
    <div class="col-sm-4">
      <select class="form-control selectpicker">
        <option>一つ選択してください ▼</option>
        <option data-value="WEB/動画制作ついて">WEB/動画制作ついて</option>
        <option data-value="コンテンツ制作/広告掲載について">コンテンツ制作/広告掲載について</option>
        <option data-value="通訳/翻訳サービスについて">通訳/翻訳サービスについて</option>
        <option data-value="宿泊ゲストハウスPDX(ポートランド)について">宿泊ゲストハウスPDX(ポートランド)について</option>
        <option data-value="SFバークレー不動産サポートについて">SFバークレー不動産サポートについて</option>
         <option data-value="その他">その他</option>
      </select>
    </div>
  </div>
<div class='form-group row'>
<label class='col-sm-3 col-form-label' for='staticEmail'>
ペンネーム
</label>
<div class='col-sm-6'>
<input class='form-control form-control-lg' name='entry.113712413'>
</div>
</div>
<div class='form-group row'>
<label class='col-sm-3 col-form-label' for='email'>
メールアドレス
</label>
<div class='col-sm-6'>
<input class='form-control form-control-lg' name='entry.1029886822'>
</div>
</div>
<div class='form-group row'>
<label class='col-sm-3 col-form-label' for='consultation'>
記事で書いて欲しい質問内容
</label>
<div class='col-sm-6'>
<textarea class='form-control' id='exampleFormControlTextarea1' name='entry.986471514' rows='5'></textarea>
</div>
</div>
<div class='notice-box__header'>
ご注意: 採用した質問のみご返信をさせていただきます。
</div>
<button class='button-pink-01'>
お問い合わせを送信する
</button>
</form>
</div>
</div>
</div>
<div class='outer__inner qar-past-article'>
<div class='qar-past-article__title'>
今までの相談の記事を読む。
</div>
<div class='qar-past-article__body'>
<div class='outer__inner category-boxs flexbox--h-center'>
<div class='category-box two-column-sp four-col-last-left'>
<ul class='article-list post-lists flexbox--spacebetween'>
  <?php
     $args = array(
    'posts_per_page' => 4,                //表示（取得）する記事の数
    'post_type' => 'post'    //投稿タイプの指定
  );
  $posts = get_posts( $args );
    if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>

        <li class='eyecatch'>
          <?php
            $days = 7;  // NEWマークを表示する日数
            $now = date_i18n('U');  // 今の時間
            $entry = get_the_time('U');  // 投稿日の時間
            $term = date('U',($now - $entry)) / 86400;
            if( $days > $term ){
              echo '<div class="newMark eyechatchlabel">NEW</div>';
            }
          ?>


          <div class='post-lists__img article-list__img imgWrap'>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 230, 230 ) ); ?></a>
          </div>
          <p class="eyechatchlabel <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
            <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
          </p>

          <div class='post-lists__text article-list__text'>
            <h3 class='post-lists__title list-title'>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
          </div>
        </li>

    <?php endforeach; ?>
    <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
    <?php else : //記事が無い場合 ?>
      <li><p>記事はまだありません。</p></li>
    <?php endif;
    wp_reset_postdata(); //クエリのリセット ?>
</ul>
<div class='original-btn'>
<div class='btn-copy'>
記事を全部読む
</div>
<div class='btn btn--pink'>
<a href='http://google.co.jp'>
相談の記事の一覧
</a>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include('components-php/featured-contens.php'); ?>
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
<?php include('components-php/footer.php'); ?>
<?php include('components-php/footer-sp.php'); ?>
</div>
</body>
