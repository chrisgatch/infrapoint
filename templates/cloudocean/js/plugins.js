// Carousel
$('.carousel-p').owlCarousel({
    items: 1,
    margin: 30,
    stagePadding: 30,
    nav: true,
    smartSpeed: 450,
    autoHeight: true
});
// Clients
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
// Clients pro
$('.owl-carousel2').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    smartSpeed: 450,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});
// Portfolio
$('.loop-c').owlCarousel({
    items: 1,
    margin: 10,
    nav: true,
    autoHeight: true
});
// Counter 
$(function () {
    var austDay = new Date(2016, 12 - 1, 25);
    austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
    $('#defaultCountdown').countdown({
        until: austDay
    });
});
// Like Button
$(".fa.fa-heart").one("click", function () {
    $(this).css("color", "#FFF");
    $(this).css("opacity", "1");
    $(this).css("background", "#FF0000");
});
// WHMCS
    var csrfToken = '{$token}',
        markdownGuide = '{lang key="markdown.title"}',
        locale = '{if !empty($mdeLocale)}{lang key="locale"}{else}en_GB{/if}',
        saved = '{lang key="markdown.saved"}',
        saving = '{lang key="markdown.saving"}';
