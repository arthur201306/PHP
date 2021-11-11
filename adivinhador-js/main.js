function instrucao(qual){
    document.querySelector("#mensagem").innerHTML = qual
}

function jogo(fase){
    if (fase === 1){
        document.querySelector("#mensagem").innerHTML = "Você deve adivinhar o número que vou pensar"
    } else if (fase === 2){
        instrucao("Estou pensando em um número de 0 até 50")
        nmr = Math.floor(Math.random()*50)+1
    } else if (fase === 3){
        instrucao("Tente adivinhar o número !")
        var tentativa = document.querySelector("#entrada").value

        if (tentativa === nmr){
            instrucao("PARABÉNS ! VOCÊ ACERTOU !")
        } else if (tentativa < nmr){
            instrucao("Seu número é baixo demais...")
        } else if (tentativa > nmr){
            instrucao("Seu número é alto demais...")
        }
    }
}

var fase = 0
var nmr
document.querySelector('button').onclick = () => {
    fase = fase + 1
    jogo(fase)
}