<?php
if ( get_option( 'st_icon_logo' ) ):
	$st_icon_logo_url = esc_url( get_option( 'st_icon_logo' ) );
	$st_icon_logo_size_output = st_image_size_output($st_icon_logo_url, 'footer-icon-size', false);
else:
	$st_icon_logo_size_output = '';
endif;
$footer_logo_check = get_option( 'st_footer_logo' ) || ( get_option( 'st_logo_image' ) && ( st_headerfooter_logo() ) ) ? true : false;

if ( get_option( 'st_footer_logo' ) ):
	$site_logo = get_option( 'st_footer_logo' );
elseif( get_option( 'st_logo_image' ) && ( st_headerfooter_logo() ) ):
	$site_logo = get_option( 'st_logo_image' );
else:
	$site_logo = '';
endif;

if ( ! $footer_logo_check && get_option( 'st_icon_logo' ) ): ?>
	<div id="st-footer-logo">
		<div id="st-icon-logo">
			<?php if ( is_front_page() ): ?>
				<?php echo $st_icon_logo_size_output; ?>
			<?php else: ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo $st_icon_logo_size_output; ?></a>
			<?php endif; ?>
		</div>
<?php endif; ?>

	<div id="st-text-logo">

		<?php if( isset( $GLOBALS['stdata127'] ) && $GLOBALS['stdata127'] === 'yes' ): ?>

			<h3 class="footerlogo st-text-logo-top">
				<?php if ( !is_home() || !is_front_page() ): ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php endif; ?>

					<?php if  ( $site_logo ) : ?>
						<?php echo st_image_size_output($site_logo); ?>
					<?php else: ?>
						<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
					<?php endif; ?>

				<?php if ( !is_home() || !is_front_page() ): ?>
					</a>
				<?php endif; ?>
			</h3>

			<?php if(trim($GLOBALS['stdata102']) === ''): ?>
				<p class="footer-description st-text-logo-bottom">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a>
				</p>
			<?php endif; ?>

		<?php else: ?>

			<?php if(trim($GLOBALS['stdata102']) === ''): ?>
				<p class="footer-description st-text-logo-top">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'description' ); ?></a>
				</p>
			<?php endif; ?>

			<h3 class="footerlogo st-text-logo-bottom">
				<?php if ( !is_home() || !is_front_page() ): ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php endif; ?>

					<?php if  ( $site_logo ) : ?>
						<?php echo st_image_size_output($site_logo); ?>
					<?php else: ?>
						<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>
					<?php endif; ?>

				<?php if ( !is_home() || !is_front_page() ): ?>
					</a>
				<?php endif; ?>
			</h3>

		<?php endif; ?>

	</div>

<?php if ( ! $footer_logo_check && get_option( 'st_icon_logo' ) ): ?>
	</div><!-- /#st-footer-logo -->
<?php endif; ?>

<?php if(trim($GLOBALS['stdata206']) === ''): ?>
	<div class="st-footer-tel">
		<?php get_template_part( 'st-header-widget' ); ?>
	</div>
<?php endif; ?>
