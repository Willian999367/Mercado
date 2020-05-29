<?php 
require_once("header.php");
?> 


<section>
		

	<div id="news" class="container">
		
		<h2>Lista Produtos</h2>
		<hr>
		</div>
	</div>

</br>	
<div class="row">
		<div class="jogador owl-carousel owl-theme" >	
		<div class="item">
			<div class="item-inner">	
			<img src="img/tv.jpg" alt="tv" width="190" height="150">	
			<h3>Compre esse tv a melhor do mercado</h3>
			<time> 28 novembro 2020</time>
		</div>	
		</div>

			
		<div class="item">
			<div class="item-inner">	
			<img src="img/tv.jpg" alt="tv" width="190" height="150">	
			<h3>Compre esse tv a melhor do mercado</h3>
			<time> 28 novembro 2020</time>
		</div>	
		</div>


		<div class="item">
			<div class="item-inner">	
			<img src="img/tv.jpg" alt="tv" width="190" height="150">	
			<h3>Compre esse tv a melhor do mercado</h3>
			<time> 28 novembro 2020</time>
		</div>	
		</div>
	

		<div class="item">
			<div class="item-inner">	
			<img src="img/tv.jpg" alt="tv" width="190" height="150">	
			<h3>Compre esse tv a melhor do mercado</h3>
			<time> 28 novembro 2020</time>
		</div>	
		</div>


		<div class="item">
			<div class="item-inner">	
			<img src="img/tv.jpg" alt="tv" width="190" height="150">	
			<h3>Compre esse tv a melhor do mercado</h3>
			<time> 28 novembro 2020</time>
		</div>	
		</div>



		<div class="item">
			<div class="item-inner">	
			<img src="img/tv.jpg" alt="tv" width="190" height="150">	
			<h3>Compre esse tv a melhor do mercado</h3>
			<time> 28 novembro 2020</time>
		</div>	
		</div>

		<div class="item">
			<div class="item-inner">	
			<img src="img/tv.jpg" alt="tv" width="190" height="150">	
			<h3>Compre esse tv a melhor do mercado</h3>
			<time> 28 novembro 2020</time>
		</div>	
		</div>


		<div class="item">
			<div class="item-inner">	
			<img src="img/tv.jpg" alt="tv" width="190" height="150">	
			<h3>Compre esse tv a melhor do mercado</h3>
			<time> 28 novembro 2020</time>
		</div>	
		</div>
	
	</div>
	</div>
	</div>		
	</div>

</br>
	
	<div id="estatisticas"> 
		<div class="container"> 
		<div class="row">	
			<div class="col-sm-4">
				<p>2020<small>Mercado numero do Brasil</small></p>
			</div>
			<div class="col-sm-4">
				<p>2020<small>Mercado numero um Brasil</small></p>
			</div>
			<div class="col-sm-4">
				<p>2020<small>Mercado numero um Brasil</small></p>
				</div>
		</div>

	</div>
	</div>	


	<div id="call-to-action">

		<div class="container">

		<div class="row text-center">
			<h2>Mercado mais famoso do Brasil </h2>
			<hr>	
		</div>

		<div class="row">
			<p> Em linguística, a noção de texto é ampla e ainda aberta a uma definição mais precisa. Grosso modo, pode ser entendido como manifestação linguística das ideias de um autor, que serão interpretadas pelo leitor de acordo com seus conhecimentos linguísticos e culturais. Seu tamanho é variável. </p>
		</div>

		<div class="row row-max-400" >
			<div class="col-sm-6">
				<a href="#" class="btn btn-roxo">Venda</a>
			</div>	

		<div class="col-sm-6">
			<a href="#" class="btn btn-amarelo">Cadastro Produto</a>
		</div>			
		</div>
	</div>
	</div>

	
	
	</section>

		</body>
</html>


<?php 
require_once("footer.php");
?> 

<script type="text/javascript" src="lib/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="lib/owl-carousel/owl.carousel.min.js"></script>
	<script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>

<script>
	
	$(document).ready(function(){
		$("#logotipo").on("mouseover",function(){
			$("#banner h1").addClass("efeito");
	}).on("mouseout",function(){
			$("#banner h1").removeClass("efeito");
		});

		$("#input-search").on("focus", function(){ 

			$("li.search").addClass("ativo");

		}).on("blur",function(){

			$("li.search").removeClass("ativo");

		});	

		$(".jogador").owlCarousel({
			loop:true,
			nav:true,
			margin: 30,
			navText: ["Anteior","Próximo"],
			responsive:{
				0 : {
					items: 1 
				},
				480:{
					items: 3
				},
				780: {
					items:4	
				} 	
			}
		});

	});

</script>

