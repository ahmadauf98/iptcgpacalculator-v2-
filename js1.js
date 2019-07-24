function clearForm()
{
    document.querySelector('.input').value=""; 
    document.querySelector('.input1').value=""; 
    document.querySelector('.input2').value=""; 
    document.querySelector('.input3').value=""; 
    document.querySelector('.input4').value=""; 
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