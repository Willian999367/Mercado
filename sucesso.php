<?php 

require_once("header.php");
require_once("inc/postgre.php");

$sql = new Sql();

$id_produto = htmlspecialchars($_POST['id_produto']);
$tipo_produto = htmlspecialchars($_POST['tipo_produto']);
$imposto = htmlspecialchars($_POST['imposto']);

$inserir = $sql->query("Insert Into tipo_produto Values ($id_produto,'$tipo_produto',$imposto);");
 if ($inserir) {
      echo "Inserted user: ".$inserir['tipo_produto']." <br />";
    } else {
      echo pg_last_error($sql) . " <br />";
    }


$result = $sql->query("SELECT * FROM tipo_produto;");

?>

<section>
	<div class="container">
	<div class="row">
	<div class="col-md-4">			
	</div>	
	<div class="col-md-4">		
	<h1>Cadastrado com Sucesso!</h1>
	</div>
</div>


</div>
</div>
</section>


<?php 
require_once("footer.php");
?> 