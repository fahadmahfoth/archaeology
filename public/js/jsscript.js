// Slider Speed
$('.carousel').carousel({
interval: 1500
});
// Toggle Header
function toggleBtn(){
document.getElementById("myHeader").classList.toggle("toggleBtnShow");
}
//brightness bar changer
rangeInput = document.getElementById('range');
rangeInput.addEventListener('change',function(){
document.getElementsByTagName("html")[0].style.filter="brightness(" + rangeInput.value + "%)";
});
