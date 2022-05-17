$("button").click(function() {
    $(this).next(".dropdown_list").toggle()
    $(this).find("img").toggleClass("downArrow")
})