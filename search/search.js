$(".js-range-slider").ionRangeSlider({
    skin: "round",
    from: 0,
});

$('.pc-button-F4F4F4-272').click(function() {
    $('.x-hidden-DisplayNone').css({
        'height': '540px',
        'width': '100%',
        'display': 'flex',
        'flex-direction': 'column',

        'align-items': 'center'
    })
    $('.pc-button-F4F4F4-272').css(
        'background-color', '#FEAC00'
    )
    $('.pc-button-FEAC00-272').css(
        'background-color', '#F1EDEA'
    )
    $('.x-search').css(
        'padding-top', '15vh'
    )
    $('.x-search-keyword-input').css({
        'height': '0px',
        'overflow': 'hidden'
    })
})
$('.pc-button-FEAC00-272').click(function() {
    $('.x-hidden-DisplayNone').css({
        'height': '0px',
        'width': '100%',
        'overflot': 'hidden'
    })
    $('.pc-button-F4F4F4-272').css(
        'background-color', '#F1EDEA'
    )
    $('.pc-button-FEAC00-272').css(
        'background-color', '#FEAC00'
    )
    $('.x-search').css(
        'padding-top', '40vh'
    )
    $('.x-search-keyword-input').css({
        'height': '70px',
        'overflow': 'hidden'
    })

})
$(".S-lg-share").mousedown(function() {
    $(".S-lg-share").css({
        'transform': 'translateY(4px)scale(1.1)'

    })
})
$(".S-lg-share").mouseup(function() {
    $(".S-lg-share").css({
        'transform': 'translateY(0px)scale(1.1)'

    })

})
$(".S-lg-share").mouseenter(function() {
    $(".S-lg-share").css({
        'transform': 'translateY(0px)scale(1.1)'

    })

})
$(".S-lg-share").mouseleave(function() {
    $(".S-lg-share").css({
        'transform': 'translateY(0px)scale(1.0)'

    })

})



$(".S-lg-like").mousedown(function() {
    $(this).css({
        'transform': 'translateY(4px)scale(1.1)'

    })

})
$(".S-lg-like").mouseup(function() {
    $(this).css({
        'transform': 'translateY(0px)scale(1.1)'

    })

})
$(".S-lg-like").mouseenter(function() {
    $(this).css({
        'transform': 'translateY(0px)scale(1.1)'

    })

})
$(".S-lg-like").mouseleave(function() {
        $(this).css({
            'transform': 'translateY(0px)scale(1.0)'

        })

    })
    // 
$(".x-button-only").click(function() {
    $(this).toggleClass('x-tag-on-click');
    $(this).siblings().removeClass('x-tag-on-click')
})
$(".x-button-more").click(function() {
    $(this).toggleClass('x-tag-on-click');

})
$(".x-button-clear").click(function() {
    $('button').removeClass('x-tag-on-click')
})