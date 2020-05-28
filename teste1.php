
<?session_start();?>
<?php


	if(!isset($_SESSION['venda'])){
  	$_SESSION['venda'] = array();
	} 

	

	if(isset($_GET['par'])){
	$Pro = $_GET['par'];
		if(!isset($_SESSION['venda'] [$Pro]))
      		{
        		$_SESSION['venda'] [$Pro] = 1; 
      	}else{
        	 $_SESSION['venda'] [$Pro] += 1;
      	}
	}	
	print_r($_SESSION['venda']);
	
?>


<section>
			
	<?php
	require_once("inc/postgre.php");
	$sql = new Sql();
	$data = $sql->select("SELECT * FROM produto;");

	?>	

	<?php foreach ($data as &$produto): $nome_produto = $produto['nome_produto'];  $preco = $produto['preco']?>

	<li>
		<span><?=$nome_produto?></span>
		<strong><a href="teste1.php?par=<?php echo $nome_produto?>"><?=$nome_produto?> </a> </strong>
	</li>

	<?php endforeach; ?>

</section>