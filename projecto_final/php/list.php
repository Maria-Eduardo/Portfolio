<?php
require 'config.php';

$lista = [];
$sql = $pdo->query("SELECT * FROM clientes"); /* consulta feita usando a extensão PDO (PHP Data Objects)*/ 
if($sql->rowCount() > 0) {
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<link rel="stylesheet" href="../css/style.css" >
<a href="inserir.php" class="button">INSERIR USUÁRIO</a>
<br><br>

<table border="1" width="100%" style="background-color:#ddd;">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>TELEFONE</th>
        <th>MORADA1</th>
        <th>MORADA2</th>
        <th>SERVIÇOS</th>
        <th>DATA E HORA</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td><?=$usuario['telefone'];?></td>
            <td><?=$usuario['morada1'];?></td>
            <td><?=$usuario['morada2'];?></td>
            <td><?=$usuario['serviços'];?></td>
            <td><?=$usuario['data1'];?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id'];?>"><img src="../images/iconeditar.jpg" width="25px" height="25px"></a>
                <a href="excluir.php?id=<?=$usuario['id'];?>" onclick="return confirm('Tem certeza que deseja excluir?')"><img src="../images/iconexcluir.jpg" width="25px" height="25px"></a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>