<?php
    include_once("../15112017/conexao.php");
    include_once("../15112017/cliente.php");
    include_once("../15112017/clienteDao.php");  
    header('Content-Type: text/html; charset=utf-8');

    $nome = $_GET["nome"];

    $conexao = new Conexao('localhost', 'root', '', '15112017');

    $cli = new Cliente($nome, '', 0, '');
    //echo (cli->getDados());

    $clienteDao = new ClienteDao();

    $clienteDao->excluir($cli, $conexao->getLink());

    $conexao->close();
?>