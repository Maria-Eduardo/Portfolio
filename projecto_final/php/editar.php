<?php
require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
if($id) {

    $sql = $pdo->prepare("SELECT * FROM clientes WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0) {

        $info = $sql->fetch( PDO::FETCH_ASSOC );

    } else {
        header("Location: list.php");
        exit;
    }

} else {
    header("Location: list.php");
    exit;
}
?>
<h1>Editar Usuário</h1>

<form method="POST" action="editar_action.php">
    <input type="hidden" name="id" value="<?=$info['id'];?>" />

    <label>
        Nome:<br/>
        <input type="text" name="nome" value="<?=$info['nome'];?>" />
    </label><br/><br/>

    <label>
        E-mail:<br/>
        <input type="email" name="email" value="<?=$info['email'];?>" />
    </label><br/><br/>

    <label for="telefone">Telefone:
        <input type="tel" name="telefone" placeholder="exemplo: +351 555555" value="<?=$info['telefone'];?>" >
    <br>
    <label for="morada">Morada 1: </label>
        <input type="text" name ="morada1" value="<?=$info['morada1'];?>">
     <br>
     <label for="morada">Morada 2: </label>
        <input type="text" name ="morada2" value="<?=$info['morada2'];?>">
     <br>      
    <label for="serviços"> Serviços: </label>
          
        <select name="serviços">
            <option>Corte</option>
            <option>Barboterapia</option>
            <option>Preenchimento de barba</option>
            <option>Camuflagem</option>
        </select>
    </br>
    <label for="data"> Escolha a data:</label>
        <input type="datetime-local" name="data1" value="<?=$info['data1'];?>" >
        <br>
    <input type="submit" value="Salvar" />
</form>