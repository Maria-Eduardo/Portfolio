<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /**retrive values form the  input type text boxes from the form */
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'email');
    $telefone = filter_input(INPUT_POST, 'telefone');
    $morada1 = filter_input(INPUT_POST, 'morada1');
    $morada2 = filter_input(INPUT_POST, 'morada2');
    $servicos = filter_input(INPUT_POST, 'serviços');
    $data = filter_input(INPUT_POST, 'data');
    
    /* validar os dados recebidos do formulário */
    if (empty($nome) || empty($email)){
        echo "Todos os campos do formulário devem conter valores ";
        exit();
    }  
        
        /* estabelece a ligação à base de dados */
    
   $ligacao = new mysqli("localhost", "root", "", "barbearia");

     /*verifica se ocorreu algum erro na ligação */
    if ($ligacao->connect_errno) {
        echo "Falha na ligação: " . $ligacao->connect_error; 
        exit();
    }

    /* texto sql da consulta*/
$consulta = " INSERT INTO clientes (nome, email, telefone, morada1, morada2, serviços, data1) VALUES ('$nome', '$email', '$telefone', '$morada1', '$morada2' ,'$servicos', '$data' )";

/* executar a consulta e testar se ocorreu erro */
if ($ligacao->query($consulta)) {
   /* header("Location: list.php");
    exit; */
     echo " Agendamento feito com sucesso" ;
    $ligacao->close();  /* fechar a ligação */
}
else{
    /* percorrer os registos (linhas) da tabela e mostrar na página */
    echo " Falha ao executar a consulta: \"$consulta\" <br>" . $ligacao->error;
    }
   
 

} else{
   echo " Erro, formulário não submetido ";
   exit();
}


                                                                                            


