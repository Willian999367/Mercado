<?php 
require_once("header.php");
?> 

		<section>
		
			<div class="container">
				<div class="row">
			<div class="col-md-4">			
			
			</div>	
				<div class="col-md-4" id="tipo_cadastro">	

			<form method="POST" action="tipo_produto_sucesso.php">

			<div class="form-group">
				<label for="number">Id Produto</label>
				<input type="number" name="id_produto" id="id_produto" class="form-control" required>
			</div>	


			<div class="form-group">
				<label for="nome">Nome tipo produto</label>
				<input type="text" name="tipo_produto" id="tipo_produto" class="form-control" placeholder="Digite o seu nome" required>
			</div>


			<div class="form-group">
				<label for="number">Imposto</label>
				<input type="number" name="imposto" id="imposto" class="form-control" required>
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