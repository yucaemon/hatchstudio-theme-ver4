<header class='outer__header header02'>
<div class='flexbox--spacebetween'>
<div class='sns-icons flexbox'>
<div class='sns-icons__icon'>
<a href="https://www.facebook.com/hatchstudioinc"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-icon.svg"></a>
</div>
<div class='sns-icons__icon'>
<a href="https://twitter.com/hatchstudioinc"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.svg"></a>
</div>
<div class='sns-icons__icon'>
<a href="https://www.instagram.com/annie_jene/"><img src="<?php echo get_template_directory_uri(); ?>/images/instgram-icon.svg"></a>
</div>
</div>
<div class='search__box'>
<div class='search__form'>
<?php get_search_form(); ?>
</div>
</div>
</div>
<div class='logofind'>
<div class='logo__img'>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo-bk.svg" width="250"></a>
</div>
</div>
</header>
<div class='header-bar'>
<div class='header-bar__inner flexbox--spacebetween'>
<div class='header-bar__logo logo'>
<span class='logo__img-h'>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/eight-icon.svg"></a>
</span>
<span class='logo__title'>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">ホームへ戻る</a>
</span>
<div class='search__box'>
<div class='search__form'>
<?php get_search_form(); ?>
</div>
</div>
</div>
<?php include('header-bar-menu.php'); ?>
</div>
</div>
<div class='breadcrumb-container'>
<?php include('breadcrumb.php'); ?>
</div>
