document.getElementById('plus').addEventListener("click", function increaseFontSize()
{
    var el = document.getElementById('function');
    var style = window.getComputedStyle(el, null).getPropertyValue('font-size');
    var fontSize = parseFloat(style); 
    el.style.fontSize = (fontSize + 1) + 'px';
});

document.getElementById('min').addEventListener("click", function increaseFontSize()
{
    var el = document.getElementById('function');
    var style = window.getComputedStyle(el, null).getPropertyValue('font-size');
    var fontSize = parseFloat(style); 
    el.style.fontSize = (fontSize - 1) + 'px';
});