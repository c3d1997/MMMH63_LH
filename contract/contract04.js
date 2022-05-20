const myCanvas = document.querySelector('#myCanvas'),
pColor = document.querySelector('#pColor'),
pSize = document.querySelector('#pSize'),
ctx = myCanvas.getContext('2d');
ctx.lineCap = 'round';
ctx.lineJoin = 'round';

const mDown = event=>{
window.addEventListener('mouseup', mUp);
myCanvas.addEventListener('mousemove', mMove);
ctx.beginPath();
ctx.moveTo(event.offsetX, event.offsetY);
};
const mUp = event=>{
window.removeEventListener('mouseup', mUp);
myCanvas.removeEventListener('mousemove', mMove);
};
const mMove = event=>{
ctx.lineTo(event.offsetX, event.offsetY);
ctx.stroke();
};
myCanvas.addEventListener('mousedown', mDown);

// 設置畫筆大小顏色
const setPen = ()=>{
ctx.strokeStyle = black;
ctx.lineWidth = pSize.value;
};


const clearCanvas = ()=>{
ctx.clearRect(0, 0, myCanvas.width, myCanvas.height);
$(".c_sign_text").css("display","block")
$("#nowimg").css("display","none")

};
const saveCanvas = ()=>{
const image = myCanvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
// location.href = image;

let a = document.createElement('a');
a.setAttribute('download', 'draw.png');
a.setAttribute('href', image);
a.click();
};
$("#myCanvas").mousedown(function(){
$(".c_sign_text").css("display","none")
})


$("#upload_btn").click(function(){
$("#mainUpload").click()
$("#nowimg").css("display","block")
$(".c_sign_text").css("display","none")
})
$("#mainUpload").change(function(){
console.log(this);
readURL(this);
$(".uploadimg_before").css("background","#eef1f47c")
});
// smallcontainer = $(".smallimg")
// console.log(smallcontainer); 

function readURL(input){
if(input.files && input.files[0]){
var reader = new FileReader();

reader.onload = function (e) {
$("#nowimg").attr('src', e.target.result);
}
}
reader.readAsDataURL(input.files[0]);
}
$(".z_close_icon").click(function(){
$(this).next().removeAttr("src")
})