<?php 
require_once("header.php");
?> 
		<section>
			
			<div id="banner">
				
				<h1>Orlando City<small>Orlando City Soccer Club</small></h1>

			</div>


			<div class="container">
				<div class="row">
			<div class="col-md-4">			
			
			</div>	
				<div class="col-md-4">	

			<form method="POST" action="form.php">

			<div class="form-group">
				<label for="number">Nascimento</label>
				<input type="number" name="id_produto" id="idade" class="form-control" required>
			</div>	




			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o seu nome" required>
			</div>
			<div class="form-group">
				<label for="email">E-mail</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="seu@email.com.br" required>
			</div>
			<div class="form-group">
				<label for="idade">Nascimento</label>
				<input type="number" name="idade" id="idade" class="form-control" required>
			</div>

			<div>
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</div>	


			</div>
			</div>	
			</div>


		</form>	

		</section>

		<?php 
		require_once("footer.php");
		?> 


	</body>
</html>