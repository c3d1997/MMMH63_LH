$('.x-title-list').click(function() {
    console.log(1);
    $('.x-title-content-all').removeClass('x-dislplaynone')
    $('.x-title-card-all').addClass('x-dislplaynone')
});
$('.x-title-card').click(function() {
    console.log(1);
    $('.x-title-content-all').addClass('x-dislplaynone')
    $('.x-title-card-all').removeClass('x-dislplaynone')
})
$('.x-canser').click(function() {
    console.log(1);
    $(this).parentsUntil('.x-title-content-all').addClass('x-displaynone-canser')
})
$('.x-canser-card').click(function() {
    console.log(1);
    $(this).parentsUntil('.x-title-card-all').addClass('x-displaynone-canser')
})