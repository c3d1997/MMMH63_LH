if (window.innerWidth > 376) {
    $(".S-lg-share").mousedown(function() {
        $(this).css({
            'transform': 'translateY(0px)scale(1.0)'

        })
    })
    $(".S-lg-share").mouseup(function() {
        $(this).css({
            'transform': 'translateY(0px)scale(1.1)'

        })

    })
    $(".S-lg-share").mouseenter(function() {
        $(this).css({
            'transform': 'translateY(0px)scale(1.1)'

        })

    })
    $(".S-lg-share").mouseleave(function() {
        $(this).css({
            'transform': 'translateY(0px)scale(1.0)'

        })

    })
    $(".S-lg-like").mousedown(function() {
        $(this).css({
            'transform': 'translateY(0px)scale(1.0)',

        })

    })
    $(".S-lg-like").mouseup(function() {
        $(this).css({
            'transform': 'translateY(0px)scale(1.1)',

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
}
$(".S-lg-svg").click(function() {
    console.log(1);
    $(this).toggleClass('x-svg-color')


})