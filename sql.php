<?php 

require_once("inc/postgre.php");

$sql = new Sql();

$result = $sql->query("SELECT * FROM test;");
$inserir = $sql->query("Insert Into test Values (1,'Willian','Santa Catarina',12);");

if (!$result) {
    echo "An error occurred.\n";
    exit;
}

$arr = pg_fetch_all($result);

echo "<pre>";
print_r($arr);
echo "</pre>";

exit;

?>