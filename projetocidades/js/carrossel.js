const el = document.querySelector("#cards-regioes");
const qtdeCards = el.getAttribute("data-id");
console.log(qtdeCards);
const cardsActives = document.querySelectorAll(".active")
console.log(cardsActives);

		// const card1 = document.getElementById("1")
		// const card2 = document.getElementById("2")
		// const card3 = document.getElementById("3")
		// const card4 = document.getElementById("4")
		// const card5 = document.getElementById("5")

function mostrarAnterior(){
	const cardsActives = document.querySelectorAll(".active")
	cardsActives[4].classList.remove("active");
	cardsActives[0].classList.add("active");
}
function mostrarProximo(){
	const cardsActives = document.querySelectorAll(".active")
	cardsActives[0].classList.remove("active");
	cardsActives[4].classList.add("active");
}