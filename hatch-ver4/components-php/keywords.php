<div class='keywords'>
<div class='header-side flexbox'>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-left.svg">
</div>
<div class='header-side__txt--en'>
KEYWORDS
<i class="fas fa-tag"></i>
</div>
<div class='header-side__txt--jp'>
トレンドタグ
</div>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-right.svg">
</div>
</div>
<div class='keywords__content flexbox'>
<?php wp_tag_cloud( 'smallest=11&largest=11&number=20' ); ?>
</div>
</div>
