$("button").click(function() {
    $(this).next(".dropdown_list").toggle()
    $(this).find("img").toggleClass("downArrow")
})
$('.n-ncader').click(function() {
    console.log(1);
    $(this).find('.n-npetur').toggleClass('x-opc');
    $(this).find('.n-ncadrword').toggleClass('x-opc')
})
$('.n-ncader').mousedown(function() {
    $(this).css('transform', 'scale(0.95)')
})
$('.n-ncader').mouseup(function() {
    $(this).css('transform', 'scale(1)')
})
$('.n-ncader').mouseleave(function() {
    $(this).css('transform', 'scale(1)')
})