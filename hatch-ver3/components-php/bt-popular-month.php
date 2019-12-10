<div class='bottom-popular two-column-sp'>
<div class='header-side'>
<div class='header-side__title'>
トレンド記事
<i class="fas fa-fire"></i>
人気ランキング
</div>
</div>
<div class='bottom-popular__body flexbox--spacebetween'>
<ul class='post-lists article-list box-list  flexbox'>
  <?php
  $last_month = date('Y-m-d', strtotime('-6 months'));
  /* 6ヶ月の中でアクセスが高い記事順リスト */
  $results = $wpdb->get_results("
    SELECT posts.ID, meta.meta_value FROM $wpdb->postmeta as meta
    join $wpdb->posts as posts on posts.ID = meta.post_id
    WHERE meta.meta_key = 'views'
    AND posts.post_status = 'publish'
    AND posts.post_type = 'post'
    AND posts.post_date > '$last_month';
    ", ARRAY_N);
  $average_views = array();
  foreach ($results as $result) {
    $average_views[$result[0]] = $result[1];
  }
  arsort( $average_views );
  $view_ordered_post_ids = array_keys( $average_views )
  ?>

  <?php foreach ( array_slice( $view_ordered_post_ids, 0, 9 ) as $this_post_index => $this_post_id ) {
    $this_post_views = $average_views[$this_post_id];
    $this_post = get_post( $this_post_id );
  ?>
    <li class='eyecatch'>
      <div class='post-lists__img article-list__img imgWrap'>
        <a href="<?php echo get_permalink($this_post->ID); ?>"><?php echo get_the_post_thumbnail( $this_post->ID, array( 230, 230 ) ); ?></a>
      </div>
      <div class="post-lists__text article-list__text">
        <p class="post-lists__title list-title"><a href="<?php echo get_permalink($this_post->ID); ?>"><?php echo $this_post->post_title; ?></a></p>
      </div>
    </li>
  <?php } ?>
</ul>
</div>
</div>
