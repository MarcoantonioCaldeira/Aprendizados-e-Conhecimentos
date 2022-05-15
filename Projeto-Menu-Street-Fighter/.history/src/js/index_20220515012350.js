/*OBJETIVO 1 = QUANDO PASSAR O MUSE EM CIMA DO PERSONAGEM 
 -colocar a classe selecionada no personagem que passamos o mouse em cima para
 adicionar a animação nele
 
  -retirar a classe selecionada do personagem que está selecionado

 OBJETIVO 2 = QUANDO PASSAR O MOUSE EM CIMA DO PERSONAGEM, TROCAR A IMAGEM E NOME DO 
 PERSONAGEM GRANDE

  -alertar a imagem do personagem do jogador 1
  -alertar o nome do personagem do jogador 1
*/
const personagens = document.querySelectorAll('.personagem')

personagens.forEach((personagem) => {
    personagem.addEventListener('mouseenter', () => {
    const personagemSelecionado = document.querySelector('.selecionado') 
    personagemSelecionado.classList.remove('selecionado')

    personagem.classList.add('selecionado')
  })
})
