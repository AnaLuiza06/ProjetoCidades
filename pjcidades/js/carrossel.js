function mostrarAnterior(){
	const elant = document.querySelectorAll(".card-carrosel")

	const cardsActive = document.querySelectorAll(".active")
	const cardp1 = Number(cardsActive[0].dataset.id)

	if (cardp1 > 0) {

		// remover card
		console.log(cardsActive)
		cardsActive[2].classList.remove('active')

		// adicionar card
		const novoCard = cardp1 - 1
		elant[novoCard].classList.add('active')
	}
}

function mostrarProximo(){

	const el = document.querySelectorAll(".card-carrosel")
	const quantidade = Number(el.length)

	const cardsActives = document.querySelectorAll(".active")
	const cardp4 = Number(cardsActives[2].dataset.id)

	if (cardp4 + 1 < quantidade) {
		// removendo card ativo
        cardp1 = cardsActives[0];
        cardp1.classList.remove('active');

		// adicionar card
		const novocard = Number(cardp4 + 1)
		el[novocard].classList.add('active')
	}
}