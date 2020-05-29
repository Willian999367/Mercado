<?php include_once("header.php");?>
<?php

echo $_SESSION[];
if(isset($_GET['del'])){
  unset($_SESSION['itens'] [$_GET['del']]);
}
