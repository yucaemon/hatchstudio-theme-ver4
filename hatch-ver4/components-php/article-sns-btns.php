<div class='single-page__post-down__sns-icons flexbox'>
<div class='sns-icons__img'>
<?php
  $share_url   = get_permalink();
  $share_title = get_the_title();
?>
<a href="//www.facebook.com/sharer.php?src=bm&u=<?=$share_url?>&t=<?=$share_title?>" title="Facebookでシェア" onclick="javascript:window.open(this.href, '_blank', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=800,width=600');return false;"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-long-btn.svg"></a>
</div>
<div class='sns-icons__img'>
<a class="btn--twitter" href="http://twitter.com/share?url=<?php the_permalink();?>&text=<?php echo get_the_title(); ?>&via=hatchstudioinc&tw_p=tweetbutton&related=hatchstudioinc">
<img src="<?php echo get_template_directory_uri(); ?>/images/twitter-long-btn.svg">
</a>
</div>
</div>
