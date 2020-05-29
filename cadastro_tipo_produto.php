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
				<label for="nome">Tipo Produto</label>
				<input type="text" name="tipo_produto" id="tipo_produto" class="form-control" 
				placeholder="Digite o tipo de produto" required>
			</div>


			<div class="form-group">
				<label for="number">Imposto</label>
				<input type="number" name="imposto" id="imposto" class="form-control" 
				placeholder="Porcentagem sobre valor do produto" required>
			</div>
		</br>

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