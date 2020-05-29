<?php include_once("header.php");?>
<?php
  
session_start();

if(!isset($_SESSION['itens'])){
  $_SESSION['itens'] = array();
} 

if(isset($_GET['add']) && $_GET['add'] == 'carrinho'){
    $idProduto = $_GET['id'];
   
    if(!isset($_SESSION['itens'] [$_GET['id']]))
      {
        $_SESSION['itens'] [$_GET['id']] = 1; 
      }else{
         $_SESSION['itens'] [$_GET['id']] += 1;
      }
}

if(count($_SESSION['itens'])==0){
    echo "Carrinho Vazio<br><a href='cart.php'>Adcionar Itens</a>";
}


if(isset($_GET['del'])){
    $_SESSION['itens'] [$_GET['del']] -= 1;
}


?>


<?php

require_once("inc/postgre.php");
$sql = new Sql();
?>

<section>
  
  <div class="container">
   

   <div id="vendas">

    <div class="container">

    <div class="row text-center">
      <h2>Compras</h2>
      <hr>  
    </div>
</br>



    <table id="cart-products" class="table table-bordered">
      <thead>
      <tr>
          <th colspan="2">Produto(s)</th>
          <th class="text-center">Preço</th>
          <th class="text-center">Quantidade</th>
          <th class="text-center">Valor Total</th>
          <th class="text-center">Imposto</th>
          <th>&nbsp;</th>
        </tr>
      </thead>

       <?php 
            $total_dinheiro =array();
            $total_imposto = array();

            
            
            foreach ($_SESSION['itens'] as $Prod => $Quantidade):

            if($Quantidade <= 0){
              continue;
            } 



            $data = $sql->query("SELECT produto.nome_produto, preco, tipo_produto.imposto, imagem
            FROM Produto Inner Join tipo_produto On (produto.nome_tipo_produto  = tipo_produto.nome_tipo_produto)
            where nome_produto = '$Prod'");

             $Res = pg_fetch_assoc($data);
             $nome_produto = $Res['nome_produto'];
             $preco = $Res['preco'];
             $imposto = $Res['imposto'];
             $imagem = $Res['imagem'];
             $total = $preco * $Quantidade;
             $total1 = ($preco * $imposto) / 100; 
             $total2 = $Quantidade * $total1;
             array_push($total_dinheiro,$total);
             array_push($total_imposto,$total2);
        
        ?>

         <?php  
         $valor_total = array_sum($total_dinheiro);
         $valor_total_imposto = array_sum($total_imposto);

         if (empty($nome_produto)) {
           continue;
          }

         ?>

      <tbody>
        <tr>
          <td class="text-center">
            <img src="<?=$imagem?>" style="width:30px;height:30px;">
          </td>
          <td class="text-center"><?=$nome_produto?></td>
          <td class="col-xs-2 text-center">
            R$ 
            <?php 
            echo number_format($preco, 2, ',', '.'); 
            ?>

          </td>
          <td class="text-center col-xs-2">

            <strong class="text-roxo"><?=$Quantidade?></strong>
          </td>
          <td class="text-center">R$ 
            <?php 
            $numberTotal = $Quantidade * $preco;
            echo number_format($numberTotal, 2, ',', '.'); 
            ?>
          </td>
          <?php 
          $valor = $preco * $imposto / 100;?>
          <td class="text-center">
            <?php 
            $number = $Quantidade * $valor;
            echo number_format($number, 2, ',', '.'); 
            ?>
          </td>
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
              <?php if(!empty($nome_produto)) { 
               echo '<td class="text-right">'; echo number_format($valor_total, 2, ',', '.'); 
               echo'</td>';
               }

               ?>
            </tr>
            <tr>
              <td>Total de Impostos:</td>
              <?php if(!empty($nome_produto)) { 
               echo '<td class="text-right">'; echo number_format($valor_total_imposto, 2, ',', '.'); 
               echo'</td>';
               }
               ?>

            </tr>
        
          </table>
        </div>
      </div>
    </div>

   <div>
        <a href="cart.php">
        <button type="submit" class="btn btn-danger">Voltar</button>
        </a>
      </div>  

  </div>

</section>

<?php include_once("footer.php");?>