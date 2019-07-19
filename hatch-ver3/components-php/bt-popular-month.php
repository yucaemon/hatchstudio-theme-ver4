<div class='bottom-popular two-column-sp'>
<div class='header-side'>
<div class='header-side__title'>
人気月間検索
<i class="fas fa-fire"></i>
トレンド記事
</div>
</div>
<div class='bottom-popular__body flexbox--spacebetween'>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:inline-block;width:826px;height:600px"
     data-ad-client="ca-pub-1574488309106788"
     data-ad-slot="7469499208"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
<ul class="post-lists article-list box-list">
<?php $args = get_popular_args('monthly', '12');
query_posts($args); ?>
<?php query_posts('posts_per_page=21' ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); $countblock++; ?>
<?php if($countblock == 4 or $countblock == 5 or $countblock == 8 or $countblock == 9 or $countblock == 15 or $countblock == 17) : ?>

<!-- ここに広告のコードor画像など --!>

<?php endif; ?>

    <li class='eyecatch'>
      <div class="post-lists__img article-list__img imgWrap"><a href="<?php echo get_permalink($this_post->ID); ?>"><?php the_post_thumbnail(array( 230, 230 )) ?></a></div>

      <p class="post-lists__title list-title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></p>
    </li>
<?php endwhile; endif;
wp_reset_postdata(); //クエリのリセット ?>
</ul>
</div>
</div>
