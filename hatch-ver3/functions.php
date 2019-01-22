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





//　検索フォームフィルタ（タイトル内のみ検索）
function wpse_11826_search_by_title( $search, $wp_query ) {
    if ( ! empty( $search ) && ! empty( $wp_query->query_vars['search_terms'] ) ) {
        global $wpdb;

        $q = $wp_query->query_vars;
        $n = ! empty( $q['exact'] ) ? '' : '%';

        $search = array();

        foreach ( ( array ) $q['search_terms'] as $term )
            $search[] = $wpdb->prepare( "$wpdb->posts.post_title LIKE %s", $n . $wpdb->esc_like( $term ) . $n );

        if ( ! is_user_logged_in() )
            $search[] = "$wpdb->posts.post_password = ''";

        $search = ' AND ' . implode( ' AND ', $search );
    }

    return $search;
}

add_filter( 'posts_search', 'wpse_11826_search_by_title', 10, 2 );


//検索フォームフィルタ（タグ内からも検索する機能を追加）
function custom_search_where($where){
  global $wpdb;
  if (is_search())
    $where .= "OR (t.name LIKE '%".get_search_query()."%' AND {$wpdb->posts}.post_status = 'publish')";
  return $where;
}

function custom_search_join($join){
  global $wpdb;
  if (is_search())
    $join .= "LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN {$wpdb->terms} t ON t.term_id = tt.term_id";
  return $join;
}

function custom_search_groupby($groupby){
  global $wpdb;

  // we need to group on post ID
  $groupby_id = "{$wpdb->posts}.ID";
  if(!is_search() || strpos($groupby, $groupby_id) !== false) return $groupby;

  // groupby was empty, use ours
  if(!strlen(trim($groupby))) return $groupby_id;

  // wasn't empty, append ours
  return $groupby.", ".$groupby_id;
}

add_filter('posts_where','custom_search_where');
add_filter('posts_join', 'custom_search_join');
add_filter('posts_groupby', 'custom_search_groupby');






//見出しのショートコード
function titleFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'element' => 'h2',
        'class' => 'headline-default'
    ), $atts ) );
    return '<'.$element.' class="'.$class.'">' . $content . '</'.$element.'>';
}
add_shortcode('title', 'titleFunc');

function h2Func( $atts, $content = null ) {
    return '<h2 class="headline-second">' . $content . '</h2>';
}
add_shortcode('見出し2', 'h2Func');

function h3Func( $atts, $content = null ) {
    return '<h3 class="headline-third">' . $content . '</h3>';
}
add_shortcode('見出し3', 'h3Func');


function h4Func( $atts, $content = null ) {
    return '<h4 class="headline-fourth">' . $content . '</h4>';
}
add_shortcode('見出し4', 'h4Func');

//ユーチューブのショートコード
function youtubeFunc( $atts, $content = null ) {
    return '<div class="youtube-container">' . $content . '</div>';
}
add_shortcode('ユーチューブ', 'youtubeFunc');


//boxのショートコード
function box2Func( $atts, $content = null ) {
    return '<div class="detail-box02 flexbox">' . $content . '</div>';
}
add_shortcode('画像入りbox2', 'box2Func');

function box3Func( $atts, $content = null ) {
    return '<div class="detail-box03 flexbox">' . $content . '</div>';
}
add_shortcode('商品box', 'box3Func');



//出典のショートコード
function sourceFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    return '<div class="sourcelink">出典 <a href="' . $content . '" target="_blank">' . $content . '</a></div>';
}
add_shortcode('出典', 'sourceFunc');


//写真説明のショートコード
function photoinfoFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
    ), $atts ) );
    return '<div class="photo-info">' . $content . '</div>';
}
add_shortcode('写真説明', 'photoinfoFunc');


//お店詳細のショートコード
function shopBoxFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'name' => '不明',
        'time' => '不明',
        'address' => '不明',
        'website' => '不明'
    ), $atts ) );
    return '<div class="detail-box01"><div class="detail-box01__title">' . $name . '</div><div class="detail-box01__contain"><p><i class="fas fa-map-marker-alt"></i>' . $address . '</p><p><i class="fa fa-clock-o" aria-hidden="true"></i>' . $time . '</a></p><p><a href="' . $website . '" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>WEBサイト</a></p></div></div>';
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


