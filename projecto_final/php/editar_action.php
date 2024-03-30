<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone');
$morada1 = filter_input(INPUT_POST, 'morada1');
$morada2 = filter_input(INPUT_POST, 'morada2');
$servicos = filter_input(INPUT_POST, 'serviços');
$data = filter_input(INPUT_POST, 'data1');

if($id && $name && $email && $telefone && $morada1 && $morada2 && $servicos && $data) {

    $sql = $pdo->prepare("UPDATE clientes SET nome = :nome, email = :email, telefone = :telefone, morada1 = :morada1, morada2 = :morada2, serviços = :serviços, data1 = :data1 WHERE id = :id");
    $sql->bindValue(':nome', $name);
    $sql->bindValue(':email', $email);
    $sql->bindValue(':telefone', $telefone);
    $sql->bindValue(':morada1', $morada1);
    $sql->bindValue(':morada2', $morada2);
    $sql->bindValue(':serviços', $servicos);
    $sql->bindValue(':data1', $data);
    $sql->bindValue(':id', $id);
    $sql->execute();
    

    header("Location: list.php");
    exit;
    
} else {
    header("Location: list.php");
    exit;
}

