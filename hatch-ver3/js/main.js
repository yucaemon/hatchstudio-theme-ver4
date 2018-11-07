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