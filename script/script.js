
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
            img.setAttribute('src','../imagems/probiido.png')
            resultado.appendChild(img)
        } else {
            resultado.innerHTML += '<p>Você é de <strong>MAIOR!</strong></p>'
            img.setAttribute('src','../imagems/carteira.png')
            resultado.appendChild(img)
        }
    }
}