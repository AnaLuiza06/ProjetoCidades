		function mostrarAnterior(){
			const elant = document.querySelectorAll(".card-regioes")

			const cardsActive = document.querySelectorAll(".active")
			const cardp1 = cardsActive[0].getAttribute("data-id");

			if (cardp1 > 1) {

			// remover card
				cardsActive[3].classList.remove('active')

			// adicionar card
				const novocar = parseInt(cardp1) - 2
				elant[novocar].classList.add('active')
			}
		}

		function mostrarProximo(){

			const el = document.querySelectorAll(".container-carrossel")
			const quantidade = parseInt(el.getAttribute("data-id"))

			const cardsActives = document.querySelectorAll(".active")
			const cardp4 = cardsActives[3].getAttribute("data-id")

			if (cardp4 < quantidade) {

			// remover card
				cardsActives[0].classList.remove('active')

			// adicionar card
				const novocard = parseInt(cardp4)
				el[novocard].classList.add('active')
			}
		}