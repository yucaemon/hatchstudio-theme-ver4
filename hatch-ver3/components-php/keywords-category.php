<div class='keywords-category'>
<div class='header-side flexbox'>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-left.svg">
</div>
<div class='header-side__txt--en'>
CATEGORY
</div>
<div class='header-side__txt--jp'>
カテゴリーキーワード
</div>
<div class='header-side__img'>
<img src="<?php echo get_template_directory_uri(); ?>/images/font-deco-right.svg">
</div>
</div>
<div class='keywords__content flexbox'>
<?php wp_tag_cloud( 'smallest=11&largest=11&number=16' ); ?>
</div>
</div>
