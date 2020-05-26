<?php 

require_once("header.php");
require_once("inc/postgre.php");

$sql = new Sql();

$nome = htmlspecialchars($_POST['nome']);



$inserir = $sql->query("Insert Into test Values (1,'$nome','Santa Catarina',12);");
$result = $sql->query("SELECT * FROM test;");

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




