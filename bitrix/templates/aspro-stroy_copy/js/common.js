$(document).ready(function() {

$('.mnu-item-drop-link').hover(function(){
$(this).addClass('active');
$(this).children('.mnu-drop').stop(false, true).fadeIn(300);
}, function(){
$(this).children('.mnu-drop').stop(false, true).fadeOut(300);
$(this).removeClass('active');
});
/*
$('.services-tabs-nav-item').on('click', function() {
$(this).addClass('active').siblings().removeClass('active').closest('.services-tabs').find('.services-tabs-content').removeClass('active').eq($(this).index()).addClass('active');
});
*/
$('.calc-slider').slider({
range: 'min',
min: 3,
max: 500,
value: 30,
slide : function(event, ui) {
$('.calc-slider-value').text(ui.value);
$('input[name="form_square"]').val(ui.value);
calcMain();
},
});
$('.calc-slider-value').text($('.calc-slider').slider('value'));

$('input[name="form_square"]').on('change', function () {
$('.calc-slider').slider("value", $(this).val());
calcMain();
});

$('.calc-left input').on('change', function() {
console.log($(this).val());
calcMain();
});

function calcMain() {
var price = 0;
var author = 0;
if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_1") {
price = 1250;
author = 4150;
} else if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_2") {
price = 2050;
author = 4150;
} else if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_3") {
price = 2550;
author = 4150;
}
else if ($("input[name=form_radio_SIMPLE_QUESTION_635]:checked").prop('id') == "QUESTION_635_4") {
price = 4150;
author = 1000;
}
$("#tarif_price").text(price + " руб.");
var square = parseInt($("input[name=form_square]").val());
$("#calculated_price").text(square*price + ($("#QUESTION_636").prop('checked')?author * square:0));
$('.calc-cost-value span').html((price*square+($("#QUESTION_636").prop('checked')?author*square:0)).toLocaleString('ru-RU'));
$("textarea[name=MESSAGE]").val("Калькулятор\n" +
"Услуги: " + ($("#QUESTION_636").prop('checked')?"+Авторский надзор":"") +"\n" +
"Площадь: " + square + " м2\n" +
"Стоимость: " + (price*square+($("#QUESTION_636").prop('checked')?author*square:0)) + " руб.");
};

$('.mnu-mob-item-drop-link').click(function () {
    $(this).toggleClass('in').next().slideToggle();
    $('.mnu-mob-item-drop-link').not(this).removeClass('in').next().slideUp();
});

$('.toggle-nav').on('click', function () {
    $(this).toggleClass('on');

    var $this = $(this);
    if ($this.hasClass('on')) {
        $('.mnu-mob-wrapper').animate({
            right: '0'
        }, 400);
        $('body').css({
            overflow: 'hidden'
        }).animate({
            right: '250px'
        }, 400);
    } else {
        $('.mnu-mob-wrapper').animate({
            right: '-250px'
        }, 400);
        $('body').css({
            overflow: 'inherit'
        }).animate({
            right: '0'
        }, 400);
    }
});

$('.phone-input').mask('+7 999 - 999 - 99 - 99');


});