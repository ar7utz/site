<?php
include '../../config.php';
include '../../funcoes/banco.php';

if (!empty($_GET)) {
    $id = $_GET['id'];
    //Delete do banco:
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM aluno where id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Banco::desconectar();

    header("Location: " . 'aaaaa.php');
}
