<dl class='recommend-list post-lists'>
<dt>
<div class='header-img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/recommend.svg">
</div>
</dt>
<?php
$posts = get_posts(array(
'posts_per_page' => 5, // 表示件数
'tag_id' => 76
));
?>
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
      <dd class="recommend-list__content flexbox">
        <div class="post-lists__img recommend-list__thumb-img">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </div>
        <p class="post-lists__title recommend-list__title">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </p>
      </dd>
  <?php endforeach; ?>
<?php wp_reset_postdata();?>
<?php endif; ?>
</dl>
