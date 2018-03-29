// var $svg0 = $('.audi').drawsvg({
//     duration: 50000,
//     easing: 'swing'
// });

// var $svg1 = $('.audience-draw').drawsvg({
//     duration: 1000,
//     easing: 'swing'
// });




// var $svg2 = $('.database-draw').drawsvg({
//     duration: 5000,
//     easing: 'swing'
// });

// var $svg3 = $('.design-draw').drawsvg({
//     duration: 500,
//     easing: 'swing'
// });

// var $svg4 = $('.digital-draw').drawsvg({
//     duration: 500,
//     easing: 'swing'
// });

// var $svg5 = $('.marketing-draw').drawsvg({
//     duration: 150,
//     easing: 'swing'
// });

// var $svg6 = $('.pipeline-draw').drawsvg({
//     duration: 500000,
//     easing: 'swing'
// });

// var $svg7 = $('.event-draw').drawsvg({
//     duration: 5000,
//     easing: 'swing'
// });

// var $svg8 = $('.web-draw').drawsvg({
//     duration: 5000,
//     easing: 'swing'
// });

// var $svg9 = $('.bg-image_ie').drawsvg({
//     duration: 5000,
//     easing: 'swing'
// });

// var $svg10 = $('.img-info_ie').drawsvg({
//     duration: 10000,
//     easing: 'swing'
// });

// var $svg11 = $('.pm1').drawsvg({
//     duration: 50000,
//     easing: 'swing'
// });

// var $svg12 = $('.pm2').drawsvg({
//     duration: 50000,
//     easing: 'swing'
// });

// var $svg13 = $('.ie-pm1').drawsvg({
//     duration: 50000,
//     easing: 'swing'
// });

// var $svg14 = $('.ie-pm2').drawsvg({
//     duration: 50000,
//     easing: 'swing'
// });

// var $svg15 = $('.backend').drawsvg({
//     duration: 100000,
//     easing: 'swing'
// });


// // $svg16 = $('.backend-2').drawsvg({
// //     duration: 10000,
// //     callback: function() {
// //         animate(20);
// //     }
// // });

// // function animate() {
// //     $svg16.drawsvg('animate');
// // }

// // animate();


// $svg = $('.backend-2').drawsvg({
//     duration: 20000,
//     callback: function() {
//         animates();
//     }
// });

// function animates() {
//     $svg.drawsvg('animate');
// }

// animates();


// var $svg16 = $('.wc-image').drawsvg({
//     duration: 100000,
//     easing: 'swing'
// });


// //$svg0.drawsvg('animate');

// $('.audience-draw').hide();
// $(".ac-wrapper").hover(function() {
//     $svg1.drawsvg('animate');
//     $('.ac-draw').hide();
//     $('.audience-draw').show();
// });

// $('.database-draw').hide();
// $(".db-wrapper").hover(function() {
//     $svg2.drawsvg('animate');
//     $('.db-draw').hide();
//     $('.database-draw').show();
// });

// $('.design-draw').hide();
// $(".dd-wrapper").hover(function() {
//     $svg3.drawsvg('animate');
//     $('.dd-draw').hide();
//     $('.design-draw').show();
// });

// $('.digital-draw').hide();
// $(".dm-wrapper").hover(function() {
//     $svg4.drawsvg('animate');
//     $('.dm-draw').hide();
//     $('.digital-draw').show();
// });

// $('.marketing-draw').hide();
// $(".ms-wrapper").hover(function() {
//     $svg5.drawsvg('animate');
//     $('.ms-draw').hide();
//     $('.marketing-draw').show();
// });

// $('.pipeline-draw').hide();
// $(".pm-wrapper").hover(function() {
//     $svg6.drawsvg('animate');
//     $('.pm-draw').hide();
//     $('.pipeline-draw').show();
// });

// $('.event-draw').hide();
// $(".em-wrapper").hover(function() {
//     $svg7.drawsvg('animate');
//     $('.em-draw').hide();
//     $('.event-draw').show();
// });

