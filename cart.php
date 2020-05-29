<?php include_once("header.php");?>

<?php 
require_once("inc/postgre.php");
$sql = new Sql();

$result = $sql->query("SELECT nome_tipo_produto FROM tipo_produto;");

$dat = $sql->select("SELECT nome_produto,preco FROM produto;");

$data = $sql->select("SELECT produto.nome_produto, preco, tipo_produto.imposto, imagem
 FROM Produto Inner Join tipo_produto On (produto.nome_tipo_produto  = tipo_produto.nome_tipo_produto);");

$list = array();
foreach ($data as &$produto) {
	$nome_produto = $produto['nome_produto'];
	$preco = $produto['preco'];
	$imposto = $produto['imposto'];
	$imagem = $produto['imagem'];
	}
?> 

<section>
	
	<div class="container">

		<div id="vendas">

		<div class="container">

		<div class="row text-center">
			<h2>Produtos</h2>
			<hr>	
		</div>
	</br>
	
		<table id="cart-products" class="table table-bordered">
			<thead>
				<tr>
					<th colspan="2"><h5>Produto(s)</h5></th>
					<th class="text-center"><h5>Valor</h5></th>
					<th class="text-center"><h5>Procentagem de Imposto</h5></th>
					
					<th class="text-center"><h5>Quantidade de Produtos<h5></th>
					
				</tr>
			</thead>
			<tbody>

			<?php foreach ($data as &$produto): $nome_produto = $produto['nome_produto']; $preco = $produto['preco']; 
					$imposto = $produto['imposto'];
					$imagem = $produto['imagem'];
					?>

				<tr>
					<td class="text-center"><img src="<?=$imagem?>" style="width:30px;height:30px;"></td>
					<td><?=$nome_produto?></td>

					<td class="text-center col-xs-2">
						R$ 
						<?php echo number_format($preco, 2, ',', '.'); ?>
						<strong class="text-roxo"></strong>
					</td>


					<td class="col-xs-2 text-center">
						<?=$imposto?>%
					</td>

					
					<td class="col-xs-2 text-center">
					<a href="teste.php?add=carrinho&id=<?=$nome_produto?>">Adcionar</a>
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

