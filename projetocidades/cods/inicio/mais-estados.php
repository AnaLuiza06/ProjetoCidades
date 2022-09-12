<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Projeto Cidades</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/style-inicio.css">
</head>
<body>

	<section id="img-inicio">
		<div class="fundo-inicio">
			<h1>Minas Gerais</h1>
		</div>
		<img src="https://s5.static.brasilescola.uol.com.br/be/2021/11/floresta-amazonica-paisagem.jpg">
		<!-- Fonte: https://brasilescola.uol.com.br/geografia/paisagens-naturais.htm -->
	</section>

	<section id="cards-regioes" data-id="5">
		<div class="btn-carrosel">
			<button id="cardAnterior" onclick="mostrarAnterior()"><</button>
		</div>
		<div class="container-regioes">
			<a href="#">
				<div class="card-regioes active" id="1">
					<h3>Sul</h3>
				</div>
			</a>

			<a href="#">
				<div class="card-regioes active" id="2">
					<h3>Sudeste</h3>
				</div>
			</a>

			<a href="#">
				<div class="card-regioes active" id="3">
					<h3>Centr-Oeste</h3>
				</div>
			</a>

			<a href="#">
				<div class="card-regioes active" id="4">
					<h3>Norte</h3>
				</div>
			</a>

			<a href="#">
				<div class="card-regioes" id="5">
					<h3>Nordeste</h3>
				</div>
			</a>
		</div>

		<div class="btn-carrosel">
			<button id="cardProximo" onclick="mostrarProximo()">></button>
		</div>
	</section>

	<div class="contaier-conteudo">
		
		<section id="container-dados">
			<h2>Dados</h2>
			<div class="container">
				<div>
					<p>Capital:</p>
					<p>Cidade mais populosa:</p>
					<p>População:</p>
					<p>Área:</p>
					<p>Densidade:</p>
					<p>PIB do país:</p>
					<p>IDH:</p>
				</div>
				<div>
					<img src="https://i0.wp.com/elizabethwerneck.com/wp-content/uploads/2022/03/onde-fica-ibiza-na-europa-mapa.jpg?fit=667%2C579&ssl=1">
				</div>
			</div>
		</section>

		<section id="container-historia">
			<h2>História</h2>
			<div class="container">
				<div>
					<img src="https://i0.wp.com/elizabethwerneck.com/wp-content/uploads/2022/03/onde-fica-ibiza-na-europa-mapa.jpg?fit=667%2C579&ssl=1">
				</div>
				<div>
					<p>Espanha (em castelhano: España; [esˈpaɲa] (Sobre este somescutar (ajuda·info))), oficialmente Reino de Espanha ou Reino da Espanha (Reino de España),[nt 1][nt 2] é um país principalmente localizado na Península Ibérica na Europa. Seu território também inclui dois arquipélagos: as ilhas Canárias, na costa da África, e as ilhas Baleares, no mar Mediterrâneo. Os enclaves africanos de Ceuta e Melilla fazem da Espanha o único país europeu a ter uma fronteira terrestre com um país africano (Marrocos). Várias pequenas ilhas no mar de Alborão também fazem parte do território espanhol. A Espanha continental é limitada a sul e a leste pelo Mediterrâneo, exceto por uma pequena fronteira terrestre com Gibraltar; a norte e a nordeste pela França, por Andorra e pelo Golfo da Biscaia; e a oeste e noroeste por Portugal e pelo Oceano Atlântico. Com uma área de 505 990 quilômetros quadrados, a Espanha é o maior país da Europa Meridional, o segundo maior país da Europa Ocidental e da União Europeia (UE) e o quarto maior país de todo o continente europeu. Também é o sexto país mais populoso da Europa e o quarto da UE. A capital e maior cidade é Madri; outras grandes áreas urbanas incluem Barcelona, Valência, Sevilha, Málaga, Bilbau e Granada.</p>
				</div>
			</div>
		</section>

		<section id="contaier-turismo">
			<h2>Pontos Turísticos</h2>
			<div class="cards-turismo">
				<div class="card-turismo">
					<h3>nome</h3>
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf9HVCMaFEp_1-XnB8q6nQBGBqNJcsBzwxuA&usqp=CAU">
				</div>

				<div class="card-turismo">
					<h3>nome</h3>
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf9HVCMaFEp_1-XnB8q6nQBGBqNJcsBzwxuA&usqp=CAU">
				</div>

				<div class="card-turismo">
					<h3>nome</h3>
					<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf9HVCMaFEp_1-XnB8q6nQBGBqNJcsBzwxuA&usqp=CAU">
				</div>
			</div>
		</section>

	</div>


	<script>
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

	</script>

</body>
</html>