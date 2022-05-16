    <script src="../js/jquery-3.6.0.js"></script>
    <script>
        $("#z_bankListBtn").click(function(){
            $(this).next().toggle()
            $(this).find("img").toggleClass("downArrow")
            // console.log($(this).find("img"));
        })

    
    </script>
    </body>
</html>