    <script src="js/jquery-3.6.0.js"></script>
    <script>
        $(".z_checkbox_container :checkbox").click(function(){
            $(this).parent().siblings().find(":checkbox").prop('checked', false);
            if ($("#payBank").prop('checked')) {
                console.log("hi");
                $(".bank_area").css("display","block")
                $(".card_area").css("display","none")

            } else if ($("#payCard").prop('checked')) {
                $(".bank_area").css("display","none")
                $(".card_area").css("display","block")

            } else {
                $(".bank_area").css("display","none")
                $(".card_area").css("display","none")
            }
        })
        $("#z_bankListBtn").click(function(){
            $(this).next().toggle()
            $(this).find("img").toggleClass("downArrow")
            // console.log($(this).find("img"));
        })
    </script>
    </body>
</html>