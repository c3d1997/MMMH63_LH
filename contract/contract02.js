$("#upload_btn").click(function(){
    $("#mainUpload").click()
})
$("#mainUpload").change(function(){
    console.log(this);
    readURL(this);
    $(".uploadimg_before").css("background","#eef1f47c")
});
smallcontainer = $(".smallimg")
// console.log((smallcontainer.length)); 
let i = 0
function readURL(input){
  if(input.files && input.files[0]){
    var reader = new FileReader();
    reader.onload = function (e) {
        $("#nowimg").attr('src', e.target.result);
        if (i<smallcontainer.length) {
            $(smallcontainer[i]).attr('src', e.target.result);
        }else{
            i=0;
            $(smallcontainer[i]).attr('src', e.target.result);
            console.log("over");
        }
        i++;
        console.log(i);
    }
    reader.readAsDataURL(input.files[0]);
  }
}
