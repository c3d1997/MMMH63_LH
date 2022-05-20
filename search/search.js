$('.pc-button-F4F4F4-272').click(function() {
    $('.x-hidden-DisplayNone').css({
        'height': '540px',
        'width': '100%',
        'display': 'flex',
        'flex-direction': 'column',
        'justify-content': 'center',
        'align-items': 'center'
    })
    $('.pc-button-F4F4F4-272').css(
        'background-color', '#FEAC00'
    )
    $('.pc-button-FEAC00-272').css(
        'background-color', '#F1EDEA'
    )
    $('.x-search').css(
        'padding-top', '180px'
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
        'padding-top', '360px'
    )
    $('.x-search-keyword-input').css({
        'height': '70px',
        'overflow': 'hidden'
    })

})