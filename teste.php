<?php

include("conexao.php");

$titulo = 'Vandalismo mata 10 mil árvores por ano no Rio';
$texto = 'Não fosse privilegiada pela natureza, com a vasta extensão da Mata Atlântica, a paisagem do Rio seria desértica.
';
$cadastro = date('Y-m-d H:i:s'); // Formato de data padrão do MySQL
// ~~~~~~~~~~~~~~~~~~~~~~~~~~
// Manipulamos as variáveis para evitar problemas com aspas e outros caracteres protegidos do MySQL
$titulo = mysql_escape_string($titulo);
$texto = mysql_escape_string($texto);
// Montamos a consulta SQL
$query = "INSERT INTO `noticias` (`titulo`, `texto`, `cadastro`) VALUES ('".$titulo."', '".$texto."', '".$cadastro."')";
// Executa a query
$inserir = mysql_query($query);
if ($inserir) {
echo "Notícia inserida com sucesso!";
} else {
echo "Não foi possível inserir a notícia, tente novamente.";
// Exibe dados sobre o erro:
echo "Dados sobre o erro:" . mysql_error();
}