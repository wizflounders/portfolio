$(document).ready(function(){
    // ヘッダー　ハンバーガーメニュー

    $('.sp__hamburger-menu').click(function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.header__g-nav-sp').fadeIn();
            $('body').css('overflow-y', 'hidden');
        } else {
            $('.header__g-nav-sp').fadeOut();
            $('body').css('overflow-y','scroll'); 
        }
    });
});