//外部リンクのショートコード
function externallinkFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
       'txt' => '不明',
       'url' => '不明'
    ), $atts ) );
    return '<div class="external-link"><p class="external-link__title">' . $txt . '</p><i class="fas fa-link"></i><a href="' . $url . '" target="_blank">' . $url . '</a></div>';
}
add_shortcode('外部リンク', 'externallinkFunc');


//記者紹介のショートコード
function authorinfoFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'img' => '不明',
        'author_name' => '不明',
        'read' => '不明',
        'weblink' => '不明',
        'facebooklink' => '不明',
        'twitterlink' => '不明'

    ), $atts ) );
    return '<div class="detail-author-box flexbox--v-center"><div class="detail-author-box__img"><img src="' . $img . '"/></div><div class="detail-author-box__txt"><div class="detail-author-box__title">' . $author_name . '</div><div class="detail-author-box__read">' . $read . '</div><div class="flexbox"><a href="' . $weblink . '" target="_blank"><div class="web__btn__small" target="_blank"><i class="fas fa-external-link-alt"></i></a></div><a href="' . $facebooklink . '" target="_blank"><div class="facebook__btn__small" target="_blank"><i class="fab fa-facebook-f"></i></div></a><a href="' . $twitterlink . '" target="_blank"><div class="twitter__btn__small" target="_blank"><i class="fab fa-twitter"></i></div></a></div></div></div>';
}
add_shortcode('記者紹介', 'authorinfoFunc');

//吹き出しのショートコード
function balloonFunc( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'img' => '不明',
        'author_name' => '不明',
        'read' => '不明'

    ), $atts ) );
    return '<div class="detail-balloon-box flexbox--v-center"><div><div class="detail-balloon-box__img"><img src="' . $img . '"/></div><div class="detail-balloon-box__title">' . $author_name . '</div></div><div class="detail-balloon-box__txt"><div class="detail-balloon-box__read">' . $read . '</div></div></div>';
}
add_shortcode('吹き出し', 'balloonFunc');



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



//popular post からquery_posts生成
function get_popular_args($range= "weekly", $limit = 8){
  //urlを作成
  $shortcode = '[wpp';
  $atts = '
          post_html="{url},"
          wpp_start=""
          wpp_end=""
          order_by="views"
          post_type="post"
          stats_comments=0
          stats_views=1
            ';
  $atts_2 = ' range='. $range;
  $atts_3 = ' limit='. $limit;
  $shortcode .= ' ' . $atts . $atts_2 . $atts_3 . ']';
  $result = explode(",", strip_tags(do_shortcode( $shortcode )));
  $ranked_post_ids = array();

  //urlから投稿IDを作成
  foreach($result as $_url){
    if(!empty($_url) && trim($_url) != ''){
      $id_string = url_to_postid($_url);
      array_push ($ranked_post_ids, intval($id_string));
    }
  }

  //idをreturn
  $args = array(
    'posts_per_page' => 20,
    'post__in' => $ranked_post_ids,
    'orderby' => 'post__in'
  );

  return $args;
}

//h2の見出しに広告を挿入

function ads_unit($content){
    if(!is_single()){
        return $content;
    }else{
/* 設定 */
        $adsCode1=<<<EOC
<!-- Adsense Code Start -->
広告大
<!-- Adsense Code End -->
EOC;

        $adsCode2=<<<EOC
<!-- Adsense Code Start -->
記事広告
<!-- Adsense Code End -->
EOC;
        $dmt='<h2';
        $pos1=array(1);
        $pos2=array(2,4,6,7);
/* 設定END 以降は変更しない！ */
        $content = preg_replace('/<!--[\s\S]*?-->/s', '', $content);
        $paragraphs=explode($dmt,$content);
        foreach($paragraphs as $pg){
            if($c>=1){
                if(in_array($c,$pos1)){
                    $customContent.=$adsCode1.$dmt.$pg;
                }if(in_array($c,$pos2)){
                    $customContent.=$adsCode2.$dmt.$pg;
                }else{
                    $customContent.=$dmt.$pg;
                }
            }else{
                $customContent.=$pg;
            }
            $c++;
        }
        return $customContent;
    }
}
add_filter('the_content','ads_unit');
