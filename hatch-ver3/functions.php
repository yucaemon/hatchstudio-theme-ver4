<?php



//　アイキャッチ機能を追加
add_theme_support('post-thumbnails');


// 記事の自動整形を無効化
remove_filter('the_content', 'wpautop');
// 抜粋の自動整形を無効化
remove_filter('the_excerpt', 'wpautop');


add_action('wp_footer', 'my_load_widget_scripts');

// wp_footerに処理を登録
add_action('wp_footer', 'my_load_widget_scripts');

/* アイキャッチ 設定 */
add_theme_support('post-thumbnails');

/* カスタム投稿タイプ 設定 */
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'featured',
        array(
            'labels' => array(
            'name' => __( '特集' ),
            'singular_name' => __( '特集 ' )
        ),
        'public' => true,
        'has_archive' => true, /* アーカイブページを持つ */
        'menu_position' =>5, //管理画面のメニュー順位
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields' ,'comments' ),
        )
    );

    //カスタムタクソノミー、カテゴリタイプ
      register_taxonomy(
        'featured-cat',
        'featured',
        array(
          'hierarchical' => true,
          'update_count_callback' => '_update_post_term_count',
          'label' => '特集のカテゴリー',
          'singular_label' => '特集のカテゴリー',
          'public' => true,
          'show_ui' => true
        )
      );

    //カスタムタクソノミー、タグタイプ
      register_taxonomy(
        'featured-tag',
        'featured',
        array(
          'hierarchical' => false,
          'update_count_callback' => '_update_post_term_count',
          'label' => '特集のタグ',
          'singular_label' => '特集のタグ',
          'public' => true,
          'show_ui' => true
        )
      );


}


//　アーカイブ一覧ページのタイトルの呼び出しでデフォルトで出る『タグ：』『カテゴリー：』を表記を非表示にする

add_filter( 'get_the_archive_title', function ($title) {

    if ( is_category() ) {

            $title = single_cat_title( '', false );

        } elseif ( is_tag() ) {

            $title = single_tag_title( '', false );

        } elseif ( is_author() ) {

            $title = '<span class="vcard">' . get_the_author() . '</span>' ;

        }

    return $title;

});


// 固定ページを検索結果から除外

function my_posy_search($search) {
  if(is_search()) {
    $search .= " AND post_type = 'post'";
  }
  return $search;
}
add_filter('posts_search', 'my_posy_search');





//　ショートコード

function h2Func( $atts, $content = null ) {
    return '<h2 class="headline-second">' . $content . '</h2>';
}
add_shortcode('見出し2', 'h2Func');


function h3Func( $atts, $content = null ) {
    return '<h3 class="headline-second">' . $content . '</h3>';
}
add_shortcode('見出し3', 'h3Func');



function box2Func( $atts, $content = null ) {
    return '<div class="detail-box02 flexbox">' . $content . '</div>';
}
add_shortcode('画像入りbox2', 'box2Func');

function box3Func( $atts, $content = null ) {
    return '<div class="detail-box03 flexbox">' . $content . '</div>';
}
add_shortcode('商品box', 'box3Func');




//見出しのショートコード
function titleFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'element' => 'h2',
        'class' => 'headline-default'
    ), $atts ) );
    return '<'.$element.' class="'.$class.'">' . $content . '</'.$element.'>';
}
add_shortcode('title', 'titleFunc');


//出典のショートコード
function sourceFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    return '<div class="sourcelink">出典 <a href="' . $content . '" target="_blank">' . $content . '</a></div>';
}
add_shortcode('出典', 'sourceFunc');


//お店詳細のショートコード
function shopBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'name' => '不明',
        'time' => '不明',
        'address' => '不明',
        'website' => '不明'
    ), $atts ) );
    return '<div class="detail-box01"><div class="detail-box01__title">' . $name . '</div><div class="detail-box01__contain"><p><i class="fa fa-map-marker" aria-hidden="true"></i>' . $address . '</p><p><i class="fa fa-clock-o" aria-hidden="true"></i>' . $time . '</a></p><p><a href="' . $website . '" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>WEBサイト</a></p></div></div>';
}
add_shortcode('お店詳細', 'shopBoxFunc');


