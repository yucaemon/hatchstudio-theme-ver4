<div class='paging-nav'>
<div class="paging-nav__container flexbox--spacebetween">

<?php
$prevpost = get_adjacent_post(false, '', true); //前の記事
$nextpost = get_adjacent_post(false, '', false); //次の記事
if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
?>

<?php
if ( $nextpost ) { //前の記事が存在しているとき
echo '<div class="paging-nav__content paging-nav__content-first"><a href="' . get_permalink($nextpost->ID) . '" title="'. get_the_title($nextpost->ID) . '" id="next" class="clearfix">
<div class="paging-nav__head flexbox"><div class="paging-nav__head__txt flexbox"><i class="fas fa-angle-left"></i><div class="next_title">次の記事へ</div></div></div>
<div class="paging-nav__body flexbox">
<div class="paging-nav__body__img">' . get_the_post_thumbnail($nextpost->ID, array(100,100)) . '</div>
<p class="paging-nav__body__read">'. get_the_title($nextpost->ID) . '</p>
</div></a></div>';
} else { //次の記事が存在しないとき
echo '<div id="next_no"><a href="' .home_url('/'). '"><div id="prev_next_home"></i>
</div></a></div>';
}
if ( $prevpost ) { //次の記事が存在しているとき
echo '<div class="paging-nav__content paging-nav__content-second"><a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" id="prev" class="clearfix">
<div class="paging-nav__head flexbox--h-bottom"><div class="paging-nav__head__txt flexbox"><div class="next_title">前の記事へ</div><i class="fas fa-angle-right"></i></div></div>
<div class="paging-nav__body flexbox--h-bottom">
<p class="paging-nav__body__read">' . get_the_title($prevpost->ID) . '</p>
<div class="paging-nav__body__img">' . get_the_post_thumbnail($prevpost->ID, array(100,100)) . '</div>
</div></a></div>';
} else { //前の記事が存在しないとき
echo  '<div id="prev_no"><a href="' .home_url('/'). '"><div id="prev_next_home">
</div></a></div>';
}

?>
<?php } ?>
</div>
</div>
