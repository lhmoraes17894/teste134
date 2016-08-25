
<?php
include("conexao.php");
$nome=$_POST["nome"];
$cpf= $_POST["cpf"];
$nome=$_POST["nome"];
$marca= $_POST ["marca"];
$imei= $_POST ["imei"];



$query = "INSERT INTO `usuario` (`nome`,`cpf`,`marca_aparelho`,`modelo`,`n_imei`) VALUES ('$nome','$cpf','$marca','$modelo','$imei')";
// Executa a query
$inserir = mysql_query($query);
if ($inserir) {
echo "Notícia inserida com sucesso!";
} else {
echo "Não foi possível inserir a notícia, tente novamente.";
// Exibe dados sobre o erro:
echo "Dados sobre o erro:" . mysql_error();

}

?>