// $('.web-draw').hide();
// $(".wc-wrapper").hover(function() {
//     $svg8.drawsvg('animate');
//     $('.wc-draw').hide();
//     $('.web-draw').show();
// });

// $svg9.drawsvg('animate');

// $svg10.drawsvg('animate');

// $svg11.drawsvg('animate');

// $svg12.drawsvg('animate');

// $svg13.drawsvg('animate');

// $svg14.drawsvg('animate');

// $svg15.drawsvg('animate');

// $svg16.drawsvg('animate');


var audi = anime({
    targets: ".audi-home_img-others  path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 14500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});

var audi = anime({
    targets: ".audi-home_img-ie  path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 14500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});


// var home = anime({
//     targets: ".edge-ie path",
//     strokeDashoffset: [anime.setDashoffset, 0],
//     easing: "easeInQuad",
//     duration: 4500,
//     delay: function(el, i) {
//         return i * 250;
//     },
//     direction: "both",
//     loop: false
// });

var home = anime({
    targets: ".pm1 path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 8500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});

var home = anime({
    targets: ".backend path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 10500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});

var home = anime({
    targets: ".wc-image path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 10500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});

// var home = anime({
//     targets: ".edge-ie path",
//     strokeDashoffset: [anime.setDashoffset, 0],
//     easing: "easeInQuad",
//     duration: 10500,
//     delay: function(el, i) {
//         return i * 250;
//     },
//     direction: "both",
//     loop: false
// });

var home = anime({
    targets: ".ie path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 10500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});

var home = anime({
    targets: ".pm2 path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 10500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});

var home = anime({
    targets: ".ie-pm2 path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 10500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});

var home = anime({
    targets: ".backend-2 path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 10500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});

var home = anime({
    targets: ".ac1 path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 10500,
    delay: function(el, i) {
        return i * 250;
    },
    direction: "both",
    loop: false
});

var home = anime({
    targets: ".bg-image_ie path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 4500,
    delay: function(el, i) {
        return i * 250;
    },
    loop: false
});

var home = anime({
    targets: ".bg2-image_ie path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 4500,
    delay: function(el, i) {
        return i * 250;
    },
    loop: false
});

var home = anime({
    targets: ".event-managment_header path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInQuad",
    duration: 4500,
    delay: function(el, i) {
        return i * 250;
    },
    loop: false
});

$(".ac-wrapper").hover(function() {
    var home = anime({
        targets: ".audience-draw path",
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: "easeInOutQuad",
        duration: 1500,
        loop: false
    });
});

$(".db-wrapper").hover(function() {
    var home = anime({
        targets: ".db-wrapper path",
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: "easeInOutQuad",
        duration: 1500,
        loop: false
    });
});

$(".dd-wrapper").hover(function() {
    var home = anime({
        targets: ".dd-wrapper path",
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: "easeInOutQuad",
        duration: 1500,
        loop: false
    });
});

$(".dm-wrapper").hover(function() {
    var home = anime({
        targets: ".dm-wrapper path",
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: "easeInOutQuad",
        duration: 1500,
        loop: false
    });
});

$(".ms-wrapper").hover(function() {
    var home = anime({
        targets: ".ms-wrapper path",
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: "easeInOutQuad",
        duration: 1500,
        loop: false
    });
});

$(".pm-wrapper").hover(function() {
    var home = anime({
        targets: ".pm-wrapper path",
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: "easeInOutQuad",
        duration: 4500,
        loop: false
    });
});

$(".em-wrapper").hover(function() {
    var home = anime({
        targets: ".em-wrapper path",
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: "easeInOutQuad",
        duration: 1500,
        loop: false
    });
});

$(".wc-wrapper").hover(function() {
    var home = anime({
        targets: ".wc-wrapper path",
        strokeDashoffset: [anime.setDashoffset, 0],
        easing: "easeInOutQuad",
        duration: 1500,
        loop: false
    });
});


var home = anime({
    targets: ".event-2 path",
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: "easeInOutQuad",
    duration: 4500,
    delay: 800,
    loop: false
});