//詳細テンプレのショートコード
function detailBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'title' => '不明',
        'detail' => '不明'
    ), $atts ) );
    return '<div class="detail-box01"><div class="detail-box01__title">' . $title . '</div><div class="detail-box01__contain"><p>' . $detail . '<p></div></div>';
}
add_shortcode('詳細テンプレ', 'detailBoxFunc');


//関連リンクのショートコード
function relatedLinksBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'title' => '不明',
        'img' => '不明',
        'url' => '不明'

    ), $atts ) );
    return '<div class="detail-box02 flexbox"><div class="detail-box02__img"><a href="' . $url . '" target="_blank"><img src="' . $img . '"/></a></div><div class="detail-box02__txt"><p>＞関連記事リンク</p><div class="detail-box02__title"><a href="' . $url . '" target="_blank">' . $title . '<i class="fa fa-external-link" aria-hidden="true"></i></a></div></div></div>';
}
add_shortcode('関連リンク', 'relatedLinksBoxFunc');



//購入商品のショートコード
function purchasableProductBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'img' => '不明',
        'product_name' => '不明',
        'price' => '不明',
        'brand' => '不明',
        'brand_link' => '不明',
        'read' => '不明',
        'link' => '不明',
        'shipping' => 'アメリカ発送のみ',
        'purchasebtn' => '不明'

    ), $atts ) );
    return '<div class="detail-box03 flexbox"><div class="detail-box03__img"><img src="' . $img . '"/></div><div class="detail-box03__txt"><div class="detail-box03__title"><i class="fa fa-angle-right"></i>' . $product_name . '</div><div class="detail-box03__price">' . $price . '</div><div class="detail-box03__brand"><a href="' . $brand_link . '" target="_blank">' . $brand . ' <i class="fa fa-external-link"></i></a></div><div class="detail-box03__read">' . $read . '</div><div class="flexbox--spacebetween"><div class="detail-box03__shipping">' . $shipping . '</div><div class="detail-box03__similar-products"><i class="fa fa-arrow-right"></i><a href="' . $link . '" target="_blank"> 類似の商品をもっと探す</a></div></div><a href="' . $purchasebtn . '" target="_blank"><div class="detail-box03__btn big-btn  target="_blank">この商品を購入</div></a></div></div>';
}
add_shortcode('購入可能商品', 'purchasableProductBoxFunc');


//希望商品のショートコード
function productBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'img' => '不明',
        'product_name' => '不明',
        'price' => '不明',
        'brand' => '不明',
        'brand_link' => '不明',
        'read' => '不明',
        'link' => '不明',
        'shipping' => 'アメリカ発送のみ',
        'purchasebtn' => '不明'

    ), $atts ) );
    return '<div class="detail-box03 flexbox"><div class="detail-box03__img"><img src="' . $img . '"/></div><div class="detail-box03__txt"><div class="detail-box03__title"><i class="fa fa-angle-right"></i>' . $product_name . '</div><div class="detail-box03__price">' . $price . '</div><div class="detail-box03__brand"><a href="' . $brand_link . '" target="_blank">' . $brand . ' <i class="fa fa-external-link"></i></a></div><div class="detail-box03__read">' . $read . '</div><div class="flexbox--spacebetween"><div class="detail-box03__shipping">' . $shipping . '</div><div class="detail-box03__similar-products"><i class="fa fa-arrow-right"></i><a href="' . $link . '" target="_blank"> 類似の商品をもっと探す</a></div></div><a class="detail-box03__btn big-btn href="' . $purchasebtn . '" target="_blank">♡この商品欲しい (1)</a></div></div>';
}
add_shortcode('希望商品', 'productBoxFunc');


// ユーザープロフィールの項目の追加
function set_user_meta($profile) {
  $profile['twitter'] = 'twitter';
  return $profile;
}
add_filter('user_contactmethods', 'set_user_meta', 10, 1);


/**
 * jqueryを読み込む
**/

add_action('wp_enqueue_scripts', 'my_enqueue_scripts');

function my_enqueue_scripts() {

    wp_enqueue_script('jquery');
}

