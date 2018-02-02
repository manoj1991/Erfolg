var $svg0 = $('.audi').drawsvg({
    duration: 50000,
    easing: 'swing'
});

var $svg1 = $('.audience-draw').drawsvg({
    duration: 1000,
    easing: 'swing'
});

var $svg2 = $('.database-draw').drawsvg({
    duration: 5000,
    easing: 'swing'
});

var $svg3 = $('.design-draw').drawsvg({
    duration: 500,
    easing: 'swing'
});

var $svg4 = $('.digital-draw').drawsvg({
    duration: 500,
    easing: 'swing'
});

var $svg5 = $('.marketing-draw').drawsvg({
    duration: 150,
    easing: 'swing'
});

var $svg6 = $('.pipeline-draw').drawsvg({
    duration: 500000,
    easing: 'swing'
});

var $svg7 = $('.event-draw').drawsvg({
    duration: 5000,
    easing: 'swing'
});

var $svg8 = $('.web-draw').drawsvg({
    duration: 5000,
    easing: 'swing'
});

var $svg9 = $('.bg-image_ie').drawsvg({
    duration: 5000,
    easing: 'swing'
});

var $svg10 = $('.img-info_ie').drawsvg({
    duration: 10000,
    easing: 'swing'
});

var $svg11 = $('.pm1').drawsvg({
    duration: 50000,
    easing: 'swing'
});

var $svg12 = $('.pm2').drawsvg({
    duration: 50000,
    easing: 'swing'
});

var $svg13 = $('.ie-pm1').drawsvg({
    duration: 50000,
    easing: 'swing'
});

var $svg14 = $('.ie-pm2').drawsvg({
    duration: 50000,
    easing: 'swing'
});

var $svg15 = $('.backend').drawsvg({
    duration: 100000,
    easing: 'swing'
});


// $svg16 = $('.backend-2').drawsvg({
//     duration: 10000,
//     callback: function() {
//         animate(20);
//     }
// });

// function animate() {
//     $svg16.drawsvg('animate');
// }

// animate();


$svg = $('.backend-2').drawsvg({
    duration: 20000,
    callback: function() {
        animates();
    }
});

function animates() {
    $svg.drawsvg('animate');
}

animates();


var $svg16 = $('.wc-image').drawsvg({
    duration: 100000,
    easing: 'swing'
});


$svg0.drawsvg('animate');

$('.audience-draw').hide();
$(".ac-wrapper").hover(function() {
    $svg1.drawsvg('animate');
    $('.ac-draw').hide();
    $('.audience-draw').show();
});

$('.database-draw').hide();
$(".db-wrapper").hover(function() {
    $svg2.drawsvg('animate');
    $('.db-draw').hide();
    $('.database-draw').show();
});

$('.design-draw').hide();
$(".dd-wrapper").hover(function() {
    $svg3.drawsvg('animate');
    $('.dd-draw').hide();
    $('.design-draw').show();
});

$('.digital-draw').hide();
$(".dm-wrapper").hover(function() {
    $svg4.drawsvg('animate');
    $('.dm-draw').hide();
    $('.digital-draw').show();
});

$('.marketing-draw').hide();
$(".ms-wrapper").hover(function() {
    $svg5.drawsvg('animate');
    $('.ms-draw').hide();
    $('.marketing-draw').show();
});

$('.pipeline-draw').hide();
$(".pm-wrapper").hover(function() {
    $svg6.drawsvg('animate');
    $('.pm-draw').hide();
    $('.pipeline-draw').show();
});

$('.event-draw').hide();
$(".em-wrapper").hover(function() {
    $svg7.drawsvg('animate');
    $('.em-draw').hide();
    $('.event-draw').show();
});

$('.web-draw').hide();
$(".wc-wrapper").hover(function() {
    $svg8.drawsvg('animate');
    $('.wc-draw').hide();
    $('.web-draw').show();
});

$svg9.drawsvg('animate');

$svg10.drawsvg('animate');

$svg11.drawsvg('animate');

$svg12.drawsvg('animate');

$svg13.drawsvg('animate');

$svg14.drawsvg('animate');

$svg15.drawsvg('animate');

$svg16.drawsvg('animate');