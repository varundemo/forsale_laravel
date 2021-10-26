var $sideMenu = $('.navbar-nav');

$(window).resize(function() {
    if (window.innerWidth <= 600) $sideMenu.addClass('toggled');
    else $sideMenu.removeClass('toggled');
});
