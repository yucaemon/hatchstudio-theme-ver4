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
        if ($(window).scrollTop() <= scrollY) {
            header.removeClass(adclass);
            $('.header-bar .search__box').hide();
        } else {
            header.addClass(adclass);
            $('.header-bar .search__box').show();
        }

    });



//サイドバーの広告固定


    $(window).on('load scroll', function(){
        // 要素を固定させる位置を取得
        var fixed = $('.side-fixed-area').offset().top -200;
        // 要素を解除する位置
        var footer = $('.single__container__bottom').offset().top -320;
        // 以下の条件分岐で使用する位置の状態を取得
        var windowScrollTop = $(window).scrollTop();
        var footerArea = windowScrollTop > footer;
        var beforeFixedArea = windowScrollTop < fixed;
        var fixedArea = windowScrollTop > fixed;

        if( footerArea || beforeFixedArea ) {
            $('.business-content').removeClass('side-fixed-content');
        } else if ( fixedArea ) {
            $('.business-content').addClass('side-fixed-content');
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