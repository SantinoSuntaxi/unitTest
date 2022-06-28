$(document).ready(function(){
    $('.combobox').combobox()
});


$(document).ready(function(){
    $('.combobox1').combobox()
});


function enterNumber(){

    var e = document.getElementById('gestiones');

    if (!/^[0-9]+$/.test(e.value))
    {
        alert("INGRESAR SOLO NUMEROS.");
        e.value = e.value.substring(0,e.value.length-1);
    }
}

function enterNumbertr(){

    var e = document.getElementById('gestiones');

    if (!/^[0-9]+$/.test(e.value))
    {
        alert("INGRESAR SOLO NUMEROS.");
        e.value = e.value.substring(0,e.value.length-1);
    }
}