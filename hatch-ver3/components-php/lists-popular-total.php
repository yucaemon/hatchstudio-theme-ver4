<dl class='news-list'>
<dt>
<div class='header-side__img--sp'>
<img src="<?php echo get_template_directory_uri(); ?>/images/popular-baner.svg">
</div>
<div class='header-side flexbox'>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-left.svg">
</div>
<div class='header-side__txt--en'>
POPULOR
<i class="fas fa-crown"></i>
</div>
<div class='header-side__txt--jp'>
総合TOPランキング
</div>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-right.svg">
</div>
</div>
</dt>
<div class='news-list__container two-column-sp'>
<?php
$results = $wpdb->get_results("
  SELECT posts.ID, meta.meta_value FROM $wpdb->postmeta as meta
  join $wpdb->posts as posts on posts.ID = meta.post_id
  WHERE meta.meta_key = 'views'
  AND posts.post_status = 'publish'
  AND posts.post_type = 'post'
  order by cast( meta.meta_value as signed) desc limit 8;
  ", ARRAY_N);

  $average_views = array();

  foreach ($results as $result) {
  $average_views[$result[0]] = $result[1];
  }

  $view_ordered_post_ids = array_keys( $average_views )
  ?>

  <?php foreach ( array_slice( $view_ordered_post_ids, 0, 10 ) as $this_post_index => $this_post_id ) {
  $this_post_views = $average_views[$this_post_id];
  $this_post = get_post( $this_post_id );
  ?>

  <dd class="news-list__content flexbox">
    <div class="eyecatch">
      <div class="news-list__thumb-img"><a href="<?php echo get_permalink($this_post->ID); ?>"><?php echo get_the_post_thumbnail( $this_post->ID,
        'thumbnail' ); ?><img src="<?php echo get_template_directory_uri(); ?>/images/house-img-portland.jpg"></a></div>
      <p class="eyechatchlabel <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
      </p>
    </div>


    <div class="news-list__header">
      <span class="views"><?php echo $this_post_views ?> views</span></i>
      <p class="news-list__title"><a href="<?php echo get_permalink($this_post->ID); ?>"><?php echo $this_post->post_title; ?></a></p>
    </div>
  </dd>
  <?php } ?>
</div>
</dl>
