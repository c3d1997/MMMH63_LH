$(".c-dropdown_container").click(function(){
    $(this).find(".dropdown_list").toggle()
    $(this).find("img").toggleClass("downArrow")
})