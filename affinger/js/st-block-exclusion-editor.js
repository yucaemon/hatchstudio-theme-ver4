(function (window, document, wp, undefined) {
	'use strict'

	wp.domReady(function () {
		wp.blocks.unregisterBlockType( 'core/site-logo' );
		wp.blocks.unregisterBlockType( 'core/site-tagline' );
		wp.blocks.unregisterBlockType( 'core/site-title' );
		wp.blocks.unregisterBlockType( 'core/query' );
		wp.blocks.unregisterBlockType( 'core/post-title' );
		wp.blocks.unregisterBlockType( 'core/post-content' );
		wp.blocks.unregisterBlockType( 'core/post-date' );
		wp.blocks.unregisterBlockType( 'core/post-excerpt' );
		wp.blocks.unregisterBlockType( 'core/post-featured-image' );
		wp.blocks.unregisterBlockType( 'core/loginout' );
		wp.blocks.unregisterBlockType( 'core/comment' );
		wp.blocks.unregisterBlockType( 'core/leatest-posts' );
		wp.blocks.unregisterBlockType( 'core/legacy-widget' );
		wp.blocks.unregisterBlockType( 'core/page-list' );
		wp.blocks.unregisterBlockType( 'core/posts-list' );
		wp.blocks.unregisterBlockType( 'core/post-terms' );
		wp.blocks.unregisterBlockType( 'core/query-title' );

		// WP 5.9+
		wp.blocks.unregisterBlockType( 'core/navigation' );
		wp.blocks.unregisterBlockType( 'core/post-author' );
		wp.blocks.unregisterBlockType( 'core/post-navigation-link' );
		wp.blocks.unregisterBlockType( 'core/post-comments' );
		wp.blocks.unregisterBlockType( 'core/term-description' );
	});

}(window, window.document, wp));
