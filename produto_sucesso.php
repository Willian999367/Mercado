<?php 

require_once("header.php");
require_once("inc/postgre.php");

$sql = new Sql();


$id_tipo_produto = htmlspecialchars($_POST['id_tipo_produto']);
$nome_produto = htmlspecialchars($_POST['nome_produto']);
$preco = htmlspecialchars($_POST['preco']);
$descricao = htmlspecialchars($_POST['descricao']);
$imagem = htmlspecialchars($_POST['imagem']);


$inserir = $sql->query("Insert Into produto Values ('$nome_produto', '$id_tipo_produto',$preco);");
if ($inserir) {
  	  require_once("sucesso.php");  
    } else {
      require_once("erro.php");
    }

?>

<?php 
require_once("footer.php");
?> 