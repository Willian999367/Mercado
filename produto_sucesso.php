<?php 

require_once("header.php");
require_once("inc/postgre.php");

$sql = new Sql();

$id_produto = htmlspecialchars($_POST['id_produto']);
$id_tipo_produto = htmlspecialchars($_POST['id_tipo_produto']);
$nome_produto = htmlspecialchars($_POST['nome_produto']);
$preco = htmlspecialchars($_POST['preco']);
$descricao = htmlspecialchars($_POST['descricao']);
$imagem = htmlspecialchars($_POST['imagem']);

$data = $sql->select("SELECT id_produto FROM produto;");

$list = array();

foreach ($data as &$produto) {
	    $id = $produto['id_produto'];
	    	array_push($list,$id);
	    } 

$max = 0;

foreach($list as $value){
	if($value == ($_POST['id_produto'])){
		$max+=1;
	}
}

echo $max;
if($max == 0){
	$inserir = $sql->query("Insert Into produto Values ($id_produto, $id_tipo_produto,'$nome_produto',$preco);");
	$retorno = "Produto Cadastrado com Sucesso!";
}else{
	$retorno = "Erro! Produto já cadastrado";
}

?>

<section>
	<div class="container">
	<div class="row">
	<div class="col-md-4">			
	</div>	
	<div class="col-md-4">		
	<h1><?=$retorno ?></h1>
	</div>
</div>


</div>
</div>
</section>

<?php 
require_once("footer.php");
?> 