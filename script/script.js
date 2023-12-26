
function calculo() {
    let anoatual = new Date().getFullYear()
    let anonascimento = document.getElementById('yearid').value
    let nome = document.getElementById('userid').value
    let idade_atual = anoatual - Number(anonascimento)
    if (anonascimento.length == 0 || anonascimento >= anoatual) {
        window.alert("[ERROR] Verifique os dados e tente novamente!")
    } else {
        resultado = window.document.getElementById('result')
        resultado.innerHTML = `<p>${nome} sua idade é de ${idade_atual}</p>`

        img = document.createElement('img')
        img.setAttribute('id', 'foto')
        if (idade_atual < 18) {
            resultado.innerHTML += '<p>Você é de <strong>MENOR!</strong></p>'
            img.setAttribute('src', '../imagems/probiido.png')
            resultado.appendChild(img)
        } else {
            resultado.innerHTML += '<p>Você é de <strong>MAIOR!</strong></p>'
            img.setAttribute('src', '../imagems/carteira.png')
            resultado.appendChild(img)
        }
    }
}

function contar() {
    let resultado = document.getElementById('saida')
    resultado.innerHTML = ''
    let start = Number(window.document.getElementById('startid').value)
    let end = Number(window.document.getElementById('endid').value)
    let jump = Number(window.document.getElementById('jumpid').value)

    if (window.document.getElementById('startid').value.length == 0 || end == 0) {
        window.alert('INSIRA OS VALORES EM INICIO E FIM!')

    } else {
        if (jump == 0) {
            window.alert('VOCÊ NAO COLOCOU O DIGITO EM SALTAR A CADA. Iremos definir o valor 1!')
            jump = 1
        }

        for (let number = start; number <= end; number += jump) {

            resultado.innerHTML += `<span>&#128511; ${number}</span>`
            

           

        }
        resultado.innerHTML += `<span>&#128507;</span>`
    }
}