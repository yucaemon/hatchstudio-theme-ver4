/**
 * Created by yuka on 6/15/18.
 */

jQuery(document).ready(function($) {



//youtube動画の読み込み

$('document').ready(function() {
    if (window.matchMedia("(max-width: 768px)").matches) {
        $('#douga').remove();
    }

    var options = { videoId: 'iNAHMHkKCn4'};
    $('#douga').tubular(options);
});


//ヘッダーの固定

    // masthead scroll
    var header = $('.header-bar'); // fixed DOM
    var adclass = 'scrolled'; // add css class
    var scrollY = 180; // scroll

    $(window).scroll(function() {
        if ($(window).scrollTop() > scrollY) {
            header.addClass(adclass);
            $('.header-bar .search__box').show();
        } else {
            header.removeClass(adclass);
            $('.header-bar .search__box').hide();
        }
    });


//モバイル時のハンバーグナビの処理

$('.drawer').drawer();
$(".textArea").hide();

    $(".search-icon").click(function(){
        $($(this).next(".textArea")).animate(
            {height: "toggle", opacity: "toggle"},
            "nomal"
        );

    });








});