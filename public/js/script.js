$(document).ready(function(){
 //smooth scroll
$('.liSmooth a').click(function(){
$('html,body').animate({
scrollTop: $('#'+$(this).data('value')).offset().top
},1200);
});
//bannar fade
$('.sliderPostion h1').fadeIn(700);
$('.sliderPostion p').fadeIn(800);
$(".wave").animate({opacity: "1"},1000);

//smooth scroll down
$('.wave').click(function(){
$('html,body').animate({
scrollTop: $('#governorates').offset().top
},1200);
});


});



