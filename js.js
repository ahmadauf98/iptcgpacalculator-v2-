//Subject 2
function pFunction1() {
    var point = document.querySelector('.dropdown1').value;
    var ph = document.querySelector('#pInput1');
    ph.placeholder = point;
}

function gpFunction1() {
    var point = document.querySelector('.dropdown1').value;
    var ch = document.querySelector('#ch1').value;
    var gp = document.querySelector('#gpInput1');
    var total = ch * point;
    var t = total.toFixed(2);
    gp.placeholder = t;
}

//Subject 3
function pFunction2() {
    var point = document.querySelector('.dropdown2').value;
    var ph = document.querySelector('#pInput2');
    ph.placeholder = point;
}

function gpFunction2() {
    var point = document.querySelector('.dropdown2').value;
    var ch = document.querySelector('#ch2').value;
    var gp = document.querySelector('#gpInput2');
    var total = ch * point;
    var t = total.toFixed(2);
    gp.placeholder = t;
}

//Subject 4
function pFunction3() {
    var point = document.querySelector('.dropdown3').value;
    var ph = document.querySelector('#pInput3');
    ph.placeholder = point;
}

function gpFunction3() {
    var point = document.querySelector('.dropdown3').value;
    var ch = document.querySelector('#ch3').value;
    var gp = document.querySelector('#gpInput3');
    var total = ch * point;
    var t = total.toFixed(2);
    gp.placeholder = t;
}

//Subject 5
function pFunction4() {
    var point = document.querySelector('.dropdown4').value;
    var ph = document.querySelector('#pInput4');
    ph.placeholder = point;
}

function gpFunction4() {
    var point = document.querySelector('.dropdown4').value;
    var ch = document.querySelector('#ch4').value;
    var gp = document.querySelector('#gpInput4');
    var total = ch * point;
    var t = total.toFixed(2);
    gp.placeholder = t;
}

//Subject 6
function pFunction5() {
    var point = document.querySelector('.dropdown5').value;
    var ph = document.querySelector('#pInput5');
    ph.placeholder = point;
}

function gpFunction5() {
    var point = document.querySelector('.dropdown5').value;
    var ch = document.querySelector('#ch5').value;
    var gp = document.querySelector('#gpInput5');
    var total = ch * point;
    var t = total.toFixed(2);
    gp.placeholder = t;
}

//Subject 7
function pFunction6() {
    var point = document.querySelector('.dropdown6').value;
    var ph = document.querySelector('#pInput6');
    ph.placeholder = point;
}

function gpFunction6() {
    var point = document.querySelector('.dropdown6').value;
    var ch = document.querySelector('#ch6').value;
    var gp = document.querySelector('#gpInput6');
    var total = ch * point;
    var t = total.toFixed(2);
    gp.placeholder = t;
}

//Subject 8
function pFunction7() {
    var point = document.querySelector('.dropdown7').value;
    var ph = document.querySelector('#pInput7');
    ph.placeholder = point;
}

function gpFunction7() {
    var point = document.querySelector('.dropdown7').value;
    var ch = document.querySelector('#ch7').value;
    var gp = document.querySelector('#gpInput7');
    var total = ch * point;
    var t = total.toFixed(2);
    gp.placeholder = t;
}

//Subject 9
function pFunction8() {
    var point = document.querySelector('.dropdown8').value;
    var ph = document.querySelector('#pInput8');
    ph.placeholder = point;
}

function gpFunction8() {
    var point = document.querySelector('.dropdown8').value;
    var ch = document.querySelector('#ch8').value;
    var gp = document.querySelector('#gpInput8');
    var total = ch * point;
    var t = total.toFixed(2);
    gp.placeholder = t;
}

function clearForm()
{
    document.querySelector('.input').value=""; 
    document.querySelector('.input1').value=""; 
    document.querySelector('#ch1').value=""; 
    document.querySelector('#ch2').value=""; 
    document.querySelector('#ch3').value=""; 
    document.querySelector('#ch4').value=""; 
    document.querySelector('#ch5').value=""; 
    document.querySelector('#ch6').value="";  
    document.querySelector('#ch7').value=""; 
    document.querySelector('#ch8').value=""; 
}

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
