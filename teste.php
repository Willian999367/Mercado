<?php include_once("header.php");?>
<?php
  
session_start();



if(!isset($_SESSION['itens'])){
  $_SESSION['itens'] = array();
} 

if(isset($_GET['add']) && $_GET['add'] == 'carrinho')
    $idProduto = $_GET['id'];
   
    if(!isset($_SESSION['itens'] [$_GET['id']]))
      {
        $_SESSION['itens'] [$_GET['id']] = 1; 
      }else{
         $_SESSION['itens'] [$_GET['id']] += 1;
      }

if(count($_SESSION['itens'])==0){
    echo "Carrinho Vazio<br><a href='cart.php'>Adcionar Itens</a>";
}

if(isset($_GET['del'])){
  unset($_SESSION['itens'] [$_GET['del']]);
}


?>


<?php

require_once("inc/postgre.php");
$sql = new Sql();
?>

<section>
  
  <div class="container">
    <div class="row text-center title-default-roxo" style="margin:40px auto;">
      <h2>Valores</h2>
      <hr>  
    </div>

    <table id="cart-products" class="table table-bordered">
      <thead>
      <tr>
          <th colspan="2">Produto(s)</th>
          <th class="text-center">Preço</th>
          <th class="text-center">Quantidade</th>
          <th class="text-center">Valor Total</th>
          <th class="text-center">Imposto/Item</th>
          <th>&nbsp;</th>
        </tr>
      </thead>

       <?php 
            $total_dinheiro =array();
            $total_imposto = array();

            
            
            foreach ($_SESSION['itens'] as $Prod => $Quantidade):

            $data = $sql->query("SELECT produto.nome_produto, preco, tipo_produto.imposto 
            FROM Produto Inner Join tipo_produto On (produto.Id_tipo_produto  = tipo_produto.Id_tipo_produto)
            where nome_produto = '$Prod'");

             $Res = pg_fetch_assoc($data);
             $nome_produto = $Res['nome_produto'];
             $preco = $Res['preco'];
             $imposto = $Res['imposto'];
             $total = $preco * $Quantidade;
             $total1 = $preco * $imposto / 100;
             $total2 = $preco - $total1; 
             array_push($total_dinheiro,$total);
             array_push($total_imposto,$total2);
        
        ?>

         <?php  
         $valor_total = array_sum($total_dinheiro);
         $valor_total_imposto = array_sum($total_imposto);


         ?>

      <tbody>
        <tr>
          <td class="text-center"><img src="img/produtos/"></td>
          <td class="text-center"><?=$nome_produto?></td>
          <td class="col-xs-2 text-center">
            R$ <?=$preco?>
          </td>
          <td class="text-center col-xs-2">

            <strong class="text-roxo"><?=$Quantidade?></strong>
          </td>
          <td class="text-center">R$ <?=$Quantidade * $preco?></td>
          <?php $valor = $preco * $imposto / 100 ?>
          <td class="text-center"><?=$preco- $valor?></td>
          <td class="text-center">
              <a href="teste.php?del=<?=$nome_produto?>">
              X
            </a>
            </button>
          </td>
        </tr>

      </tbody> 
      <?php endforeach; ?>
      
    </table>


    <div class="row">
      <div class="col-sm-8">

      </div>
      <div class="col-sm-4">
        <div class="box-cart-totais">
          <table class="table">
            <tr>
              <td>Total da Compra</td>
              <td class="text-right"><?=$valor_total?></td>
            </tr>
            <tr>
              <td>Total de Impostos:</td>
              <td class="text-right">R$ <?=$valor_total_imposto?></td>
            </tr>
        
          </table>
        </div>
      </div>
    </div>

   

  </div>

</section>

<?php include_once("footer.php");?>