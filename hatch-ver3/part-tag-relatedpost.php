<div  class="related-article">
<?php
    $ads_infeed = array(1,4,9,12);
    //何番目に表示したいか
    $ads_infeed_count = '1';
    global $post_id;    //グローバル変数より投稿IDをゲット
    global $tags;       //グローバル変数よりタグ情報をゲット
    $relatedpost_count = 0; //関連記事を出力した数(カウンタ)
    $relatedpost_max = 15;   //関連記事を出力する最大数
    $related_taglist = [];  //関連記事を出力する為のタグリスト
    //記事からタグを集める
    foreach( (array)$tags as $tag ):
    //記事に含まれるタグの数だけ繰り返し
        $related_taglist[] = $tag -> term_id;
        //タグIDをリスト配列に追加
    endforeach;
    $args = array( //出力用セッティング
      'post__not_in'=> array( $post_id ),
      //おおもとの記事は除外する
      'tag__in'     => $related_taglist,
      //タグ配列に含まれるタグに含まれる記事を取得
    );
    query_posts( $args ); //設定より記事取得
    while ( have_posts() ) :
    //一致する記事が見つかった場合繰り返す
        the_post();
    ?>
    <?php if( !$relatedpost_count ): /* 最初の記事の場合、ヘッダを付与 */ ?>
    <ul class="post-lists article-list box-list flexbox">
    <?php endif; ?>
      <?php
        $ads_disp = in_array($ads_infeed_count, $ads_infeed);
        if($ads_disp){
      ?>
      <!-- ここにインフィード広告のコードを入れる -->
      <li class='eyecatch'>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <ins class="adsbygoogle"
             style="display:block; text-align:center;"
             data-ad-layout="in-article"
             data-ad-format="fluid"
             data-ad-client="ca-pub-1574488309106788"
             data-ad-slot="8640547089"></ins>
        <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      </li>
      <?php
      }
      $ads_infeed_count++;
      ?>
      <li class='eyecatch'>
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

    <?php
        $relatedpost_count++;   //記事を出力した数を加算
        if( !($relatedpost_count < $relatedpost_max ) ): //[if]目的の数記事を出力した場合
            break;                                              //ループを出る
        endif;
    endwhile;
    if( $relatedpost_count ):   ?>
    </ul><!--id:related_post_wrap close-->
    <?php else : ?>
    <ul class="post-lists article-list box-list flexbox ">
        <?php
          $ads_infeed = array(1,4,9);
          //何番目に表示したいか
          $ads_infeed_count = '1';
        ?>
        <?php
           $args = array(
          'posts_per_page' => 9,
          //表示（取得）する記事の数
          'post_type' => 'post'
          //投稿タイプの指定
        );
        $posts = get_posts( $args );
          if( $posts ) : foreach( $posts as $post) : setup_postdata( $post ); ?>
          <?php
            $ads_disp = in_array($ads_infeed_count, $ads_infeed);
            if($ads_disp){
          ?>
          <!-- ここにインフィード広告のコードを入れる -->
          <li class='eyecatch'>
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

            <style type="text/css">
            .adslot_1 { width: 320px; height: 100px; }
            @media (min-width:500px) { .adslot_1 { width: 468px; height: 60px; } }
            @media (min-width:800px) { .adslot_1 { width: 728px; height: 90px; } }
            </style>
            <ins class="adsbygoogle adslot_1"
                 style="display:block; text-align:center;"
                 data-ad-layout="in-article"
                 data-ad-format="fluid"
                 data-ad-client="ca-pub-1574488309106788"
                 data-ad-slot="8640547089"></ins>
            <script>
            window.onload = function() {
              var element = document.getElementsByClassName("adsbygoogle")[0];
              while (element.firstChild) element.removeChild(element.firstChild);
              (adsbygoogle = window.adsbygoogle || []).push({});
             }
            </script>
          </li>
          <?php
          }
          $ads_infeed_count++;
          ?>
          <li class='eyecatch'>
            <div class='post-lists__img article-list__img imgWrap'>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 230, 230 ) ); ?></a>
            </div>
            <p class="eyechatchlabel <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
              <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
            </p>
            <div class='post-lists__text article-list__text'>
              <h3 class='post-lists__title list-title'>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?>tt1</a>
              </h3>
            </div>
          </li>
        <?php endforeach; endif; ?>
     </ul>
    <?php
    endif;
    wp_reset_query();
    //元のクエリを復帰
    ?>
</div>
