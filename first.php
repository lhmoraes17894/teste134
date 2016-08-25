
<?php

    $conexao = mysql_connect("localhost","root","") //porta, usuário, senha
    or die("Erro na conexão com banco de dados"); //caso não consiga conectar mostra a mensagem de erro mostrada na conexão
     
    $select_db = mysql_select_db("novo"); //seleciona o banco de dados
     
   
    $nome = $_POST["nome"]; 
    $user = $_POST["user"];
    $email = $_POST["email"];
     
    $string_sql = "INSERT INTO pessoa (id,nome,user,email) VALUES (null,'$nome','$user','$email')"; //String com consulta SQL da inserção
     
    mysql_query($string_sql,$conexao); //Realiza a consulta
     
    if(mysql_affected_rows() == 1){ //verifica se foi afetada alguma linha, nesse caso inserida alguma linha
        echo "<p>Cadastro feito com sucesso</p>";
        echo '<a href="cadastro.html">Voltar para formulário de cadastro</a>'; //Apenas um link para retornar para o formulário de cadastro
    } else {
        echo "Erro, não possível inserir no banco de dados";
    }
     
    mysql_close($conexao); 
?>