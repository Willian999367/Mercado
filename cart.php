<?php include_once("header.php");?>

<?php 
require_once("inc/postgre.php");
$sql = new Sql();

$result = $sql->query("SELECT id_tipo_produto FROM tipo_produto;");

$dat = $sql->select("SELECT nome_produto,preco FROM produto;");

$data = $sql->select("SELECT produto.nome_produto, preco, tipo_produto.imposto 
 FROM Produto Inner Join tipo_produto On (produto.Id_tipo_produto  = tipo_produto.Id_tipo_produto);");

$list = array();
foreach ($data as &$produto) {
	$nome_produto = $produto['nome_produto'];
	$preco = $produto['preco'];
	$imposto = $produto['imposto'];
	}


?> 

<section>
	
	<div class="container">

		<div class="row text-center title-default-roxo" style="margin:40px auto;">
			<h1>Vendas</h1>
			<hr>	
		</div>

		


		<table id="cart-products" class="table table-bordered">



			<thead>
				<tr>
					<th colspan="2">Produto(s)</th>
					<th class="text-center">Valor</th>
					<th class="text-center">Procentagem de Imposto</th>
					<th class="text-center">Valor Unitário</th>
					<th class="text-center">Quantidade de Produtos</th>
					
				</tr>
			</thead>
			<tbody>

			<?php foreach ($data as &$produto): $nome_produto = $produto['nome_produto']; $preco = $produto['preco']; 
					$imposto = $produto['imposto'];
					?>

				<tr>
					<td class="text-center"><img src="img/produtos/"></td>
					<td><h4><?=$nome_produto?><h4></td>

					<td class="text-center col-xs-2">
						<h4>R$ <?=$preco?></h4>
						<strong class="text-roxo"></strong>
					</td>


					<td class="col-xs-2 text-center">
						<h4><?=$imposto?>%</h4>
					</td>

						

					<td class="text-center">R$  </td>


					<td class="col-xs-2 text-center">
					<a href="teste.php?add=carrinho&id=<?=$nome_produto?>">Adcionar Carrinho</a>
					</td>
					


					</script>
				</tr>
			</tbody>
			
			
		
		<?php endforeach; ?>		
		</table>
		
					
			</div>
		</div>


	</div>

</section>

<?php include_once("footer.php");?>

