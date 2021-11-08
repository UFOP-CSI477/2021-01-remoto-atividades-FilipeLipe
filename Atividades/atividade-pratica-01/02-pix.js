var saldo = 0
function Transacao(tipoChave, chave, status, valor, data){
    this.tipoChave = tipoChave;
    this.chave = chave;
    this.status = status;
    this.valor = valor;
    this.data = data;
}

function Transacao2(chave, valor){
    this.chave = chave;
    this.valor = valor;
}

function finalizar(){
    
    const tipoChave = document.formulario.tipoChave.value;
    const chave = document.formulario.chave.value;
    const status = document.formulario.status.value;
    const valor = document.formulario.valor.value;
    const data = document.formulario.data.value;

    const transacao = new Transacao(tipoChave, chave, status, valor, data);
    console.log(transacao)
    
    document.getElementById("status2").innerHTML = transacao.status
    document.getElementById("valor2").innerHTML = ("R$" + transacao.valor)
    document.getElementById("chave2").innerHTML = ("Chave: " + transacao.chave)
    document.getElementById("tipochave2").innerHTML = ("Tipo: " + transacao.tipoChave)
    document.getElementById("data2").innerHTML = ("Data: " + transacao.data)
    
    if(transacao.status == "SAIDA"){
        saldo = saldo - parseInt(transacao.valor)
    }else{
        saldo = saldo + parseInt(transacao.valor)
    }
    
    document.getElementById("visor").innerHTML = "Saldo: R$ "+ saldo

}



