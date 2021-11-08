function adcionarNumero( caracter ){
    var visor = document.getElementById('visor').innerHTML
    document.getElementById('visor').innerHTML = visor + caracter
}

function limpar(){
    document.getElementById('visor').innerHTML = ""
}

function equal(){
    document.getElementById('visor').innerHTML = eval(document.getElementById('visor').innerHTML)
}

function invert(){
    var visor =  eval(document.getElementById('visor').innerHTML)
    if(Math.sign(visor) == 1){
        visor = visor - 2*visor
    }else{
        visor = visor - 2*visor
    }
    document.getElementById('visor').innerHTML = visor
}

function apagar(){
    var visor =  document.getElementById('visor').innerHTML
    const str = visor.substring(0, visor.length - 1);;
    document.getElementById('visor').innerHTML = str
}