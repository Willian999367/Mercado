<?php 

require_once("header.php");
require_once("inc/postgre.php");

$sql = new Sql();

$id_produto = htmlspecialchars($_POST['id_produto']);
$tipo_produto = htmlspecialchars($_POST['tipo_produto']);
$imposto = htmlspecialchars($_POST['imposto']);

$inserir = $sql->query("Insert Into tipo_produto Values ($id_produto,'$tipo_produto',$imposto);");
 if ($inserir) {
  	  require_once("sucesso.php");  
    } else {
      require_once("erro.php");
    }


?>

<?php 
require_once("footer.php");
?> 