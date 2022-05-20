// var xHomePageSloganElement = $('.x-home-page-slogan'),
//     xHomePageSloganQuantity = xHomePageSloganElement.length;

// $(window).on('scroll', function() {
//         console.log(1);
//         window.requestAnimationFrame(function() {

//             for (var i = 0; i < xHomePageSloganQuantity; i++) {
//                 var currentElement = xHomePageSloganElement.eq(i);
//                 var scrolled = $(window).scrollTop();

//                 currentElement.css({
//                     'transform': 'translate3d(0,' + scrolled * -0.07 + 'px, 0)'

//                 })

//             }
//         })
//     })
// 共生分租講解動畫 
// Get the size of the device screen
var screenWidth = screen.width;
var screenHeight = screen.height;

// Get the browser window size
var windowWidth = window.innerWidth;
var windowHeight = window.innerHeight;

// Get the size of the entire webpage
const pageWidth = document.documentElement.scrollWidth;
const pageHeight = document.documentElement.scrollHeight;


var xIntroduceLeftElement = $('.x-introduce-left'),
    xIntroduceLeftQuantity = xIntroduceLeftElement.length;



$(window).on('scroll', function() {

        window.requestAnimationFrame(function() {
            if (window.innerWidth > 376) {
                for (var i = 0; i < xIntroduceLeftQuantity; i++) {
                    var currentElement = xIntroduceLeftElement.eq(i);
                    var scrolled = $(window).scrollTop();


                    currentElement.css({
                        'transform': 'translate3d(0,' + scrolled * +0.1 + 'px, 0)'

                    })
                }
            }

        })
    })
    // 
var xIntroduceRightElement = $('.x-introduce-right'),
    xIntroduceRightQuantity = xIntroduceRightElement.length;

$(window).on('scroll', function() {

    window.requestAnimationFrame(function() {
        if (window.innerWidth > 376) {
            for (var i = 0; i < xIntroduceRightQuantity; i++) {
                var currentElement = xIntroduceRightElement.eq(i);
                var scrolled = $(window).scrollTop();

                currentElement.css({
                    'transform': 'translate3d(0,' + scrolled * +0.1 + 'px, 0)'

                })

            }
        }
    })
})