<?php 
require_once("header.php");
?> 

		<section>
		
			<div class="container">
				<div class="row">
			<div class="col-md-4">			
			
			</div>	
				<div class="col-md-4" id="tipo_cadastro">	

			<form method="POST" action="produto_sucesso.php">			
			

			<div class="form-group">
				<label for="nome">Nome do Produto</label>
				<input type="text" name="nome_produto" id="nome_produto" class="form-control" placeholder="Digite o nome do produto" required>
			</div>

			<div class="form-group">
				<label for="preco">Preço</label>
				<input type="number" name="preco" id="preco" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="nome">Descrição</label>
				<input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descriação"
				required>
			</div>

			<div class="form-group">
				<label for="nome">Imagem</label>
				<input type="text" name="imagem" id="imagem" class="form-control" placeholder="Cole a URL:" required>
			</div>

			<?php 

				require_once("inc/postgre.php");

				$sql = new Sql();
				$result = $sql->query("SELECT nome_tipo_produto FROM tipo_produto;");
				
				$data = $sql->select("SELECT nome_tipo_produto FROM tipo_produto;");
				$list = array();
				foreach ($data as &$produto) {
	    		 $id_tipo_produto = $produto['nome_tipo_produto'];
	    		 array_push($list,$id_tipo_produto);
	    		} 
				
				
				
			?> 

			<div class="form-group">
				<label for="id_tipo_produto">Tipo Produto</label>
				<select class="custom-select" name="id_tipo_produto" id="id_tipo_produto" multiple size="3" required>
					<?php foreach($list as $value):?>
					<?php echo "<option value='$value'> $value </option>";?>
					<?php endforeach; ?>
				</select>
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