<div  class="related-article">
<?php
    global $post_id;    //グローバル変数より投稿IDをゲット
    global $tags;       //グローバル変数よりタグ情報をゲット
    $relatedpost_count = 0; //関連記事を出力した数(カウンタ)
    $relatedpost_max = 6;   //関連記事を出力する最大数
    $related_taglist = [];  //関連記事を出力する為のタグリスト

    //記事からタグを集める
    foreach( (array)$tags as $tag ):   //記事に含まれるタグの数だけ繰り返し
        $related_taglist[] = $tag -> term_id;    //タグIDをリスト配列に追加
    endforeach;

    $args = array(              //出力用セッティング
      'post__not_in'=> array( $post_id ),    //おおもとの記事は除外する
      'tag__in'     => $related_taglist, //タグ配列に含まれるタグに含まれる記事を取得
    );
    query_posts( $args );       //設定より記事取得
    while ( have_posts() ) :    //一致する記事が見つかった場合繰り返す
        the_post();
    ?>
        <?php if( !$relatedpost_count ): /* 最初の記事の場合、ヘッダを付与 */ ?>
            <ul class="related-article__container flexbox--spacebetween two-column-sp">
        <?php endif; ?>
                    <li class="related-article__content">
                      <a href="<?php echo get_permalink(); ?>" target="_blank" class="hover_fade" style="cursor: pointer;">
                        <div class="related-article__img related-article__thumb-img">
                          <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="related-article__text related-article__title">
                          <?php the_title(); ?>
                        </div>
                      </a>
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
        <?php
        $posts = get_posts(array(
        ));
        ?>
        <ul class="related-article__container flexbox--spacebetween two-column-sp">
          <?php if($posts): foreach((array)$posts as $post): setup_postdata($post); ?>
              <!--もし、一致する関連するタグがない場合、最新記事表示する内容が入ります。-->
              <li class="related-article__content">
                <div class="related-article__img related-article__thumb-img">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="related-article__text related-article__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
              </li>
              <!--表示する内容ここまで-->
          <?php endforeach; endif; ?>
         </ul>
    　　　
    <?php
    endif;
    wp_reset_query();   //元のクエリを復帰
?>
</div>
